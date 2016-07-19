<?php
/*
Plugin Name: wp_practise list table
*/
register_activation_hook(__FILE__, 'custom_table_install');

function custom_table_install()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'jst_employees'; // do not forget about tables prefix
    $sql = "CREATE TABLE " . $table_name . " (
      id int(11) NOT NULL AUTO_INCREMENT,
      name tinytext NOT NULL,
      email VARCHAR(100) NOT NULL,
      PRIMARY KEY  (id)
    );";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
 
/* Create a new table class that will extend the WP_List_Table */

class jst_employees_table extends WP_List_Table
{
    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();
        $data = $this->table_data();
        $this->process_bulk_action();
        usort( $data, array( &$this, 'sort_data' ) );
        $perPage = 2;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);
        $this->set_pagination_args( array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ) );
        $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }
 
    public function get_columns()
    {
        $columns = array(
        	'cb' => '<input type="checkbox" />',
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email'
        );
 
        return $columns;
    }
 
    public function get_hidden_columns()
    {
        return array();
    }
 
    public function get_sortable_columns()
    {
        return array('id' => array('id', false));
    }
 
    private function table_data()
    {
       global $wpdb;
       $data = $wpdb->get_results( "SELECT * FROM wp_jst_employees" );
   		foreach($data as $key => $value)
			{
			  $data[$key] = (array) $value;
			}   
		return $data;	  
    }

    public function column_default( $item, $column_name )
    {
        switch( $column_name ) {
            case 'id':
            case 'name':
            case 'email':
            return $item[ $column_name ];
            default:
                return print_r( $item, true ) ;
        }
    }
 
    private function sort_data( $a, $b )
    {
        $orderby = 'id';
        $order = 'asc';
        if(!empty($_GET['orderby']))
        {
            $orderby = $_GET['orderby'];
        }
        if(!empty($_GET['order']))
        {
            $order = $_GET['order'];
        }
        $result = strnatcmp( $a[$orderby], $b[$orderby] );
        if($order === 'asc')
        {
            return $result;
        }
         return -$result;
    }
    /* insert checkbox */

	function column_cb( $item ) 
	{
	  return sprintf(
	    '<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['ID']
	  );
	}
	function get_bulk_actions()
	{
		$actions = array(
		'delete' => 'Delete'
		);
		return $actions;
	}
	function column_id($item)
    {           
         $actions = array(
            'edit' => sprintf('<a href="?page=my-secondary-slug&id=%s">%s</a>', $item['id'], __('Edit', 'jst_employees')),
            'delete' => sprintf('<a href="?page=%s&action=delete&id=%s">%s</a>', $_REQUEST['page'], $item['id'], __('Delete', 'jst_employees')),
        );

        return sprintf('%s %s',
            $item['id'],
            $this->row_actions($actions)
        );
    }
    
    function process_bulk_action()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'jst_employees';
        print_r($table_name);

         // do not forget about tables prefix
        if ('delete' === $this->current_action()) {
            $ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : array();
            print_r($ids);
            if (is_array($ids)) $ids = implode(',', $ids);
            if (!empty($ids)) {
                $wpdb->query("DELETE FROM $table_name WHERE id IN($ids)");
            }
        }
    }
}

add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
add_menu_page('My Custom Page', 'Vikas List', 'manage_options', 'jst-employees','display_data');
add_submenu_page( 'jst-employees', 'Vikas List', 'Vikas List', 'manage_options', 'jst-employees');
add_submenu_page( 'jst-employees', 'Add New', 'Add New', 'manage_options', 'my-secondary-slug','display_form');
}

function display_data() {?>
    <div class="wrap"><div id="icon-tools" class="icon32"></div>
	<h2>My List</h2>
	<h2>
	<a class="add-new-h2"
    href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=my-secondary-slug');?>"><?php _e('Add New', 'jst_employees')?></a>
    </h2>
	</div>
	<?php
    global $wpdb;
	$mydata=new jst_employees_table();
	$mydata->prepare_items();
    $message = '';
	if ('delete' === $mydata->current_action()) {
        $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Items deleted: %d', 'jst_employees'), count($_REQUEST['id'])) . '</p></div>';
    }
    ?>
    <?php echo $message; ?>
    <form id="jst_employeess-table" method="GET">
      <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
    <?php $mydata->display(); ?>
    </form>
<?php }
function display_form()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'jst_employees'; // do not forget about tables prefix
    $message = '';
    $errormsg = '';
    $default = array(
        'id' => 0,
        'name' => '',
        'email' => ''
     
    );
    if (wp_verify_nonce($_REQUEST['nonce'], basename(__FILE__))) {
        // combine our default item with request params
        $item = shortcode_atts($default, $_REQUEST);
        $item_valid = validate_data($item);
        if ($item_valid === true) {
            if ($item['id'] == 0) {
                $result = $wpdb->insert($table_name, $item);//insert data
                $item['id'] = $wpdb->insert_id;
                if ($result) {
                    $message = __('Item was successfully saved', 'jst_employees');
                } else {
                    $errormsg = __('There was an error while saving item', 'jst_employees');
                }
            } else {
                $result = $wpdb->update($table_name, $item, array('id' => $item['id']));
                if ($result) {
                    $message = __('Item was successfully updated', 'jst_employees');
                } else {
                    $errormsg = __('There was an error while updating item', 'jst_employees');
                }
            }
        } else {
            $errormsg = $item_valid;
        }
    }
    else {
        // if this is not post back we load item to edit or give new one to create
        $item = $default;
         if (isset($_REQUEST['id'])) {
            $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $_REQUEST['id']), ARRAY_A);
            if (!$item) {
                $item = $default;
                $notice = __('Item not found', 'jst_employees');
            }
        }
    }

    // here we adding our custom meta box
    add_meta_box('jst_employeess_form_meta_box', 'Employee data', 'add_meta_box_handler', 'jst_employees', 'normal', 'default');
    ?>
	<div class="wrap">
    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('Employee', 'jst_employees')?> <a class="add-new-h2"
    href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=jst-employees');?>"><?php _e('back to list', 'jst_employees')?></a>
    </h2>
    <?php if (!empty($errormsg)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>

    <form id="form" method="POST">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce(basename(__FILE__))?>"/>
        <?php /* NOTICE: here we storing id to determine will be item added or updated */ ?>
        <input type="hidden" name="id" value="<?php echo $item['id'] ?>"/>
        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">
                    <?php /* And here we call our custom meta box */ ?>
                    <?php do_meta_boxes('jst_employees', 'normal', $item); ?>
                    <input type="submit" value="<?php _e('Save', 'jst_employees')?>" id="submit" class="button-primary" name="submit">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
}

/* This function renders our custom metprepare_itemsa box */

function add_meta_box_handler($item)
{
    ?>

<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
    <tbody>
    <tr class="form-field">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Name', 'jst_employees')?></label>
        </th>
        <td>
            <input id="name" name="name" type="text" style="width: 95%" size="50" class="code" value="<?php echo esc_attr($item['name'])?>" placeholder="<?php _e('Your name', 'jst_employees')?>" required>
        </td>
    </tr>
    <tr class="form-field">
        <th valign="top" scope="row">
            <label for="email"><?php _e('E-Mail', 'jst_employees')?></label>
        </th>
        <td>
            <input id="email" name="email" type="email" style="width: 95%" size="50" class="code" value="<?php echo esc_attr($item['email'])?>" placeholder="<?php _e('Your E-Mail', 'jst_employees')?>" required>
        </td>
    </tr>
   
    </tbody>
</table>
<?php
}

/* Simple function that validates data and retrieve bool on success */

function validate_data($item)
{
    $messages = array();
    if (empty($item['name'])) $messages[] = __('Name is required', 'jst_employees');
    if (!empty($item['email']) && !is_email($item['email'])) $messages[] = __('E-Mail is in wrong format', 'jst_employees');
    if (empty($messages)) return true;
    return implode('<br />', $messages);
}
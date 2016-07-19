<?php
include_once 'application-top/crudclass.php';
$obj2=new CRUD();
$obj2->read();
?>
<html>
	<head>
		<?php include 'include/header.php';?>
	</head>
	<body>

<div class="row">
<div class="box col-md-12">
<div class="box-inner">


<div class="box-content">
<div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper"><div class="row"><div class="col-md-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
<thead>
<tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 227px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">Employee Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 191px;" aria-label="Date registered: activate to sort column ascending">Destination</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 103px;" aria-label="Role: activate to sort column ascending">Salary</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 103px;" aria-label="Status: activate to sort column ascending">Phone</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 417px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
</thead>

<tbody role="alert" aria-live="polite" aria-relevant="all">

<tr class="even">
<td class="  sorting_1"><?php echo $this->row['emp_name'];?></td>
<td class="center "><?php echo $this->row['destination'];?></td>
<td class="center "><?php echo $this->row['salary'];?></td>
<td class="center "><?php echo $this->row['phone'];?></td>
<td class="center ">
<a href="oops_insert.php" class="btn btn-primary btn-sm">
<i class="glyphicon"></i>
Insert
</a>
<a href="oops_view.php" class="btn btn-success btn-sm">
<i class="glyphicon"></i>
View
</a>
<a href="application-top/oops_update.php" class="btn btn-info btn-sm">
<i class="glyphicon"></i>
Edit
</a>
<a href="#" class="btn btn-danger btn-sm">
<i class="glyphicon"></i>
Delete
</a>
</td>
</tr></tbody></table><div class="row"><div class="col-md-12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="col-md-12 center-block"><div class="dataTables_paginate paging_bootstrap pagination"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
</div>
</div>
</div>
 
</div>

	
	</body>
</html>
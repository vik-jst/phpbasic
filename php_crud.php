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
<div class="box col-md-12">
<div class="box-inner">

<div class="box-content">

<div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper"><table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
<thead>
<tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="Date registered: activate to sort column ascending">Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="Role: activate to sort column ascending">Class</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="Status: activate to sort column ascending">Email</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
</thead>
<form id="form1" action="application-top/crud_functions.php" method="POST">
	<tbody role="alert" aria-live="polite" aria-relevant="all">
	<tr class="odd">
	<td class="center "><input type="text" id="inputSuccess1" name="stu_name" class="form-control"></td>
	<td class="center "><input type="text" id="inputSuccess1" name="stu_class" class="form-control"></td>
	<td class="center "><input type="text" id="inputSuccess1" name="stu_email" class="form-control"></td>
	<td class="center ">
	<input type="submit" value="Insert" name="insert" class="btn btn-primary"/>
	<a href="#" class="btn btn-success">
	View
	</a>
	<a href="#" class="btn btn-info">
	Edit
	</a>
	<a href="#" class="btn btn-danger">
	Delete
	</a>
	</td>
	</tr>
	</tbody>
	</form>
</table></div>
</div>
</div>
</div>
</body>
</html>
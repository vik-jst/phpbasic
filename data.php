<?php
if(isset($_POST['age']))
{
$name=$_POST['name'];
$age=$_POST['age'];

echo $name;
echo $age;
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "upload/".$_FILES['userImage']['name'];
echo $targetPath;
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img src="<?php echo $targetPath; ?>" width="100px" height="100px" />
<?php
}
}
}
?>
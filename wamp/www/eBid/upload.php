<?php
if(isset($_FILES['myfile']['name']))
{
$f=$_FILES['myfile'];

echo "File name :".$f['name'];
echo "File type :".$f['type'];
echo "File size :".$f['size'];
if(file_exists("photos/".$f['name']))
{
	echo $f['name']."already exists";
	
}
else if($f['type']=="image/jpeg")
{
	move_uploaded_file($f['tmp_name'],"images/".$f['name']);
	
}
else
	echo "File format is not valid !";
}
else
{
	echo "<script type='text/javascript'>
	alert('please select an image');
	</script>";
}



?>
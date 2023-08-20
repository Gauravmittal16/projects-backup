<?php
session_start();
if(isset($_POST['submit']))
{
	if(isset($_FILES['myfile'])&&$_FILES['myfile']!="")
	{
		
		$f=$_FILES['myfile'];
		$fname=$_FILES['myfile']['name'];
		$u=$_SESSION['uname'];
		if(file_exists("images/".$f['name']))
          {
        	echo "<script type='text/javascript'>alert('Your image already exists');</script>";
	       }
         else if($f['type']=="image/jpeg")
           { 
			   $con=mysqli_connect("localhost","root","8755","bidder");
			   if(isset($_SESSION['image']))
			   {
				   unlink("images/".$_SESSION['image']);
			   }
	           move_uploaded_file($f['tmp_name'],"images/".$f['name']);
			   $q="update users set image='$fname' where name='$u'";
			   $update=mysqli_query($con,$q);
			   $_SESSION['image']=$f['name'];
			   echo "<script type='text/javascript'>alert('Your profile image updated successfully');</script>"; 
            }
              else
                 {echo "<script type='text/javascript'>alert('File format is not valid');</script>";}
}
}
?>
<html><head><title>update page</title>

 <link rel="stylesheet" href="css/bootstrap.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style type="text/css">
  .form-control{
  width:40%;
 top:100px;
  
  }
  
  .image{

right:200px;

border-radius: 50%;
    height: 150px;
    width: 150px;
	
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
	background-image:url('http://localhost/eBid/images/<?php if(isset($_SESSION['image'])){echo $_SESSION['image'];}else{echo "newuser.png";}?>');
    background-color: rgba(0,0,0,.5);
    transition: all .3s ease;
    text-decoration: none;
	position:absolute;

}
#changefile
{overflow:hidden:
height:0px;
display:none;
}
.image span{ display: inline-block;
    padding-top: 4.5em;
    padding-bottom: 4.5em;}
	
	.lbl:hover {color:white;
	text-decoration:underline;}
  
  </style>
</head>
<body>
<h1 align='center'> Edit Your Profile</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">  
<div class="image">
<input type="file" name="myfile" id="changefile"/>
 <label class="lbl" onclick="myfunc();"><span class="glyphicon glyphicon-camera"></span>Update picture</label>
</div>

<div class="header">

  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Name:</label>
    <div class="col-sm-15">
      <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['uname'];?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd"> Change Password:</label>
    <div class="col-sm-15"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter current password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd"> Confirm Password:</label>
    <div class="col-sm-15"> 
      <input type="password" class="form-control" id="pwd" placeholder="Re-Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Update Mobile no.</label>
    <div class="col-sm-15"> 
      <input type="text" class="form-control" id="pwd" value="<?php echo $_SESSION['mbn'];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Address:</label>
    <div class="col-sm-15"> 
      <input type="text" class="form-control" id="pwd" value="<?php echo $_SESSION['adr'];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Add Description</label>
    <div class="col-sm-15"> 
      <textarea row="5" cols="50" class="form-control" id="usrname" placeholder="Enter some text......."></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-15">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-15">
      <button type="submit" name="submit" class="btn btn-primary " >Save changes</button>   
    </div>
  </div>
  </div>
</form>
<script>
function myfunc()
{
document.getElementById("changefile").click();
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.image').css('background-image', 'url('+e.target.result +')');
            $('.image').hide();
            $('.image').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#changefile").change(function() {
    readURL(this);
});




</script>

</body>
</html>
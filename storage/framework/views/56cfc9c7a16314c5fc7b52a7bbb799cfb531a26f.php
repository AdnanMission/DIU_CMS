<!DOCTYPE html>
<html>
<head>
	<title>DIU Complaint Management System</title>
	<link rel="stylesheet"  href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		h2 a {
         color:black;
		}
		#main-header,#main-footer{
			background: linear-gradient(45deg,#00897B,#0081bf);
		}

	</style>
</head>
<body>
   
<div id="header">
		   <div id ="main-header">
		   <div id="logo"><!--logo-->
		    <span ><img src="diuIcon.png"></span>
		   </div>
		   <h2 style="color:white">DIU Complaint Management System</h2>	
		   <h2 style="padding-top:10px;padding-left: 950px;"><a href="<?php echo e(route('admin.login')); ?>">Admin login</a>|<a href="<?php echo e(route('login')); ?>">User login</a></h2>
		   </div>
		</div>

       <div class="container">
            
            	<!--<center style="padding-top:400px;padding-right: 350px;a link: white;">
                 
                 		<h2><a href="##">Admin login</a>|<a href="<?php echo e(route('login')); ?>">User login</a></h2>
            	
            </center>-->
         
      
            </div>
            
		<div id ="main-footer">
		   <center>
		   <h4 style="color:white">All Rights Reserved @ Daffodil International University</h4>	
		   </center>
		   </div>
		

   <script type="text/javascript" src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script> 
</body>
</html><?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/index.blade.php ENDPATH**/ ?>
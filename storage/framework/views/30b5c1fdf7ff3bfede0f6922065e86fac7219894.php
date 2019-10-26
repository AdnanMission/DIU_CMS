<!DOCTYPE html>
<html>
<head>
	<title>PHP FUNDAMENTALS</title>
	<style type="text/css">
	.content{width:100;  margin:0 auto; background:#ddd; }
	.header{margin:0; text-align: center; color:white; background:blue; padding:10px;}
	.footer{margin:0; text-align: center; color:white; background:blue; padding:2px;}
	.maincontent{padding:20px;min-height: 380px}
	</style>
	
</head>
<body>
	<div class="content">
<section class="header">

 <h1><strong>Canteen</strong></h1>
 <h3><strong>Daffodil International University</strong></h3>
</section>

<section class="maincontent">
	<strong>Student has a problem in canteen</strong>
	<p>1.Issue about healthy and teasty food.</p>
	<p>2.Reasonable rate.</p>
	<p>3.Hygenic manner.</p><br><br><br><br>
      
      <div style="text-align: center; "><button style="width:150px; height:50px; color:red; "><strong><a href="<?php echo e(route('complaint')); ?>">Make complain</a></button></strong> </div>
        	
</section>



<section class="footer">
	<h2>www.Daffodil International University.com</h2>

</section>
<?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/canteen.blade.php ENDPATH**/ ?>
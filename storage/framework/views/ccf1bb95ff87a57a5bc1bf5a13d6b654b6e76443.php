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

 <h1><strong>Lab and classroom</strong></h1>
 <h3><strong>Daffodil International University</strong></h3>
</section>

<section class="maincontent">
	<p>1.PC is not working properly.</p>
	<p>2.Classroom metarial problems.</p>
	<p>3.Projector AC problem.</p>
	<p><strong>Please Mention Classroom number in your complaint from.</strong><p><br><br><br><br>
      
      <div style="text-align: center; "><button style="width:150px; height:50px; color:red; "><strong><a href="<?php echo e(route('complaint')); ?>">Make complain</a></button></strong> </div>
        	
</section>



<section class="footer">
	<h2>www.Daffodil International University.com</h2>

</section>
<?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/lab.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
 <head>
  <title>Send Email to the Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.popper.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
    background-color:white;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 </head>
 <body style="background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB">

   <div>
       <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(45deg,#00897B,#0081bf);">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                      <ul class="navbar-nav ml-auto" style="text-align: right;">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a style="color: white;"  class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a  style="color: white;" class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                    
 
</nav> 
 </div>


   
   
  </div>
</nav>
  <div class="container box">
   <h3 align="center">Send an Email to the Admin</h3><br />
   <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
    </div>
   <?php endif; ?>
   <?php if($message = Session::get('success')): ?>
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong><?php echo e($message); ?></strong>
           </div>
           <?php endif; ?>
                 <form method="post"  action="<?php echo e(url('mail.sendmail/send')); ?>">
                        <?php echo e(csrf_field()); ?>



                        <div class="form-group">
                     <label>Student_id</label>
                     <input id="student_id" type="text" class="form-control <?php if ($errors->has('student_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('student_id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="student_id" value="<?php echo e(Auth::user()->student_id); ?>" required autocomplete="student_id" autofocus />
                    </div>
                    <div class="form-group">
                     <label>Message</label>
                     <textarea id="description_of_complaint" type="text" class="form-control <?php if ($errors->has('description_of_complaint')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description_of_complaint'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="description_of_complaint" value="<?php echo e($complaint_tbl->description_of_complaint); ?>"  required autocomplete="description_of_complaint" rows="5"><?php echo e($complaint_tbl->description_of_complaint); ?>

                               </textarea> 
                    </div>
                        

                        <div class="form-group">
                         <label>Enter Your Email</label>
                         <input type="text" name="email" class="form-control" value="" />
                        </div>
               <div class="form-group">
             <input type="submit" name="send" class="btn btn-info" value="Send" />
               </div>
          </form>
   
  </div>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

 </body>
</html>







<?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/mail/sendmail.blade.php ENDPATH**/ ?>
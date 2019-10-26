<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.popper.min.js"></script>
</head>
<body style="background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB">
    <div class="container-fluid bg-primary text-black  py-4 " style="background: linear-gradient(45deg,#00897B,#0081bf);" >
<center><strong><h3>Daffodil International University</h3>
</strong><h4> Complaint Section</h4></center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Drop your complaint')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('insert')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="Full_Name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Full_name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(Auth::user()->name); ?>"  required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                      
                      <div class="form-group row">
                            <label for="student_id" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Student_id')); ?></label>

                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control <?php if ($errors->has('student_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('student_id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="student_id" value="<?php echo e(Auth::user()->student_id); ?>" required autocomplete="student_id" autofocus>

                                <?php if ($errors->has('student_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('student_id'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                      <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Categories')); ?></label>

                            <div class="col-md-6">
                                <select id="categories" type="text" class="form-control <?php if ($errors->has('categories')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('categories'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="categories" value="<?php echo e(old('categories')); ?>" required autocomplete="categories" autofocus>
                                    <option>Lab/classroom</option>
                                   <!-- <option>-----Categories----</option>
                                    
                                    <option>Library</option>
                                    <option>Transport</option>
                                    <option>Canteen</option>
                                    <option>Accounts</option>
                                    <option>Hostel</option>-->

                                </select> 

                                <?php if ($errors->has('categories')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('categories'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="complaint_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Complaint_date')); ?></label>
                            <div class="col-md-6">
                                <?php date_default_timezone_set('Asia/Dhaka'); ?>
                                <input id="complaint_date" type="date" class="form-control <?php if ($errors->has('complaint_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('complaint_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="complaint_date" value="<?php echo date('Y-m-d'); ?>" required autocomplete="complaint_date" autofocus>

                                <?php if ($errors->has('complaint_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('complaint_date'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Department')); ?></label>

                            <div class="col-md-6">
                                <select  id="department" type="text" class="form-control <?php if ($errors->has('department')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('department'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="department" value="<?php echo e(old('department')); ?>" required autocomplete="department">
                                    <option>--Department--</option>
                                    <option>SWE</option>
                                    <option>CSE</option>
                                    <option>BBA</option>
                                    <option>Textile</option>
                                    <option>NAF</option>
                                    </select>

                                <?php if ($errors->has('department')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('department'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="campus" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Campus')); ?></label>

                            <div class="col-md-6">
                                <select id="campus" type="text" class="form-control <?php if ($errors->has('campus')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('campus'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="campus" required autocomplete="campus">
                               <option>--Campus--</option>
                               <option>Permanent</option>
                               <option>Main</option>
                               <option>Uttara</option>

                                </select>

                                <?php if ($errors->has('campus')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('campus'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description_of_complaint" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description_of_complaint')); ?></label>

                            <div class="col-md-6">
                                <textarea id="description_of_complaint" type="text" class="form-control <?php if ($errors->has('description_of_complaint')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description_of_complaint'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="description_of_complaint" required autocomplete="description_of_complaint" rows="5" placeholder="">
                               </textarea> 
                                <?php if ($errors->has('description_of_complaint')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description_of_complaint'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                     
                      <div class="form-group row">
                            <label for="uplode_file" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Uplode_file')); ?></label>

                            <div class="col-md-6">
                                <input id="uplode_file" type="file" class="form-control <?php if ($errors->has('uplode_file')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('uplode_file'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="uplode_file" required autocomplete="uplode_file">

                                <?php if ($errors->has('uplode_file')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('uplode_file'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <input id="Action" type="text" class="form-control <?php if ($errors->has('Action')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Action'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="Action" value="Pending" hidden>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                          
                                <button type="Reset" class="btn btn-danger">
                                    <?php echo e(__('Reset')); ?>

                                </button>
                           
                        </div>


                        </div>
                        <br>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/complaint2.blade.php ENDPATH**/ ?>
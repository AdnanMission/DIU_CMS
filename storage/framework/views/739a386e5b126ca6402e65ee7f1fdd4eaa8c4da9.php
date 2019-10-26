<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-primary text-black  py-4 " >
<center><strong><h3> Complaint and Grivance Section</h3>
Daffodil International University</strong></center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Drop your complaint')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('update', $complaint_tbl->id)); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="Full_Name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Full_name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e($complaint_tbl->name); ?>" required autocomplete="name" autofocus>

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
endif; ?>" name="student_id" value="<?php echo e($complaint_tbl->student_id); ?>" required autocomplete="student_id" autofocus>

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
endif; ?>" name="categories" value="<?php echo e($complaint_tbl->categories); ?>" required autocomplete="categories" autofocus>
                                	<option>-----Categories----</option>
                                	<option>Academic</option>
                                	<option>Library</option>
                                	<option>Transport</option>
                                	<option>Canteen</option>
                                	<option>Accounts</option>
                                	<option>Hostel</option>

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
                            <label for="types" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Types')); ?></label>

                            <div class="col-md-6">
                                <select id="types" type="text" class="form-control <?php if ($errors->has('types')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('types'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="types" value="<?php echo e($complaint_tbl->types); ?>" required autocomplete="types" autofocus>
                                	<option>-----Types----</option>
                                	<option>Complaint</option>
                                	<option>Grivance</option>
                                </select> 

                                <?php if ($errors->has('types')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('types'); ?>
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
                                <input id="complaint_date" type="date" class="form-control <?php if ($errors->has('complaint_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('complaint_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="complaint_date" value="<?php echo e($complaint_tbl->complaint_date); ?>" required autocomplete="complaint_date" autofocus>

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
endif; ?>" name="department" value="<?php echo e($complaint_tbl->department); ?>" required autocomplete="department">
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
endif; ?>" name="campus" value="<?php echo e($complaint_tbl->campus); ?>" required autocomplete="campus">
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
endif; ?>" name="description_of_complaint" required autocomplete="description_of_complaint" rows="5"><?php echo e($complaint_tbl->description_of_complaint); ?>

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
endif; ?>" name="uplode_file"  value="<?php echo e($complaint_tbl->uplode_file); ?>" required autocomplete="uplode_file">

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_CMS\resources\views/edit.blade.php ENDPATH**/ ?>
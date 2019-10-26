<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-primary text-black  py-4 " >
<center><strong><h3> Complaint and Grivance Section</h3>
Daffodil International University</strong></center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Send your complaint')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('submit', $complaint_tbl->id)); ?>">
                        <?php echo csrf_field(); ?>
                      
                      <div class="form-group row">
                            <label for="Complaint_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Complaint_no')); ?></label>

                            <div class="col-md-6">
                                <input id="Complaint_no" type="number" class="form-control <?php if ($errors->has('Complaint_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Complaint_no'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="Complaint_no" value="<?php echo e(old('Complaint_no')); ?>" required autocomplete="Complaint_no" autofocus>

                                <?php if ($errors->has('Complaint_no')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Complaint_no'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <dsubjectiv class="form-group row">
                            <label for="Subject" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Subject')); ?></label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control <?php if ($errors->has('subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subject'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="subject" value="<?php echo e(old('subject')); ?>" required autocomplete="subject" autofocus>

                                <?php if ($errors->has('subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subject'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                     
                      <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                      <div class="form-group row">
                            <label for="Message" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Message')); ?></label>

                            <div class="col-md-6">
                                <textarea id="message" type="text" class="form-control <?php if ($errors->has('message')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('message'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="message" required autocomplete="message" rows="5">
                               </textarea> 
                                <?php if ($errors->has('message')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('message'); ?>
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
                                <button type="submit" class="btn btn-lg btn-success">
                                    <?php echo e(__('Send')); ?>

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
<?php $__env->stopSection(); ?>










<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/transmit.blade.php ENDPATH**/ ?>
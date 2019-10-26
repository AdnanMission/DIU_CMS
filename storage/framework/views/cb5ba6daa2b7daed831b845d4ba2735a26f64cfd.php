<?php $__env->startSection('content'); ?>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">My test email</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(url('send/email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control <?php if ($errors->has('subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subject'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="subject" value="<?php echo e(old('subject')); ?>"  autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="subject" type="subject" class="form-control <?php if ($errors->has('subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subject'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('subject')); ?>"  autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">Message</label>

                            <div class="col-md-6">
                        <textarea class="form-control <?php if ($errors->has('message')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('message'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="message" id="" cols="30" rows="10">
                                    
                                </textarea>

                            </div>
                        </div>


                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                Send Email
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/mail/Home.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-primary text-black  py-4 col-md-4" >
<center><strong><h3></h3>
Admin-Action</strong></center>
</div>

<div class="container">
    <table class="table table-responsive table-hover">
        <tr>
            
            <th>Name:</th>
            <th>Student_id</th>
            <th>Categories</th>
            <th>Types</th>
            <th>Complaint-date</th>
            <th>Department</th>
            <th>Campus</th>
            <th>Uploded_file</th>
            <th>Action</th>
            <th>  </th>
            <th>  </th>

            
        </tr>
        
       
        <tr>
            
            <td><?php echo e($complaint_tbl->name); ?></td>
            <td><?php echo e($complaint_tbl->student_id); ?></td>
            <td><?php echo e($complaint_tbl->categories); ?></td>
            <td><?php echo e($complaint_tbl->types); ?></td>
            <td><?php echo e($complaint_tbl->complaint_date); ?></td>
            <td><?php echo e($complaint_tbl->department); ?></td>
            <td><?php echo e($complaint_tbl->campus); ?></td>
            <td><?php echo e($complaint_tbl->uplode_file); ?></td>
            <td>Not Yet</td>
            
            
            </tr>
            
                
                     <!--<tr>
                        <td>
                            <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Action')); ?></label>
                      <div class="col-md-14">
                                <select id="action" type="action" class="form-control <?php if ($errors->has('action')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('action'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="action" value="<?php echo e(old('action')); ?>" required autocomplete="action" autofocus>
                                
                                    <option>In-processing</option>
                                    <option>Not valuable</option>
                                    <option>Closed</option>
                                   

                                </select> 

                            </div>
                             </div></td>
                             <td>
                             <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <form class=" form-inline" action="<?php echo e(route('complaintdetails',$complaint_tbl->id)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-primary" value="Update Data">
                </form>

                            </div>
                        </div>
                        </td>
                        </tr>-->

        
                
           
            <!--<td>
                <a href="<?php echo e(route('send',$complaint_tbl->id)); ?>" class="btn btn-success">Submit</a>
            </td>-->
      <<tr>
            <form method="POST" action="<?php echo e(route('complaintdetails',$complaint_tbl->id)); ?>">

               <td> 
                <label>Action</label>

                   <select id="action" type="text" name="action" value="<?php echo e($complaint_tbl->action); ?>" required autocomplete="action" autofocus>
                    <option>In-processing</option>
                    <option>Not valuable</option>
                    <option>Closed</option>
                    </select>    
                    </td>
                    <td>        
                  <button type="submit" class="btn btn-primary"> <?php echo e(__('Submit')); ?></button>
                        </td> 
                    </form>
                    </tr>
               
               </table>
    

</div>

 

    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_CMS\resources\views/adminaction.blade.php ENDPATH**/ ?>
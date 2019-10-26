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
            <td>In-processing</td>

            
           
    
                        
                             <td>
        <form class=" form-inline" action="<?php echo e(route('delete',$complaint_tbl->id)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
                
            </td>
                        </tr>






        
                
           
            <!--<td>
                <a href="<?php echo e(route('send',$complaint_tbl->id)); ?>" class="btn btn-success">Submit</a>
            </td>-->
       

 

    </table>
    
    

</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/complaintdetails.blade.php ENDPATH**/ ?>
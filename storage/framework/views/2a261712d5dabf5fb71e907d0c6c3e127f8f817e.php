<?php $__env->startSection('content'); ?>
<br>
<div>
    <br>
    <h2 class="bg-info " style="text-align:center" >View New Complaint</h2>


</div>
<div class="container" >
	<table  cellspacing="0" cellpadding="0" class="table table-responsive table-hover" style="max-width:1400px; max-height: 450px; font-size:14px; ">
		<tr>
			<th>C_no</th>
			<th>Name</th>
			<th>Student_id</th>
			<th>Categories</th>
			<th>Complaint-date</th>
			<th>Department</th>
			<th>Campus</th>
			<th>complaint des</th>
			<th>Uploded_file</th>
			<th>Action</th>
			<th>Status</th>
			

			
		</tr>
		<?php $i =0; ?>
		<?php $__currentLoopData = $complaint_tbl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaint_tbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $i++ ?>
		<tr>
			<?php if($complaint_tbl->action == "Pending"): ?>
			<td><?php echo e($i); ?></td>
			<td><?php echo e($complaint_tbl->name); ?></td>
			<td><?php echo e($complaint_tbl->student_id); ?></td>
			<td><?php echo e($complaint_tbl->categories); ?></td>
			<td><?php echo e($complaint_tbl->complaint_date); ?></td>
			<td><?php echo e($complaint_tbl->department); ?></td>
			<td><?php echo e($complaint_tbl->campus); ?></td>
			<td><?php echo e($complaint_tbl->description_of_complaint); ?></td>
            <td><?php echo e($complaint_tbl->uplode_file); ?></td>
            <td><?php echo e($complaint_tbl->action); ?></td>
			<td>
				<a href="<?php echo e(route('edit1',$complaint_tbl->id)); ?>" class="btn btn-success">Action</a>
				<!--<a href="<?php echo e(route('delete',$complaint_tbl->id)); ?>" class="btn btn-danger">Delete</a>-->
				</td>
                 <td>
                 
		<!--<form class=" form-inline" action="<?php echo e(route('delete',$complaint_tbl->id)); ?>" method="POST">
					 <?php echo csrf_field(); ?>
					<input type="submit" class="btn btn-danger" value="Delete">
				</form>-->
				
			</td>
			
			<!--<td>
				<a href="<?php echo e(route('send',$complaint_tbl->id)); ?>" class="btn btn-success">Submit</a>
			</td>-->
		</tr>
<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
	

</div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/pnewcomplaint.blade.php ENDPATH**/ ?>
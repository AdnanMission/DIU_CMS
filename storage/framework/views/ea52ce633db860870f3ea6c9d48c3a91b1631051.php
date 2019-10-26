<?php $__env->startSection('content'); ?>


<div class="container-fluid bg-primary text-black  py-4 " >
<center><strong><h3>View Complaint Status</h3>
Your complaint details</strong></center>
</div>

<div class="container">
	<table class="table table-responsive table-hover">
		<tr>
			<th>Complaint_no</th>
			<th>Name</th>
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
		<?php $__currentLoopData = $complaint_tbl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaint_tbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($complaint_tbl->name  == Auth::user()->name): ?>
		<tr>
			
			<td><?php echo e($complaint_tbl->id); ?></td>
			<td><?php echo e($complaint_tbl->name); ?></td>
			<td><?php echo e($complaint_tbl->student_id); ?></td>
			<td><?php echo e($complaint_tbl->categories); ?></td>
			<td><?php echo e($complaint_tbl->types); ?></td>
			<td><?php echo e($complaint_tbl->complaint_date); ?></td>
			<td><?php echo e($complaint_tbl->department); ?></td>
			<td><?php echo e($complaint_tbl->campus); ?></td>
			<td><?php echo e($complaint_tbl->uplode_file); ?></td>
			<td> NotYet</td>
         
		</tr>
  <?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
	<button style="width:150px; height:50px; color:red;font-size: bold "><a href="<?php echo e(route('admin.login')); ?>">Back</a></button>
	

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_CMS\resources\views/statuscomplaint.blade.php ENDPATH**/ ?>
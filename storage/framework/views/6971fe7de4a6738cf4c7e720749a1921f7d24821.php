<?php $__env->startSection('content'); ?>

<div class="container">
	<table class="table">
		<tr>
			<th>Complaint_no</th>
			<th>Name</th>
			<th>Student_id</th>
			<th>Categories</th>
			<th>Complaint-date</th>
			<th>Department</th>
			<th>Campus</th>
			<th>complaint des</th>
			<th>Uploded_file</th>
			<th>Status</th>
			<th>Action</th>

			
		</tr>
		<?php $i =0; ?>
		<?php $__currentLoopData = $complaint_tbl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complaint_tbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $i++ ?>
		<tr>
			<?php if( $complaint_tbl->name == Auth::user()->name): ?>
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
            <!--<td>
				<a href="<?php echo e(route('edit',$complaint_tbl->id)); ?>" class="btn btn-success">Submit</a>-->
				<!--</td>
			<td>
				<a href="<?php echo e(route('edit',$complaint_tbl->id)); ?>" class="btn btn-success">Edit</a>
				<a href="<?php echo e(route('delete',$complaint_tbl->id)); ?>" class="btn btn-danger">Delete</a>-->
				<!--</td>-->
                 <td>
             
		    
				<form class=" form-inline" action="<?php echo e(route('email',$complaint_tbl->id)); ?>" method="get">
					 <?php echo csrf_field(); ?>
					<input type="submit" class="btn btn-success" value="Send">
				 
				</form>
			</td>
			
			<!--<td>
				<a href="<?php echo e(route('send',$complaint_tbl->id)); ?>" class="btn btn-success">Submit</a>
			</td>-->

			<?php endif; ?>
		</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
	

</div>
<div style="text-align: center; "><button style="width:150px; height:50px; color:red; "><strong><a href="<?php echo e(route('login')); ?>">Back</a></button></strong> </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/show.blade.php ENDPATH**/ ?>
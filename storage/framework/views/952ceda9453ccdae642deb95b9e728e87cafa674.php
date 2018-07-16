<?php $__env->startSection('content'); ?>
	
	<div class="container">
		<a href="<?php echo e(url('city/create')); ?>" class="btn btn-primary">Add City</a>
		<table class="table">
		 <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Country</th>
		      <th scope="col">Created at</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		<?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  <tbody>
			    <tr>
			      <th scope="row"><?php echo e($city->id); ?></th>
			      <td><?php echo e($city->name); ?></td>
			      <td><?php echo e($city->country); ?></td>
			      <td><?php echo e($city->created_at); ?></td>
			      <td>
			      	<a class="btn btn-primary" href="<?php echo e(url('city/'.$city->id.'/edit')); ?>">edit</a>
			      	<form action="<?php echo e(url('city/'.$city->id)); ?>" method="post">
			      		<?php echo csrf_field(); ?>
			      		<?php echo e(method_field('DELETE')); ?>

			      		<button class="btn btn-danger">
			      			delete
			      		</button>
			      	</form>
			      </td>
			    </tr>
			  </tbody>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
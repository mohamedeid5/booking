<?php $__env->startSection('content'); ?>
<div class="container">
	<form action="<?php echo e(url('city/'.$city->id)); ?>" method="post" class="form-group">
		<?php echo csrf_field(); ?>
		<?php echo e(method_field('PUT')); ?>

		<label for="">Name</label>
		<input type="text" name="name" class="form-control"  value="<?php echo e($city->name); ?>">
		<label for="">Country</label>
		<input type="text" name="country" class="form-control" value="<?php echo e($city->country); ?>">
		<input type="submit" class="btn btn-primary" value="Add">
	</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
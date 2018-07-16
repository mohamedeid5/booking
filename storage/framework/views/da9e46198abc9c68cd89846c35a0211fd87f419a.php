<?php $__env->startSection('content'); ?>
<div class="container">
	<form action="<?php echo e(url('city')); ?>" method="post" class="form-group">
		<?php echo csrf_field(); ?>
		<label for="">Name</label>
		<input type="text" name="name" class="form-control">
		<label for="">Country</label>
		<input type="text" name="country" class="form-control">
		<input type="submit" class="btn btn-primary" value="Add">
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
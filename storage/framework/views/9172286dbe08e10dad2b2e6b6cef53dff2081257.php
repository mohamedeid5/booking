<?php $__env->startSection('content'); ?>
<div class="container">
	<form action="<?php echo e(url('admin/users/'.$user->id)); ?>" method="post" class="form-group">
		<?php echo csrf_field(); ?>
		<?php echo e(method_field('PUT')); ?>

		<label for="">First Name</label>
		<input type="text" name="first_name" class="form-control" value="<?php echo e($user->first_name); ?>">
		<label for="">Last Name</label>
		<input type="text" name="last_name" class="form-control" value="<?php echo e($user->last_name); ?>">
		<label for="">Email</label>
		<input type="text" name="email" class="form-control" value="<?php echo e($user->email); ?>">
		<label for="">Paasword</label>
		<input type="password" name="password" class="form-control">
		<input type="submit" class="btn btn-primary" value="Add">
	</form>
	<?php if(!empty($errors->all())): ?>
		
		<ul>	
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
				<li><?php echo e($error); ?></li>
		
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
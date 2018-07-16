<?php $__env->startSection('content'); ?>
<div class="container">
	<form action="<?php echo e(url('admin/admins')); ?>" method="post" class="form-group">
		<?php echo csrf_field(); ?>
		<label for="">First Name</label>
		<input type="text" name="first_name" class="form-control">
		<label for="">Last Name</label>
		<input type="text" name="last_name" class="form-control">
		<label for="">Email</label>
		<input type="text" name="email" class="form-control">
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
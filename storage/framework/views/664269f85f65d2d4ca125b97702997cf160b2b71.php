<?php $__env->startSection('content'); ?>
<div class="container">
	<form action="<?php echo e(url('hotels/'.$hotel->id)); ?>" method="post" class="form-group">
		<?php echo csrf_field(); ?>
		<?php echo e(method_field('PUT')); ?>

		<label for="">Hotel Name</label>
		<input type="text" name="hotel_name" class="form-control" value="<?php echo e($hotel->hotel_name); ?>">
		<label for="">City Name</label>
		<select name="city_id" class="form-control">
			<?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($city->id); ?>" <?php echo e($city->id == $hotel->city_id ? 'selected' : ''); ?>><?php echo e($city->name); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
		<label for="">Country</label>
		<input type="text" name="country" class="form-control" value="<?php echo e($hotel->country); ?>">
		<label for="">Location</label>
		<input type="text" name="location" class="form-control" value="<?php echo e($hotel->location); ?>">
		<label for="">Rooms</label>
		<input type="text" name="rooms" class="form-control" value="<?php echo e($hotel->rooms); ?>">
		<label for="">Adults</label>
		<input type="text" name="adult" class="form-control" value="<?php echo e($hotel->adult); ?>">
		<label for="">Childrens</label>
		<input type="text" name="children" class="form-control" value="<?php echo e($hotel->children); ?>">
		<label for="">Distance</label>
		<input type="text" name="distance" class="form-control" value="<?php echo e($hotel->distance); ?>">
		<label for="">Price</label>
		<input type="text" name="price" class="form-control" value="<?php echo e($hotel->price); ?>">
		<label for="">Rate</label>
		<input type="text" name="rate" class="form-control" value="<?php echo e($hotel->rate); ?>">
		<label for="">From</label>
		<input type="text" name="from" class="form-control" value="<?php echo e($hotel->from); ?>">
		<label for="">To</label>
		<input type="text" name="to" class="form-control" value="<?php echo e($hotel->to); ?>">
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
<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
		<div class="col-3">
			<?php echo $__env->make('hotel.searchform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<div class="col-9">
			<h1>Hotel Name: <?php echo e($hotel->hotel_name); ?></h1>
		<p>Hotel Description : <?php echo e($hotel->description); ?></p>
		<span class="btn btn-info">rate: <?php echo e($hotel->rate); ?></span>
		<span>
			<?php
				// get price from database and * in nights (night will be diynamicly)
			$nights = 3;
			 	$price = $hotel->price * $nights;
			 	echo "<span class='btn btn-danger' >".$price." ".ip()->currency."</span>"
			 ?>
		</span>
		<form action="<?php echo e(url('book')); ?>" method="post">
			<?php echo csrf_field(); ?>
			<input type="hidden" name="hotel_id" value="<?php echo e(request('hotel_id')); ?>">
			<input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
			<input type="hidden" name="price" value="<?php echo e($price); ?>">
			<input type="hidden" name="rooms" value="<?php echo e(request('rooms')); ?>">
			<input type="hidden" name="adult" value="<?php echo e(request('adult')); ?>">
			<input type="hidden" name="children" value="<?php echo e(request('children')); ?>">
			<input type="hidden" name="nights" value="<?php echo e($nights); ?>">
			<input type="hidden" name="from" value="<?php echo e(request('from')); ?>">
			<input type="hidden" name="to" value="<?php echo e(request('to')); ?>">
			<input type="submit" value="Book Now" class="btn btn-primary">
		</form>
		</div>
	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
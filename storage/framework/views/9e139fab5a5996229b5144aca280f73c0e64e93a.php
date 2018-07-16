<?php $__env->startSection('content'); ?>
	<div class="container">

		<div class="row">
			<?php echo $__env->make('hotel.searchform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<a href="<?php echo e(url()->full() . '&order=price'); ?>">order</a>
		<?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-9">
          <div class="card mb-3" style="width: 600px;height: 200px;padding: 5px">
            <img class="card-img-top" src="http://via.placeholder.com/350x120" alt="Card image cap"> 
            <h1>
            	<a href="<?php echo e(url('/hotel?hotel_id='.$hotel->id).'&'.request()->getQueryString()); ?>"><?php echo e($hotel->hotel_name); ?></a>
            </h1>
            <p>rate: <?php echo e($hotel->rate); ?>,city <?php echo e($hotel->name); ?>,distance from center <?php echo e($hotel->distance); ?>k,price <?php echo e($hotel->price . ip()->currency); ?> </p>   
          </div>
        </div>		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
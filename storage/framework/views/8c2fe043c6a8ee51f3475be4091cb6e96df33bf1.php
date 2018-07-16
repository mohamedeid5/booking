<?php $__env->startSection('content'); ?>
	<div class="container">

		<div class="row clearfix">
			<div class="col-3" style='max-width: 25%;background-color: #c4da0e;height: 283px;'>
				<form class="form-inline my-2 my-lg-0" method="get" action="<?php echo e(url('/searchresult')); ?>" style="padding: 5px">
			        <?php echo e(csrf_field()); ?>

			      <input value="<?php echo e(request('city')); ?>"  class="form-control mr-lg-2" type="search" name="city" placeholder="where are you going?" aria-label="Search">
			      <input value="<?php echo e(request('from')); ?>" class="form-control mr-sm-3" type="search" name="from" placeholder="from: y-m-d" aria-label="Search">
			      <input value="<?php echo e(request('to')); ?>" class="form-control mr-sm-6" type="search" name="to"   placeholder="to: y-m-d" aria-label="Search">
			      <select name="rooms" class="custom-select" style="width: 50px">
			          <?php for($i=1;$i <= 30;$i++): ?>
			            <option value="<?php echo e($i); ?>" <?php if($i == request('rooms')) {echo 'selected';} ?>><?php echo e($i); ?></option>
			          <?php endfor; ?>
			      </select>
			        <select name="adult" class="custom-select" style="width: 50px">
			          <?php for($i=1;$i <= 30;$i++): ?>
			            <option value="<?php echo e($i); ?>" <?php if($i == request('adult')) {echo 'selected';} ?>><?php echo e($i); ?></option>
			          <?php endfor; ?>
			         </select>
			           <select name="children" class="custom-select" style="width: 50px">
			          <?php for($i=0;$i <= 30;$i++): ?>
			            <option value="<?php echo e($i); ?>" <?php if($i == request('children')) {echo 'selected';} ?>><?php echo e($i); ?></option>
			          <?php endfor; ?>
			         </select>
			      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search">
			     </form>
			</div>
				<a href="<?php echo e(url()->full() . '&order=price'); ?>">order</a>
		<?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-9">
          <div class="card mb-3" style="width: 600px;height: 200px;padding: 5px">
            <img class="card-img-top" src="http://via.placeholder.com/350x120" alt="Card image cap"> 
            <h1><?php echo e($hotel->hotle_name); ?> </h1>
            <p>rate: <?php echo e($hotel->rate); ?>,city <?php echo e($hotel->name); ?>,distance from center <?php echo e($hotel->distance); ?>k,price <?php echo e($hotel->price . ip()->currency); ?> </p>   
          </div>
        </div>		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
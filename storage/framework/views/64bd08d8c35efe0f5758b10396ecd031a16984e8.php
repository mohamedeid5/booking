<?php $__env->startSection('content'); ?>
	<div class="container">
					<h1><?php echo e(auth()->user()->first_name); ?> 's Books</h1>

		<div class="row">
			<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php
					$hotel = App\Book::find($book->hotel_id)->hotel;
				?>
				<div class="col4">
					<div class="card" style="width: 18rem;">
			  <div class="card-header">
			    Book #ID <?php echo e($book->id); ?>

			  </div>
			  <ul class="list-group list-group-flush">
			  	<li class="list-group-item"><?php echo e($hotel->hotel_name . $hotel->id); ?></li>
			    <li class="list-group-item"><?php echo e($book->rooms); ?> rooms</li>
			    <li class="list-group-item"><?php echo e($book->adult); ?> adults</li>
			    <li class="list-group-item"><?php echo e($book->children); ?> childrens</li>
			  </ul>
			</div>
				</div>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
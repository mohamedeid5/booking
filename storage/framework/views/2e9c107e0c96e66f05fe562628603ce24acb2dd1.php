<?php $__env->startSection('content'); ?>
<div class="container">
  <a href="<?php echo e(url('hotels/create')); ?>" class="btn btn-primary">Add Hotel</a>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hotle Name</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
      <th scope="col">rooms</th>
      <th scope="col">adults</th>
      <th scope="col">children</th>
      <th scope="col">distance</th>
      <th scope="col">price</th>
      <th scope="col">rate</th>
      <th scope="col">form</th>
      <th scope="col">to</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		 <?php $city = App\Hotel::find($hotel->id)->city ?> 
	  <tbody>
	    <tr>
	      <th scope="row"><?php echo e($hotel->id); ?></th>
	      <td><?php echo e($hotel->hotel_name); ?></td>
	      <td><?php echo e($city->name); ?></td>
	      <td><?php echo e($city->country); ?></td>
	      <td><?php echo e($hotel->rooms); ?></td>
	      <td><?php echo e($hotel->adult); ?></td>
	      <td><?php echo e($hotel->children); ?></td>
	      <td><?php echo e($hotel->distance); ?></td>
	      <td><?php echo e($hotel->price); ?></td>
	      <td><?php echo e($hotel->rate); ?></td>
	      <td><?php echo e($hotel->from); ?></td>
	      <td><?php echo e($hotel->to); ?></td>
        <td>
          <a href="<?php echo e(url('hotels/'.$hotel->id.'/edit')); ?>" class="btn btn-primary">edit</a>
          <form action="<?php echo e(url('hotels/'.$hotel->id)); ?>" method="post" class="form-group">
            <?php echo csrf_field(); ?>
           <?php echo e(method_field('DELETE')); ?>

            <input type="submit" value="delete" class="btn btn-danger">
          </form>
        </td>
	    </tr>
	  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
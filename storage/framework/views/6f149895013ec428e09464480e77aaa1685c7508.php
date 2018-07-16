<?php $__env->startSection('content'); ?>
<div class="container">
		<a href="<?php echo e(url('admin/admins/create')); ?>" class="btn btn-primary">Add Member</a>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#ID</th>
	      <th scope="col">First Name</th>
	      <th scope="col">Last Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Created At</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	  <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr>
	      <th scope="row"><?php echo e($admin->id); ?></th>
	      <td><?php echo e($admin->first_name); ?></td>
	      <td><?php echo e($admin->last_name); ?></td>
	      <td><?php echo e($admin->email); ?></td>
	      <td><?php echo e($admin->created_at); ?></td>
	      <td>
	      	<a href="<?php echo e(url('admin/admins/'.$admin->id.'/edit')); ?>" class="btn btn-primary">edit</a>
	      	<form action="<?php echo e(url('admin/admins/'.$admin->id)); ?>" method="post">
	      		<?php echo csrf_field(); ?>
	      		<?php echo e(method_field('DELETE')); ?>

	      		<input type="submit" class="btn btn-danger" value="delete">
	      	</form>
	      </td>
	    </tr>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
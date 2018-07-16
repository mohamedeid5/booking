<div class="col-3" style='width: 200px;background-color: #c4da0e;height: 283px;'>
	<form class="form-inline my-2 my-lg-0" method="get" action="<?php echo e(url('/searchresult')); ?>" style="padding: 5px" id="searchform">
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
     <?php if(!empty($errors->all())): ?>
        
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          
        <?php endif; ?>
</div>
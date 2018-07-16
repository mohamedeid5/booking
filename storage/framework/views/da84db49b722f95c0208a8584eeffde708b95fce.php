<?php $__env->startSection('content'); ?>
<div class="container">
    <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo e(url('/searchresult')); ?>" style="padding: 5px"  id="search">
        <?php echo csrf_field(); ?>
      <input class="form-control mr-lg-2" type="search" name="city" placeholder="where are you going?" aria-label="Search" id="searchbox">
      <input class="form-control mr-sm-3" type="search" name="from" placeholder="from: y-m-d" aria-label="Search">
      <input class="form-control mr-sm-6" type="search" name="to"   placeholder="to: y-m-d" aria-label="Search">
      <select name="rooms" class="custom-select" style="width: 50px">
          <?php for($i=1;$i <= 30;$i++): ?>
            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
          <?php endfor; ?>
      </select>
        <select name="adult" class="custom-select" style="width: 50px">
          <?php for($i=1;$i <= 30;$i++): ?>
            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
          <?php endfor; ?>
         </select>
           <select name="children" class="custom-select" style="width: 50px">
          <?php for($i=0;$i <= 30;$i++): ?>
            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
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
    <div class="row">
      <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-6">
          <div class="card mb-3" style="width: 557px;height: 200px;padding: 5px">
                <img class="card-img-top" src="http://via.placeholder.com/350x120" alt="Card image cap"> 
                <h1>
                  <a href="<?php echo e(url('searchresult?city_id='.$city->id)); ?>"><?php echo e($city->name); ?></a>
                </h1>         
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="result" style="background-color: #eee;
    width: 215px;
    height: 171px;position: absolute;
    top: 130px;
">
      <p class="include"></p>
    </div>
       
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
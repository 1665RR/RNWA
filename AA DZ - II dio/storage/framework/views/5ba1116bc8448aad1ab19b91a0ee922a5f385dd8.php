

<?php $__env->startSection('content'); ?>

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('location.update', $location->id)); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PATCH'); ?>
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo e($location->name); ?>"/>
          </div>
          <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" value="<?php echo e($location->address); ?>"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" value="<?php echo e($location->phone); ?>"/>
          </div>
          <div class="form-group">
              <label for="email">email</label>
              <input type="email" class="form-control" name="email" value="<?php echo e($location->email); ?>"/>
          </div>
          <div class="form-group">
              <label for="company_id">Phone</label>
              <input type="number" class="form-control" name="company_id" value="<?php echo e($location->company_id); ?>"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update Location</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mvc2\laravel-crud-app\resources\views/location/edit.blade.php ENDPATH**/ ?>
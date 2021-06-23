

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
      <form method="post" action="<?php echo e(route('manager.update', $manager->id)); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PATCH'); ?>
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo e($manager->name); ?>"/>
          </div>
          <div class="form-group">
              <label for="location_id">Location id</label>
              <input type="number" class="form-control" name="location_id" value="<?php echo e($manager->location_id); ?>"/>
          </div>
          <div class="form-group">
              <label for="users_id">Users id</label>
              <input type="number" class="form-control" name="users_id" value="<?php echo e($manager->users_id); ?>"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update Manager</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\mvc2\laravel-crud-app\resources\views/edit.blade.php ENDPATH**/ ?>
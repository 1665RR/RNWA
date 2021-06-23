

<?php $__env->startSection('content'); ?>

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
  <div> <a href="<?php echo e(route('location.create')); ?>" class="btn btn-primary btn-sm">Add Location</a>
  </br> </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Address</td>
          <td>Phone</td>
          <td>email</td>
          <td>Company ID</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($location->id); ?></td>
            <td><?php echo e($location->name); ?></td>
            <td><?php echo e($location->address); ?></td>
            <td><?php echo e($location->phone); ?></td>
            <td><?php echo e($location->email); ?></td>
            <td><?php echo e($location->company_id); ?></td>
            <td class="text-center">
                <a href="<?php echo e(route('location.edit', $location->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                <form action="<?php echo e(route('location.destroy', $location->id)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mvc2\laravel-crud-app\resources\views/location/index.blade.php ENDPATH**/ ?>
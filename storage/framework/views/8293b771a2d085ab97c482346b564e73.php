



<?php $__env->startSection('content'); ?>

<div class="col-sm-6">
  <h1>Edit Restaurant</h1>
	<form method="post" action="/edit">
		<?php echo csrf_field(); ?>
  
  
<div>
<input type="hidden" name="id" value="<?php echo e($data['id']); ?>" class="form-control">
</div>
<div class="mb-3">
  <label>Name </label>
    
  <input type="text" name="name" value="<?php echo e($data['name']); ?>" class="form-control"> 
</div>
<div class="mb-3">
    <label >Email </label>
  <input type="text" name="email" value="<?php echo e($data['email']); ?>" class="form-control"> 
</div>
<div class="mb-3">
    <label>Address </label>
  <input type="text" name="address" value="<?php echo e($data['address']); ?>" class="form-control">  
</div>
  <button type="submit" class="btn btn-primary"> Update</button>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp-2\htdocs\laravel\Resturant-App\resources\views/edit.blade.php ENDPATH**/ ?>
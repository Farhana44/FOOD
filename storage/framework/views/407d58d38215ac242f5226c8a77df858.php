



<?php $__env->startSection('content'); ?>

<div class="col-sm-6">
	<form method="post" action="">
		<?php echo csrf_field(); ?>
  
  <div class="mb-3">
    <label>Name </label>
    <input type="text" name ="name"class="form-control" placeholder="Enter Name">  
  </div>
  <div class="mb-3">
    <label >Email </label>
    <input type="email" name ="email"class="form-control" placeholder="Enter Email">  
  </div>
  <div class="mb-3">
    <label>Address </label>
    <input type="text" name ="address"class="form-control" placeholder="Enter Address">  
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp-2\htdocs\laravel\Resturant-App\resources\views/add.blade.php ENDPATH**/ ?>
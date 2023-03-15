



<?php $__env->startSection('content'); ?>
<h1> Resturant List Page Is here</h1>
<?php if(Session::get('status')): ?>
<div class="alert alert-success  alert-dismissible fade show" role="alert">
 <strong> <?php echo e(Session::get('status')); ?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <th scope="row"><?php echo e($item->id); ?></th>
      <td><?php echo e($item->name); ?></td>
      <td><?php echo e($item->email); ?></td>
      <td><?php echo e($item->address); ?></td>
      <td>

        <a href="/delete/<?php echo e($item->id); ?>"><span class="material-symbols-outlined">delete</span></a>

        <a href="/edit/<?php echo e($item->id); ?>"><span class="material-symbols-outlined">edit_square</span></a>


   </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp-2\htdocs\laravel\Resturant-App\resources\views/list.blade.php ENDPATH**/ ?>
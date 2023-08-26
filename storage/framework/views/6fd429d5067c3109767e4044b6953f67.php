

<?php $__env->startSection('main'); ?>

<?php if(session('success')): ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo e(session('success')); ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php endif; ?>

<a href="<?php echo e(route('add.attendance')); ?>" class="btn btn-success">Add Attendance</a>

<form class="d-flex mt-3" role="search" action="<?php echo e(route('get.attendance')); ?>">
    <input class="form-control w-50 " type="date" name="search" placeholder="Search" aria-label="Search" value="<?php echo e($search); ?>">
    <button class="btn btn-outline-success d-flex ms-2" type="submit">Search</button>
</form> 


<div class="table-responsive table-bordered pt-3">
    <table class="table table-light">
        <thead>
            <tr class="bg-secondary text-light">
                <th>#</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            

            <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendances =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($attendances+1); ?></td>
                <td><?php echo e($item->student->name); ?></td>
                <td><?php echo e($item->date); ?></td>
               
                <td>
                    <a href="<?php echo e(route('edit.attendance', $item->id)); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo e(route('delete.attendance', $item->id)); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody>
    </table>
</div>

<?php echo e($attendance->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\instinct php and laravel\final project\school_management\resources\views/admin/attendance/all_attendance.blade.php ENDPATH**/ ?>
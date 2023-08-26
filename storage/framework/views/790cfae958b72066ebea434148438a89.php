

<?php $__env->startSection('main'); ?>


<a href="<?php echo e(route('add.student')); ?>" class="btn btn-success">Add Student</a>

 <form class="d-flex mt-3" role="search" action="<?php echo e(route('get.student')); ?>">
            <input class="form-control w-50 " type="search" name="search" placeholder="Search" aria-label="Search" value="<?php echo e($search); ?>">
            <button class="btn btn-outline-success d-flex ms-2" type="submit">Search</button>
</form> 

    <table class="table table-light">

        <?php if(session('success')): ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo e(session('success')); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        
        
    <?php endif; ?>

        <thead>
            <tr class="bg-secondary text-light">
                <th>#</th>
                <th>Name</th>
                <th>gender</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($student+1); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->gender); ?></td>
                <td><?php echo e($item->class->class_name); ?></td>
                <td>
                    <a href="<?php echo e(route('edit.student', $item->id)); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo e(route('delete.student', $item->id)); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody>
    </table>


    <?php echo e($students->links()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\instinct php and laravel\final project\school_management\resources\views/admin/student/get_student.blade.php ENDPATH**/ ?>
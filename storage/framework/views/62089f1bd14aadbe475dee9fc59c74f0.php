

<?php $__env->startSection('main'); ?>

<style>

.hover{
    transition: 0.5s;
}

.hover:hover{
    transform: scale(1.1);
}

</style>

<div class="container">
    <div class="row d-flex flex-row">

        
           <div class="col-3 hover ">
            <a href="<?php echo e(route('get.student')); ?>" class="text-decoration-none">
                <div class="card bg-primary border-top-5 " style="width:14rem;">
                    <img src="<?php echo e(asset('img/student.jpg')); ?>">
                    <h5 class="card-title d-flex justify-content-center pt-3 fw-bold text-light">Student</h5>
                </div>
            </a>
           </div>

           <div class="col-3 offset-1 hover">
            <a href="<?php echo e(route('get.class')); ?>" class="text-decoration-none">
                <div class="card bg-primary  " style="width:14rem; height:12.8rem">
                    <img src="<?php echo e(asset('img/class.jpg')); ?>" style="height:30rem">
                    <h5 class="card-title d-flex justify-content-center pt-3 fw-bold text-light">Class</h5>
                </div>
            </a>
           </div>
           
           <div class="col-3 offset-1 hover">
            <a href="<?php echo e(route('get.attendance')); ?>" class="text-decoration-none">
                <div class="card bg-primary  " style="width:14rem; height:12.8rem">
                    <img src="<?php echo e(asset('img/attendance.jpg')); ?>" style="height:9.5rem">
                    <h5 class="card-title d-flex justify-content-center pt-3 fw-bold text-light">Attendance</h5>
                </div>
            </a>
           </div>

           
       
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\instinct php and laravel\final project\school_management\resources\views/admin/admin_index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="container" >
    <div class="row " >
        <div class="col-md-2" >
            <div class="card" >
                
                <div class="card-body bg-primary text-white">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert" >
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                   You are logged in as <strong>Admin</strong>!
                </div>
            <div class="card-header"><a href="<?php echo e(route('newcomplaint')); ?>">New Complaints</a> </div>
            <div class="card-header"><a href="<?php echo e(route('newcomplaint')); ?>">Bending Complaints</a></div>
            <div class="card-header"><a href="<?php echo e(route('newcomplaint')); ?>">Closed Complaints</a></div>
            <div class="card-header"><a href="<?php echo e(route('newcomplaint')); ?>">Complaints Details</a></div>
                
            </div>
        </div>
        <div class="col-md-8">
            <h1 style="color:blue;text-align: center;">HOME</h1>
             <p style="color:#2c4a7a">Daffodil International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Daffodil Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Daffodil International University came into being on 24th January 2002, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement.

To be among the very best in Bangladesh which is the most challenging goal, has been set for the university. This has done so because it is only through working we can achieve the very highest level of standards in curriculum, teaching, faculties and other activities that can realize the full potential of the academic community that is Daffodil International University. The vision reflects the service to the society. The mission is to pursue research, learning and teaching of international distinction for the benefit of the nation. </p>
        </div>



       

</div>
</div>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\DIU_CMS\resources\views/admin.blade.php ENDPATH**/ ?>
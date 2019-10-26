<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row " >
        <div class="col-md-3" >
            <div class="card">
                
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                   You are logged in as <strong>User</strong>!
                </div>
                <div>
                  
                   <div style="color:red"><?php echo e(Auth::user()->name); ?>'s profiles</div><br>
                  <strong>
                    <div>
                    <p>Name        :<?php echo e(Auth::user()->name); ?><br>
                    Email :<?php echo e(Auth::user()->email); ?><br>
                    Id :<?php echo e(Auth::user()->student_id); ?>


                  </p>

                    </div>
                    
                  </strong>
                    
                  
                </div>
                <div class="card-header"><button class=""><a href="<?php echo e(route('complaint')); ?>">Make complain</a></button> </div>
                <form method="post">
                  <div class="card-header"><button><a href="<?php echo e(route('newcomplaint1')); ?>">Status of complaint</a></button></div>
                </form>
                
                
            </div>
        </div>



        <div class="col-md-9" >
            <div class="card">
           <div class="panel">
            <div class="panel-heading">
                <center><strong>Complain Catagory</strong></center>
                </div>
            <div class="panel-body">
                 <table>
                    <tr>
                    <td><div ><a href="<?php echo e(route('academic')); ?>"><img src="img/transport.png" style=" height:150;weight:70px; "/></a><br>
                    Academic </div></td>

                    <td><a href="<?php echo e(route('complaint')); ?>"><img src="img/library.png"  style=" height:150;weight:1000; "/></a><br>
                         Library
                   </td>
                    </tr>
                    <br>
                    <tr>
                    <td><a href="<?php echo e(route('complaint')); ?>"><img src="img/bus.jpg" style=" height:150;weight:100px; "/></a><br>
                    Transport</td>
                    <td><a href="<?php echo e(route('complaint')); ?>"><img src="img/canteen.jpg" style=" height:150;weight:100px; "/></a>
                    <br>
                    Canteen</td>
                    </tr>
                    <tr>
                    <td><a href="<?php echo e(route('complaint')); ?>"><img src="img/account.jpg" style=" height:150;weight:100px; "/></a><br>
                    Accounts</td>
                    <td><a href="<?php echo e(route('complaint')); ?>"><img src="img/hostel.jpg" style=" height:150;weight:100px; "/></a>
                    <br>
                    Hostel</td>
                    </tr>


                </table>

                  </div><br><br>
            <div class="panel-footer">
                All Rights Reserved @ Daffodil International University
            </div>
               

          
        </div>
  </div>
    </div>

</div>


<?php $__env->stopSection(); ?>



<!--

    <div class="row">
                <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                 </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; "/>
                    </div>
                 </div>
                   </div>
                
                 <div class="row">
                <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; "  />
                    </div>
                 </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                 </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                 </div>
                 </div>

   




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_CMS\resources\views/home.blade.php ENDPATH**/ ?>
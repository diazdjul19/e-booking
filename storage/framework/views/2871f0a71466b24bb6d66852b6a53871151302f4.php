
<?php $__env->startSection('content-wrapper'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user"></i>
            Edit Data User
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-dashboard"></i> E-Booking</a></li>
            <li><a href="<?php echo e(route('home')); ?>">User Management</a></li>
            <?php if(request()->is('user-editregistration/*')): ?>
                <li><a href="<?php echo e(route('user-registration')); ?>">User Registration </a></li>
            <?php elseif(request()->is('user-editapproved/*')): ?>
                <li><a href="<?php echo e(route('user-approved')); ?>">User Approved </a></li>
            <?php elseif(request()->is('user-editrejected/*')): ?>
                <li><a href="<?php echo e(route('user-rejected')); ?>">User Rejected </a></li>
            <?php endif; ?>
            <li class="active">User Edit</li>
        </ol>
    </section>

    <section class="content">

        
            <?php if($message = Session::get('success_edit_profil')): ?>
                <div class="box box-info box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Success Edit Profil</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo e($message); ?>

                    </div>
                    <!-- /.box-body -->
                </div>
            <?php endif; ?>

            <?php if($message = Session::get('error_edit_profil')): ?>
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Error Edit Profil</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo e($message); ?>

                    </div>
                    <!-- /.box-body -->
                </div>
            <?php endif; ?>
            

            <?php if($message = Session::get('success_edit_password')): ?>
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Success Edit Password</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo e($message); ?>

                    </div>
                    <!-- /.box-body -->
                </div>
            <?php endif; ?>

            <?php if($message = Session::get('pass_copass_tidak_sama')): ?>
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Error Edit Password</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo e($message); ?>

                    </div>
                    <!-- /.box-body -->
                </div>
            <?php endif; ?>

            <?php if($message = Session::get('error_old_password')): ?>
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Error Edit Password</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo e($message); ?>

                    </div>
                    <!-- /.box-body -->
                </div>
            <?php endif; ?>

            
        

        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user"></i> Form Edit Profil</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>

            <form class="form-sample" action="<?php echo e(route('user-update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('put')); ?>


                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="exampleInputEmail1">Nama User</label>  
                                    <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?> <?php echo e($data->name); ?>" required autocomplete="name" placeholder="Name">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="l" for="exampleInputEmail1">Email User </label>
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>  <?php echo e($data->email); ?>" required autocomplete="email" placeholder="Email">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <div class="form-group">                      
                                        <label class="" for="exampleInputEmail1">Role User</label>
                                        <select class="form-control" name="role" placeholder="role" required>
                                            <optgroup label="Role Saat Ini">
                                                <option  value="<?php echo e($data->role); ?>">
                                                    <?php if($data->role == 'admin'): ?>
                                                        <span>Admin</span>
                                                    <?php elseif($data->role == 'pelayan'): ?>
                                                        <span>Pelayan</span>
                                                    <?php elseif($data->role == 'kasir'): ?>
                                                        <span>Kasir</span>      
                                                    <?php endif; ?>
                                                </option>
                                            </optgroup>  
                                            <optgroup label="Role Baru">  
                                                <option value="admin">Admin</option>
                                                <option value="pelayan">Pelayan</option>
                                                <option value="kasir">Kasir</option>
                                            </optgroup>
                                        </select>                                    
                                    </div>
                                <?php elseif(Auth::user()->role != 'admin'): ?>
                                    <div class="form-group">                      
                                        <label class="" for="exampleInputEmail1">Role User</label>
                                        <select class="form-control" name="role" placeholder="role" required>
                                            <optgroup label="Role Saat Ini">
                                                <option  value="<?php echo e($data->role); ?>">
                                                    <?php if($data->role == 'admin'): ?>
                                                        <span>Admin</span>
                                                    <?php elseif($data->role == 'pelayan'): ?>
                                                        <span>Pelayan</span>
                                                    <?php elseif($data->role == 'kasir'): ?>
                                                        <span>Kasir</span>      
                                                    <?php endif; ?>
                                                </option>
                                            </optgroup>  
                                        </select>                                    
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <div class="form-group">                      
                                        <label class="" for="exampleInputEmail1">Status User</label>
                                        <select class="form-control" name="status" placeholder="status" required>
                                            <optgroup label="Status Saat Ini">
                                                <option  value="<?php echo e($data->level); ?>">
                                                    <?php if($data->status == 'A'): ?>
                                                        <span>Active</span>
                                                    <?php elseif($data->status == 'NA'): ?>
                                                        <span>Not Active</span>
                                                    <?php elseif($data->status == 'P'): ?>
                                                        <span>Pending</span>        
                                                    <?php endif; ?>
                                                </option>
                                            </optgroup>  
                                            <optgroup label="Status Baru">  
                                                <option value="A">Active</option>
                                                <option value="NA">Not Active</option>
                                                <option value="P">Pending</option>
                                            </optgroup>
                                        </select>                                    
                                    </div>
                                <?php elseif(Auth::user()->role != 'admin'): ?>
                                    <div class="form-group">                      
                                        <label class="" for="exampleInputEmail1">Status User</label>
                                        <select class="form-control" name="status" placeholder="status" required>
                                            <optgroup label="Status Saat Ini">
                                                <option  value="<?php echo e($data->level); ?>">
                                                    <?php if($data->status == 'A'): ?>
                                                        <span>Active</span>
                                                    <?php elseif($data->status == 'NA'): ?>
                                                        <span>Not Active</span>
                                                    <?php elseif($data->status == 'P'): ?>
                                                        <span>Pending</span>        
                                                    <?php endif; ?>
                                                </option>
                                            </optgroup>  
                                        </select>                                    
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="" for="exampleInputEmail1">Foto Profil</label>
                                <div class="form-group">                      
                                    <?php if($data->foto_user): ?>
                                        <a href="<?php echo e(url('/storage/user/'.$data->foto_user)); ?>" data-toggle="lightbox" data-type="image" data-footer="Foto Profil Milik : <?php echo e($data->name); ?>">
                                            <img src="<?php echo e(url('/storage/user/'.$data->foto_user)); ?>" style="width: 75px; max-height:75px; border-radius:5px;">
                                        </a>
                                    <?php endif; ?>
                                    <input type="file" name="foto_user" class="form-control" id="exampleInputEmail1"  placeholder="User Photo" value="<?php echo e($data->foto_user); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
            
                    <!-- /.box-footer -->
                    <div class="box-footer">
                        
                        <a href="<?php echo e(URL::previous()); ?>" class="btn btn-warning" ><i class="fa  fa-arrow-circle-left"></i> Back</a>
                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                    </div>
            </form>

            <!-- /.box-footer -->
        </div>
        <!-- /.box -->


        
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-expeditedssl"></i> Form Edit Password</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>

            <form class="form-sample" action="<?php echo e(route('user-update-password', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('put')); ?>


                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="l" for="exampleInputEmail1">Email User </label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>  <?php echo e($data->email); ?>" required autocomplete="email" placeholder="Email" readonly>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="exampleInputEmail1">Password Lama</label> 
                                    <div class="input-group">
                                        <input type="password" name="old_password" class="form-control" id="oldpassword" placeholder="Password Lama"  >
                                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye_old_pass" onclick="toggle_old_pass()"></i></div>
                                    </div>
                                    <?php if($message = Session::get('error_old_password')): ?>
                                        <strong style="color:red;"><?php echo e($message); ?></strong>
                                    <?php endif; ?>                               
                                </div>
                            </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="" for="exampleInputEmail1">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" placeholder="Password"  >
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye1" onclick="toggle1()"></i></div>
                                </div>
                                <?php if($message = Session::get('non_new_pass')): ?>
                                    <strong style="color:red;"><?php echo e($message); ?></strong>
                                <?php endif; ?>
                                <?php if($message = Session::get('pass_copass_tidak_sama')): ?>
                                    <strong style="color:red;"><?php echo e($message); ?></strong>
                                <?php endif; ?>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="" for="exampleInputEmail1">Password Confirmation</label> 
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Confirm Password"  >
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye2" onclick="toggle2()"></i></div>
                                </div>
                                <?php if($message = Session::get('pass_copass_tidak_sama')): ?>
                                    <strong style="color:red;"><?php echo e($message); ?></strong>
                                <?php endif; ?>                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->
                <div class="box-footer">
                    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-warning" ><i class="fa  fa-arrow-circle-left"></i> Back</a>
                    <button type="submit" id="btn-co-submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                </div>
            </form>
            
        </div>
        
        <!-- /.box -->
    </section>


    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('show-hide-password'); ?>
    <script>
        var state= false;

        function toggle_old_pass() {
            if (state) {
                document.getElementById(
                    "oldpassword").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye_old_pass").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "oldpassword").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye_old_pass").style.color='#5887ef';
                state = true;
            }
        }

        function toggle1() {
            if (state) {
                document.getElementById(
                    "password").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye1").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "password").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye1").style.color='#5887ef';
                state = true;
            }
        }

        function toggle2() {
            if (state) {
                document.getElementById(
                    "password-confirm").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye2").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "password-confirm").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye2").style.color='#5887ef';
                state = true;
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('lightbox'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            // $.noConflict();
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                // alert("clicked"); //to test this function ran
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        } );
        
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('confirm-alert'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        // Start Confirm Select submit Using SweetAlert2
            $('#btn-co-submit').on('click',function(e){
                e.preventDefault();

                var form = $(this).parents('form');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda akan mengubah password ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, I am sure'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                        'Success!',
                        'Success Submit Form.',
                        'success'
                        )
                        form.submit();
                    } else {
                        Swal.fire(
                            'Cancelled!',
                            'Our imaginary file is safe :).',
                            'error'
                        )
                    } 
                });
            });
        // End Confirm Select submit Using SweetAlert2
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-Booking\resources\views/dashboard_view/user_management/user_edit.blade.php ENDPATH**/ ?>
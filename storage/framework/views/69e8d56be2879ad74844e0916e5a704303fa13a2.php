
<?php $__env->startSection('content-wrapper'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-users"></i>
                User Management
                <?php if(request()->is('user-registration')): ?>
                    <span style="font-size: 13px;">| User Registration</span>
                <?php elseif(request()->is('user-approved')): ?>
                    <span style="font-size: 13px;">| User Approved</span>
                <?php elseif(request()->is('user-rejected')): ?>
                    <span style="font-size: 13px;">| User Rejected</span>
                <?php endif; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> E-Perform</a></li>
                <li><a href="#">User Management</a></li>

                <?php if(request()->is('user-registration')): ?>
                    <li class="active">User Registration</li>
                <?php elseif(request()->is('user-approved')): ?>
                    <li class="active">User Approved</li>
                <?php elseif(request()->is('user-rejected')): ?>
                    <li class="active">User Rejected</li>
                <?php endif; ?>

            </ol>
        </section>
    
        <section class="content">
            
            <div class="modal fade" id="modal-create">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><i class="fa fa-user-plus" aria-hidden="true"></i> Tambah User Baru</h4>
                        </div>

                        <form action="<?php echo e(route('user-store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-2 col-form-label" for="name"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama <span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-10">
                                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" placeholder="Name" autofocus>
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert" style="color: red;">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-2 col-form-label" for="email"><h6 style="color: black; font-weight:bold;font-size:13px;">Email <span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-10">
                                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert" style="color: red;">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-2 col-form-label" for="foto_user"><h6 style="color: black; font-weight:bold;font-size:13px;">Foto User</h6></label>
                                            
                                            <div class="col-md-10">
                                                <input type="file" name="foto_user" class="form-control input-sm" id="foto_user" placeholder="">
                                                <span class="text-danger" style="font-size: 10px;">*Max Upload : 10MB</span> <br>

                                                <?php $__errorArgs = ['foto_user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-2 col-form-label" for=""><h6 style="color: black; font-weight:bold;font-size:13px;">Security <span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-sm" id="password" placeholder="Password"  required >
                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-eye-open" arial-hidden="true" id="eye1" onclick="toggle1()"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="password" name="password_confirmation" class="form-control input-sm" id="password-confirm" placeholder="Confirm Password"  required >
                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-eye-open" arial-hidden="true" id="eye2" onclick="toggle2()"></i></div>
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert" style="color: red; margin-left:15px;">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-2 col-form-label" for="role"><h6 style="color: black; font-weight:bold;font-size:13px;">Role <span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-10">
                                                <select class="form-control" name="role" id="role" >
                                                    <optgroup label="Pilih Role" >
                                                        <option value selected disabled>Pilih Role</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="pelayan">Pelayan</option>
                                                        <option value="kasir">Kasir</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </form>
                    
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            

            <!-- Default box -->
            <div class="box box-success">
                <form action="<?php echo e(route('select-delete-user')); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                    <div class="box-header with-border">
                        <h3 class="box-title">Table User Management</h3>
        
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                            <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>
        
                        <div class="row">
                            <div class="col-md-6">
                                <?php if(request()->is('user-registration')): ?>
                                    <button type="button" class="btn btn-info btn-sm" style="margin-top: 10px;" data-toggle="modal" data-target="#modal-create"><i class="fa fa-user-plus"></i> Tambah</button>
                                    <button type="button" class="btn btn-danger btn-sm" style="margin-top: 10px;" id="btn-co-delete" name="select_delete[]" type="submit">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                    </button>
                                <?php elseif(request()->is('user-approved')): ?> 
                                    <a href="#" class="btn btn-info btn-sm" style="margin-top: 10px;"><i class="fa fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-danger btn-sm" style="margin-top: 10px;" id="btn-co-delete" name="select_delete[]" type="submit">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                    </button>
                                <?php elseif(request()->is('user-rejected')): ?>
                                    <button type="button" class="btn btn-info btn-sm" style="margin-top: 10px;"><i class="fa fa-print"></i> Print</button>
                                    <button type="button" class="btn btn-danger btn-sm" style="margin-top: 10px;" id="btn-co-delete" name="select_delete[]" type="submit">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                    </button>
                                <?php endif; ?>
                                
                            </div>
                            <div class="col-md-c"></div>
                        </div>
                        
                        
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Status </th>
                                        <th class="text-center" style="padding:5px; min-width:80px;">&#128073; <input type="checkbox" id="cekall" style="margin-bottom: 10px;"  data-toggle="tooltip" title="Click here to Check All" data-placement="top"> &#128072;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <?php if(request()->is('user-registration')): ?>
                                                <td style="min-width:120px;"><a href="<?php echo e(route('user-editregistration', $d->id)); ?>" style="color: #17a2b8;text-decoration:none;" data-toggle="tooltip" title="Click here to view or edit data" data-placement="top"><?php echo e($d->name); ?></a></td>
                                            <?php elseif(request()->is('user-approved')): ?>
                                                <td style="min-width:120px;"><a href="<?php echo e(route('user-editapproved', $d->id)); ?>" style="color: #17a2b8;text-decoration:none;" data-toggle="tooltip" title="Click here to view or edit data" data-placement="top"><?php echo e($d->name); ?></a></td>
                                            <?php elseif(request()->is('user-rejected')): ?>
                                                <td style="min-width:120px;"><a href="<?php echo e(route('user-editrejected', $d->id)); ?>" style="color: #17a2b8;text-decoration:none;" data-toggle="tooltip" title="Click here to view or edit data" data-placement="top"><?php echo e($d->name); ?></a></td>
                                            <?php endif; ?>
                                            
                                            <td><?php echo e($d->email); ?></td>
                                            <td class="text-center">
                                                <?php if($d->role == "admin"): ?>
                                                    <span class="label label-default">Admin</span>
                                                <?php elseif($d->role == "pelayan"): ?>
                                                    <span class="label label-primary">Pelayan</span>
                                                <?php elseif($d->role == "kasir"): ?>
                                                    <span class="label label-info">Kasir</span>
                                                <?php endif; ?>
                                            </td>
                                        
                                            <td class="text-center">                   
                                                <?php if($d->role == 'admin'): ?>
                                                    <?php if($d->status == 'P'): ?>
                                                        <a href="<?php echo e(route('user.active', $d->id)); ?>" id="" class="label label-warning" style="font-size: 12px;" data-toggle="tooltip" title="Click here to Activate" data-placement="top"><i class="fa fa-clock-o"></i> Belum Aktif</a>
                                                    <?php elseif($d->status == 'NA'): ?>
                                                        <a href="<?php echo e(route('user.active', $d->id)); ?>" id="" class="label label-danger" style="font-size: 12px;" data-toggle="tooltip" title="Click here to Activate" data-placement="top"><i class="fa fa-times"></i> User Not Active</a>
                                                    <?php elseif($d->status == 'A'): ?>
                                                        <span class="label label-primary" style="font-size: 12px;"><i class="fa fa-check-square-o"></i> Admin Aktif</span>
                                                    <?php endif; ?>
                                                <?php elseif($d->role != 'admin'): ?>
                                                    <?php if($d->status == 'P'): ?>
                                                        <a href="<?php echo e(route('user.active', $d->id)); ?>" id="" class="label label-warning" style="font-size: 12px;" data-toggle="tooltip" title="Click here to Activate" data-placement="top"><i class="fa fa-clock-o"></i> Belum Aktif</a>
                                                    <?php elseif($d->status == 'NA'): ?>
                                                        <a href="<?php echo e(route('user.active', $d->id)); ?>" id="" class="label label-danger" style="font-size: 12px;" data-toggle="tooltip" title="Click here to Activate" data-placement="top"><i class="fa fa-times"></i> User Not Active</a>
                                                    <?php elseif($d->status == 'A'): ?>
                                                        <a  href="<?php echo e(route('user.not-active', $d->id)); ?>" id="" class="label label-info" style="font-size: 12px;"  data-toggle="tooltip" title="Click here to Turn Off" data-placement="top"><i class="fa fa-check-square-o"></i> User Aktif</a>
                                                    <?php endif; ?> 
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="select_delete[]" value="<?php echo e($d->id); ?>"></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('datatable'); ?>
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('checkall'); ?>
    <script>
        $(document).ready(function() {
            $('#cekall').click(function () {
                $('input[type=checkbox]').not(":disabled").prop('checked', this.checked);
            });
        } );
        
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('max-img'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            
            var uploadFieldUsr = document.getElementById("foto_user");
            var uploadFieldKtp = document.getElementById("foto_ktp");


            uploadFieldUsr.onchange = function() {
                if(this.files[0].size > 1e+7){
                // alert("Maximum Image Upload Size 10MB!");
                Swal.fire({
                    icon: 'error',
                    title: 'Sorry...',
                    text: 'Maximum Image Upload Size 10MB!',
                    
                });
                this.value = "";
                };
            };

            uploadFieldKtp.onchange = function() {
                if(this.files[0].size > 1e+7){
                // alert("Maximum Image Upload Size 10MB!");
                Swal.fire({
                    icon: 'error',
                    title: 'Sorry...',
                    text: 'Maximum Image Upload Size 10MB!',
                    
                });
                this.value = "";
                };
            };
        } );
    </script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('show-hide-password'); ?>
    <script>
        var state= false;
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

<?php $__env->startPush('confirm-alert'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        // Start Confirm Select Delete Using SweetAlert2
            $('#btn-co-delete').on('click',function(e){
                e.preventDefault();

                var form = $(this).parents('form');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda tidak akan bisa mengembalikan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        // Swal.fire(
                        // 'Success!',
                        // 'Data Berhasil Di Hapus.',
                        // 'success'
                        // )
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
        // End Confirm Select Delete Using SweetAlert2
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-Booking\resources\views/dashboard_view/user_management/user.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content-wrapper'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-cutlery"></i>
                Menu Management

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> E-Booking</a></li>
                <li class="active">Menu Management</li>
            </ol>
        </section>
    
        <section class="content">

            
            <div class="modal fade" id="modal-create">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><i class="fa fa-cutlery" aria-hidden="true"></i> Tambah Menu Baru</h4>
                        </div>

                        <form action="<?php echo e(route('menu-management.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="name_menu"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama Menu<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <input id="name_menu" name="name_menu" type="text" class="form-control" required autocomplete="off" placeholder="Example : IGA BAKAR" autofocus>
                                            </div>
                            
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="type_menu"><h6 style="color: black; font-weight:bold;font-size:13px;">Jenis Menu<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <select class="form-control pt-0 pb-0" id="type_menu" name="type_menu" style="height:30px;">
                                                    <option value selected disabled>Choise</option>
                                                    <option value="MAKANAN">MAKANAN</option>
                                                    <option value="MINUMAN">MINUMAN</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="price_menu"><h6 style="color: black; font-weight:bold;font-size:13px;">Harga Menu</h6></label>
                                            
                                            <div class="col-md-8">
                                                <input id="price_menu" name="price_menu" type="text" class="form-control" autocomplete="off" placeholder="Add Price" autofocus>
                                            </div>
                            
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="status_menu"><h6 style="color: black; font-weight:bold;font-size:13px;">Status Menu<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <select class="form-control pt-0 pb-0" id="status_menu" name="status_menu" style="height:30px;" required>
                                                    <option value selected disabled>Choise</option>
                                                    <option value="Ready">Ready</option>
                                                    <option value="N_Ready">N_Ready</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="foto_menu"><h6 style="color: black; font-weight:bold;font-size:13px;">Foto Menu</h6></label>
                                            
                                            <div class="col-md-8">
                                                <input type="file" name="foto_menu" class="form-control input-sm" id="foto_menu" placeholder="">
                                                <span class="text-danger" style="font-size: 10px;">*Max Upload : 10MB</span> <br>

                                                <?php $__errorArgs = ['foto_menu'];
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
            

            
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit Menu Management</h4>
                        </div>
                        
                        <form action="/menu-management" method="post" enctype="multipart/form-data" id="editForm">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('PUT')); ?>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="name_menu_ed"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama Menu<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <input id="name_menu_ed" name="name_menu" type="text" class="form-control" required autocomplete="off" placeholder="Example : IGA BAKAR" autofocus>
                                            </div>
                            
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="type_menu_ed"><h6 style="color: black; font-weight:bold;font-size:13px;">Jenis Menu<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-4">
                                                <input id="type_menu_ed" name="" type="text" class="form-control" autocomplete="off" placeholder="" autofocus readonly style="height:30px;">
                                            </div>

                                            <div class="col-md-4">
                                                <select class="form-control pt-0 pb-0" id="" name="type_menu" style="height:30px;">
                                                    <option value selected disabled>Choise</option>
                                                    <option value="MAKANAN">MAKANAN</option>
                                                    <option value="MINUMAN">MINUMAN</option>
                                                </select>

                                                <?php $__errorArgs = ['type_menu'];
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
                                            <label class="col-md-4 col-form-label" for="price_menu_ed"><h6 style="color: black; font-weight:bold;font-size:13px;">Harga Menu</h6></label>
                                            
                                            <div class="col-md-8">
                                                <input id="price_menu_ed" name="price_menu" type="text" class="form-control" autocomplete="off" placeholder="Add Price" autofocus>
                                            </div>
                            
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="status_menu_ed"><h6 style="color: black; font-weight:bold;font-size:13px;">Status Menu<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-4">
                                                <input id="status_menu_ed" name="" type="text" class="form-control" autocomplete="off" placeholder="" autofocus readonly style="height:30px;">
                                            </div>

                                            <div class="col-md-4">
                                                <select class="form-control pt-0 pb-0" id="" name="status_menu" style="height:30px;">
                                                    <option value selected disabled>Choise</option>
                                                    <option value="Ready">Ready</option>
                                                    <option value="N_Ready">N_Ready</option>
                                                </select>

                                                <?php $__errorArgs = ['status_menu'];
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
                                            <label class="col-md-4 col-form-label" for="foto_menu"><h6 style="color: black; font-weight:bold;font-size:13px;">Foto Menu (BARU)</h6></label>
                                            
                                            <div class="col-md-8">
                                                <input type="file" name="foto_menu" class="form-control input-sm" id="foto_menu_ed" placeholder="">
                                                <span class="text-danger" style="font-size: 10px;">*Max Upload : 10MB</span> <br>

                                                <?php $__errorArgs = ['foto_menu'];
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
                                        
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            

            <!-- Default box -->
            <div class="box box-success">
                
                <div class="box-header with-border">
                    <h3 class="box-title">Table Vendor Elements</h3>
    
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                        <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info btn-sm" style="margin-top: 10px;" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus"></i> Tambah</button>
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
                                    <th class="text-center">Foto Menu</th>
                                    <th>Nama Menu</th>
                                    <th class="text-center">Jenis Menu</th>
                                    <th class="text-center">Harga Menu</th>
                                    <th class="text-center">Status Menu</th>
                                    <th class="text-center">Action</th>
                                    <th style="display:none;">ID</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td style="min-width:100px; text-align:center;">
                                            <?php if($d->foto_menu): ?>
                                                <a href="<?php echo e(url('/storage/foto_menu/'.$d->foto_menu)); ?>" data-toggle="lightbox" data-type="image" data-footer="Foto Menu : <?php echo e($d->name_menu); ?>">
                                                    <img src="<?php echo e(url('/storage/foto_menu/'.$d->foto_menu)); ?>" style="width: 50px; max-height:50px; border-radius:5px;">
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td style="min-width:100px;" class=""><?php echo e($d->name_menu); ?></td>
                                        <td style="min-width:100px;" class="text-center"><?php echo e($d->type_menu); ?></td>
                                        <td style="min-width:100px; text-align:center;">Rp. <?php echo e(number_format($d->price_menu,0, ".", ".")); ?></td>
                                        <td style="min-width:100px;" class="text-center"><?php echo e($d->status_menu); ?></td>
                                        <td style="min-width:100px;" style="padding-top: 15px;" class="text-center">
                                            <a href="#" id="open-modal" class="btn btn-success btn-xs"  style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="<?php echo e(route('menu-management-delete', $d->id)); ?>" id="" class="delete-alert btn btn-danger btn-xs"  style="margin: 3px;"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                        <td style="display:none;"><?php echo e($d->id); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            
                        </table>
                    </div>
                    
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('datatable'); ?>
    

    <script>
        $(document).ready( function () {

        // var table = $(function () {
        //     $('#example1').DataTable()
        // });

        // Start DataTable Biasa
        var table = $('#example1').DataTable({
                        responsive: true,
                        language: {
                            searchPlaceholder: 'Search...',
                            sSearch: '',
                            lengthMenu: '_MENU_ items/page',
                        }
                    });
        // End DataTable Biasa

        // Start Edit Modal
        table.on('click', '#open-modal', function (){
                    
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#name_menu_ed').val(data[2]);
            $('#type_menu_ed').val(data[3]);
            $('#price_menu_ed').val(data[4]);
            $('#status_menu_ed').val(data[5]);


            $('#editForm').attr('action', '/menu-management/'+ data[7]);
            $('#editModal').modal('show');
        });
        // End Edit Modal

        });
    </script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('max-img'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            
            var uploadFieldUsr = document.getElementById("foto_menu");


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

<?php $__env->startPush('input-rupiah'); ?>
    <script>
        var rupiah1 = document.getElementById("price_menu");
        rupiah1.addEventListener("keyup", function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah1.value = formatRupiah(this.value, "Rp. ");
        });

        var rupiah2 = document.getElementById("price_menu_ed");
        rupiah2.addEventListener("keyup", function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah2.value = formatRupiah(this.value, "Rp. ");
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
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
        // Start Confirm Delete Using SweetAlert2
            $('.delete-alert').on('click',function(e){
                e.preventDefault();
                const url = $(this).attr('href');
                // var id = $(this).data('id');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda akan menghapus data ini!",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                        'Success!',
                        'Data berhasil di hapus.',
                        'success'
                        )
                        window.location.href = url;
                    }
                });
                
            });
        // End Confirm Delete Using SweetAlert2
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\e-booking\resources\views/dashboard_view/menu_management/menu_management.blade.php ENDPATH**/ ?>
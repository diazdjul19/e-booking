
<?php $__env->startSection('content-wrapper'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-comments-o"></i>
                Action Management
                <span style="font-size: 13px;">| Booking Management</span>
                
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> E-Booking</a></li>
                <li><a href="#">Action Management</a></li>
                <li class="active">Booking Management</li>

            </ol>
        </section>
    
        <section class="content">

            
            <div class="modal fade" id="modal-create">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><i class="fa fa-comments-o" aria-hidden="true"></i> Tambah Pesanan Baru</h4>
                        </div>

                        <form action="<?php echo e(route('booking-management.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="number_order"><h6 style="color: black; font-weight:bold;font-size:13px;">Nomor Pemesanan <span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <input id="number_order" name="number_order" type="text" class="form-control" required autocomplete="off" placeholder="" autofocus readonly value="<?php echo e($tiket_autogenerate); ?>">
                                            </div>
                            
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="number_table_rel"><h6 style="color: black; font-weight:bold;font-size:13px;">Nomor Meja<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <select class="form-control pt-0 pb-0" id="number_table_rel" name="number_table_rel" style="height:30px;">
                                                    <option value selected disabled>Choise</option>
                                                    <?php $__currentLoopData = $data_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->number_table); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row fieldGroup" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for=""><h6 style="color: black; font-weight:bold;font-size:13px;">Menu Pemesanan <span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <select class="form-control pt-0 pb-0" id="" name="menu[]" style="height:30px;">
                                                        <option value selected disabled>Choise</option>
                                                            <optgroup label="Menu Makanan">
                                                                <?php $__currentLoopData = $data_makanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($item->name_menu); ?>"><?php echo e($item->name_menu); ?></option>  
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </optgroup>
                                                            <optgroup label="Menu Minuman">
                                                                <?php $__currentLoopData = $data_minuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($item->name_menu); ?>"><?php echo e($item->name_menu); ?></option>  
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </optgroup>
                                                    </select>

                                                    <input type="text" name="qty[]"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Masukan Jumlah Order"/>
                                                    <div class="input-group-addon ml-3"> 
                                                        <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
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

                        <div class="form-group row fieldGroupCopy" style="display: none;">
                            <label class="col-md-4 col-form-label" for="number_pemesanan"><h6 style="color: black; font-weight:bold;font-size:13px;"></h6></label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <select class="form-control pt-0 pb-0" id="" name="menu[]" style="height:30px;">
                                        <option value selected disabled>Choise</option>
                                            <optgroup label="Menu Makanan">
                                                <?php $__currentLoopData = $data_makanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->name_menu); ?>"><?php echo e($item->name_menu); ?></option>  
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>
                                            <optgroup label="Menu Minuman">
                                                <?php $__currentLoopData = $data_minuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->name_menu); ?>"><?php echo e($item->name_menu); ?></option>  
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>
                                    </select>

                                    <input type="text" name="qty[]"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Masukan Jumlah Order"/>
                                    <div class="input-group-addon"> 
                                        <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            

            <!-- Default box -->
            <div class="box box-success">
                <form action="<?php echo e(route('select-delete-bookingmng')); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                    <div class="box-header with-border">
                        <h3 class="box-title">Table Booking Management</h3>
        
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                            <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>
        
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info btn-sm" style="margin-top: 10px;" data-toggle="modal" data-target="#modal-create"><i class="fa fa-user-plus"></i> Tambah</button>
                                <button type="button" class="btn btn-danger btn-sm" style="margin-top: 10px;" id="btn-co-delete" name="select_delete[]" type="submit">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                </button>
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
                                        <th>No Pemesanan</th>
                                        <th class="text-center">No Meja</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center" style="padding:5px; min-width:80px;">&#128073; <input type="checkbox" id="cekall" style="margin-bottom: 10px;"  data-toggle="tooltip" title="Click here to Check All" data-placement="top"> &#128072;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td style="min-width:120px;"><a href="<?php echo e(route('booking-management.edit', $d->id)); ?>" style="color: #17a2b8;text-decoration:none;" data-toggle="tooltip" title="Click here to view or edit data" data-placement="top"><?php echo e($d->number_order); ?></a></td>
                                            
                                            <?php if($d->jnstable != null): ?>
                                                <td style="min-width:120px;text-align:center;">
                                                    <?php echo e($d->jnstable->number_table); ?>

                                                </td>
                                            <?php elseif($d->jnstable == null): ?> 
                                                <td style="min-width:120px;text-align:center;font-weight:bold;">ID Not Found !!!</td>
                                            <?php endif; ?>

                                            <td class="text-center">
                                                <?php if($d->status_order == "Open"): ?>
                                                    <span class="label label-info">Open</span>
                                                <?php elseif($d->status_order == "Close"): ?>
                                                    <span class="label label-primary">Cloce</span>
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

<?php $__env->startPush('multiple-input'); ?>
    <script>
        $(document).ready(function(){
        // membatasi jumlah inputan
        var maxGroup = 10;

        //melakukan proses multiple input 
        $(".addMore").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum '+maxGroup+' groups are allowed.');
            }
        });

        //remove fields group
        $("body").on("click",".remove",function(){ 
            $(this).parents(".fieldGroup").remove();
        });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-Booking\resources\views/dashboard_view/booking_management/booking.blade.php ENDPATH**/ ?>
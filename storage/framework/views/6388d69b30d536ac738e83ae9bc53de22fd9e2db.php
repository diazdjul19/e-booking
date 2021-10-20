
<?php $__env->startSection('content-wrapper'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-line-chart"></i>
            Edit Pesanan 
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-dashboard"></i> E-Booking</a></li>
            <li><a href="<?php echo e(URL::previous()); ?>">Action Management</a></li>
            <li><a href="<?php echo e(URL::previous()); ?>">Booking Management</a></li>
            <li class="active">Edit Pesanan</li>
        </ol>
        
    </section>

    <section class="content">
        
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus-square"></i> Edir Pesanan</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>

            <form class="form-sample" action="<?php echo e(route('booking-management.update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('put')); ?>


                <div class="row">
                    <div class="col-md-8">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="">Nomor Pesanan <span class="text-danger">*</span></label>
                                        <input id="number_order" type="text" class="form-control" name="number_order" autocomplete="off" required readonly value="<?php echo e($data->number_order); ?>">
                                    </div>
                                </div>
        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="">Nomor Meja <span class="text-danger">*</span></label>
                                        <select class="form-control" style="width: 100%;" name="number_table_rel" required>
                                            <optgroup label="Data Meja Lama">
                                                <?php if($data->jnstable == null): ?>
                                                    <option  value="">ID Not Found !!!</option>
                                                <?php elseif($data->jnstable != null): ?> 
                                                    <option  value="<?php echo e($data->jnstable->id); ?>"><?php echo e($data->jnstable->number_table); ?></option>
                                                <?php endif; ?>
                                            </optgroup>  
                                            <optgroup label="Data Site Baru">  
                                                <?php $__currentLoopData = $data_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>">
                                                        <?php echo e($item->number_table); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="">Status Order </label>
                                            <select class="form-control pt-0 pb-0" id="status" name="status" style="height:35px;" required>
                                                <optgroup label="Status Saat Ini">
                                                    <?php if($data->status_order == "Open"): ?>
                                                        <option style="background-color: aqua;color:#FFF;" value="<?php echo e($data->status_order); ?>">&#9201;&#65039; Open</option>
                                                    <?php elseif($data->status_order == "Close"): ?>
                                                        <option style="background-color: blue;color:#FFF;" value="<?php echo e($data->status_order); ?>">&#10004; Close</option>
                                                    <?php endif; ?>
                                                </optgroup>

                                                <?php if(Auth::user()->role == 'admin' || Auth::user()->role == 'kasir'): ?>
                                                    <optgroup label="Status Baru">
                                                        <option style="background-color: aqua;color:#FFF;" value="Open">&#9201;&#65039; Open</option>
                                                        <option style="background-color: blue;color:#FFF;" value="Close">&#10004; Close</option>
                                                    </optgroup>
                                                <?php endif; ?>
                                            </select>
                                    </div>
                                </div>
        
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label class="" for=""> No Edit Menu Order || Edit Menu Order</label>
                                        <select class="form-control" style="width: 100%;" id="ned_ed_mo" name="ned_ed_mo">
                                            <option value selected disabled>Choise</option>
                                            <option value="N_EMO">No Edit Menu Order</option>
                                            <option value="EMO">Edit Menu Order</option>
                                        </select>
                                    </div>
                                </div>
        
                            </div>

                            <div class="row fieldGroup" id="IfCustomMenu">
                                <div class="col-md-12">
                                    <label class="" for="">Add (NEW) Menu Order</label>
                                    <div class="input-group">
                                        <select class="form-control pt-0 pb-0" id="showhide_one" name="menu[]" style="height:30px;">
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

                    <div class="col-md-4">
                        <ul class="list-group" style="padding: 10px;">
                            <div class="box">
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name Menu</th>
                                            <th class="text-center">Qty</th>
                                        </tr>
                                        <?php $__currentLoopData = $get_dataorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($item->name_menu_order); ?></td>
                                                <td class="text-center"><?php echo e($item->name_qty_order); ?></td> 
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                            
                        </ul>
                    </div>

                    
                </div>
                
                <!-- /.box-body -->

                <!-- /.box-footer -->
                <div class="box-footer">
                    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-warning" ><i class="fa  fa-arrow-circle-left"></i> Back</a>
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>

            
            <div class="fieldGroupCopy" style="display: none;" >
                <div class="row">
                    <div class="col-md-12">
                        <label class="" for=""></label>
    
                        <div class="input-group">
                            <select class="form-control pt-0 pb-0" id="showhide_two" name="menu[]" style="height:30px;">
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

        </div>
        
        <!-- /.box -->
    </section>


    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('show-hide-input'); ?>
    <script>
        $("#ned_ed_mo").change(function() {
            if ($(this).val() == "EMO") {
                $('#IfCustomMenu').show();
                $('#showhide_one').attr('required', '');
                $('#showhide_one').attr('data-error', 'This field is required.');
                $('#showhide_two').attr('required', '');
                $('#showhide_two').attr('data-error', 'This field is required.');
            } else {
                $('#IfCustomMenu').hide();
                $('#showhide_one').removeAttr('required');
                $('#showhide_one').removeAttr('data-error');
                $('#showhide_two').removeAttr('required');
                $('#showhide_two').removeAttr('data-error');
            }

        });
        $("#ned_ed_mo").trigger("change");
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


<?php echo $__env->make('layouts.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-Booking\resources\views/dashboard_view/booking_management/booking_edit.blade.php ENDPATH**/ ?>
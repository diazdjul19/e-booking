@extends('layouts.master_dashboard')
@section('content-wrapper')
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

            {{-- Start Modal Create --}}
            <div class="modal fade" id="modal-create">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><i class="fa fa-comments-o" aria-hidden="true"></i> Tambah Pesanan Baru</h4>
                        </div>

                        <form action="{{route('booking-management.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="number_order"><h6 style="color: black; font-weight:bold;font-size:13px;">Nomor Pemesanan <span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <input id="number_order" name="number_order" type="text" class="form-control" required autocomplete="off" placeholder="" autofocus readonly value="{{$tiket_autogenerate}}">
                                            </div>
                            
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-4 col-form-label" for="number_table_rel"><h6 style="color: black; font-weight:bold;font-size:13px;">Nomor Meja<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-8">
                                                <select class="form-control pt-0 pb-0" id="number_table_rel" name="number_table_rel" style="height:30px;">
                                                    <option value selected disabled>Choise</option>
                                                    @foreach ($data_table as $item)
                                                        <option value="{{$item->id}}">{{$item->number_table}}</option>
                                                    @endforeach
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
                                                                @foreach ($data_makanan as $item)
                                                                    <option value="{{$item->name_menu}}">{{$item->name_menu}}</option>  
                                                                @endforeach
                                                            </optgroup>
                                                            <optgroup label="Menu Minuman">
                                                                @foreach ($data_minuman as $item)
                                                                    <option value="{{$item->name_menu}}">{{$item->name_menu}}</option>  
                                                                @endforeach
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
                                                @foreach ($data_makanan as $item)
                                                    <option value="{{$item->name_menu}}">{{$item->name_menu}}</option>  
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Menu Minuman">
                                                @foreach ($data_minuman as $item)
                                                    <option value="{{$item->name_menu}}">{{$item->name_menu}}</option>  
                                                @endforeach
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
            {{-- End Modal Create --}}

            <!-- Default box -->
            <div class="box box-success">
                <form action="{{route('select-delete-bookingmng')}}" method="post" >
                    @csrf
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
                                        <th class="text-center">Data Pemesanan</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center" style="padding:5px; min-width:80px;">&#128073; <input type="checkbox" id="cekall" style="margin-bottom: 10px;"  data-toggle="tooltip" title="Click here to Check All" data-placement="top"> &#128072;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td style="min-width:120px;">{{$d->number_order}}</td>
                                            @if ($d->jnstable != null)
                                                <td style="min-width:120px;text-align:center;">
                                                    {{$d->jnstable->number_table}}
                                                </td>
                                            @elseif ($d->jnstable == null) 
                                                <td style="min-width:120px;text-align:center;font-weight:bold;">ID Not Found !!!</td>
                                            @endif

                                            
                                               
                                            <span >
                                                @inject('booking_order', 'App\Models\MsBookingOrder')
                                                {{$booking_order->where('rendome_booking_order', $d->rendome_booking_rel)->get('name_menu_order') }}
                                                {{str_replace('[{"', "", $booking_order)}}
                                                
                                            </span>
                                            
                                            <td style="min-width:120px;" style="padding-top: 15px;" class="text-center">
                                                <a href="#" id="open-modal" class="btn btn-success btn-xs"  style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="{{route('table-management-delete', $d->id)}}" id="" class="delete-alert btn btn-danger btn-xs"  style="margin: 3px;"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                            <td style="display:none;">{{$d->id}}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
@endsection

@push('datatable')
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
@endpush

@push('checkall')
    <script>
        $(document).ready(function() {
            $('#cekall').click(function () {
                $('input[type=checkbox]').not(":disabled").prop('checked', this.checked);
            });
        } );
        
    </script>
@endpush

@push('confirm-alert')
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
@endpush

@push('multiple-input')
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
@endpush
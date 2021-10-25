<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <table width="100%">
            <tr>
                <td width="10%" align="center">
                    <img src="{{asset('image-inject/dkijkt.jpg')}}" alt="" width="100px" height="75px">
                </td>
                <td width="80%" align="center">
                        <font size="4">Marketing Research Indonesia</font> <br>
                        <font size="2">Soho Pancoran, Tower Splendor 19th Floor, Unit 15,16,17 Jl.Let Jend MT Haryono Kav 2-3,</font><br>
                        <font size="2">Jakarta Selatan 12810</font><br>
                </td>
                <td width="10%" align="center">
                    <img src="{{asset('image-inject/logomri.png')}}" alt="" width="100px" height="75px">
                </td>
            </tr>
        </table>
        <br>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item active">
                        <br>
                        <p>
                            Tanggal : {{date("d M Y")}} <br>
                            Jam : {{date("H:i:s")}} <br>

                            Nomor Pesanan : {{$data->number_order}} <br>
                            Nomor Meja : {{$data->number_table_rel}} <br>
                            Status : @if ($data->status_order == "Open")
                                         Open
                                    @elseif ($data->status_order == "Close")
                                         Close
                                    @endif
                        </p>
    
    
                    </li>
                </ul>
                <br>
                <ul class="list-group">
                    <li class="list-group-item active text-center"></li>
                    <li class="list-group-item">
                        <table class="table w-100">
                            <tr>
                                <th>No</th>
                                <th>Rendome String</th>
                                <th>Nama Menu</th>
                                <th class="text-center">QTY</th>
                            </tr>
                            @foreach ($get_dataorder as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->rendome_booking_order}}</td>
                                    <td>{{$item->name_menu_order}}</td>
                                    <td class="text-center">{{$item->name_qty_order}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </li>
                </ul> 
            </div>
        </div>
    </section>
    <!-- /.content -->
    </div>
<!-- ./wrapper -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>

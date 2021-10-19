<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsBooking;
use App\Models\MsBookingOrder;
use App\Models\MsTable;
use App\Models\MsMenu;
use Illuminate\Support\Str;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_daily = MsBooking::orderBy('id', 'DESC')->first();
        $date_now = date("dmY");

        if ($id_daily == null) {
            // $tiket_autogenerate = "ABC" . $date_now . "-" . str_pad(1, 4, "0", STR_PAD_LEFT);
            $tiket_autogenerate = "AutoGenerage-Tiket";

        }else {
            $tiket_autogenerate = "ABC" . $date_now . "-" . str_pad($id_daily->id + 1, 4, "0", STR_PAD_LEFT);
        }

        $data_table = MsTable::where('status_table', 'Ready')->get();

        $data_makanan = MsMenu::where([
            ['type_menu','=','MAKANAN'],
            ['status_menu','=', 'Ready']
        ])->get();

        $data_minuman = MsMenu::where([
            ['type_menu','=','MINUMAN'],
            ['status_menu','=', 'Ready']
        ])->get();

        $data = MsBooking::with('jnstable', 'menubookingorder')->get();

        return view('dashboard_view.booking_management.booking', compact('tiket_autogenerate', 'data', 'data_table', 'data_makanan', 'data_minuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // '' => ['required', 'string', 'max:255'],
            // '' => ['required', 'string', 'max:255'],
        ]);

        try {

            \DB::beginTransaction();

            // Start Proses untuk create Menu Pemesanan ke database
                $rendome_booking_order = Str::random(10);
                $name_menu_order = $request->menu;
                $name_qty_order = $request->qty;
                $price_order = "0";

                for ($i=0; $i < count($name_menu_order); $i++) { 
                    $datasave = [
                        'rendome_booking_order' => $rendome_booking_order,
                        'name_menu_order' => $name_menu_order[$i],
                        'name_qty_order' => $name_qty_order[$i],
                        'price_order' => $price_order

                    ];
                    \DB::table('ms_booking_orders')->insert($datasave);
                }
            // End Proses untuk create Menu Pemesanan ke database

            $data = new MsBooking;
            $data->number_order = $request->number_order;
            $data->number_table_rel = $request->number_table_rel;
            $data->rendome_booking_rel = $rendome_booking_order;
            $data->status_order = "Open";
            $data->save();

            // Ini fungsi untuk generate otomatis untuk yang pertama.
            if ($data->number_order == "AutoGenerage-Tiket") {
                $date_now = date("dmY");
                $tiket_autogenerate_first = "ABC" . $date_now . "-" . str_pad($data->id, 4, "0", STR_PAD_LEFT);
                $data->update(['number_order' => $tiket_autogenerate_first]);
            }

            
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Success Created',"Successfully Created Data : ");
            return redirect(route('booking-management.index'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('booking-management.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsMenu;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MsMenu::all();
        return view('dashboard_view.menu_management.menu_management', compact('data'));
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
            'name_menu' => ['required', 'string', 'max:255'],
            'type_menu' => ['required', 'string', 'max:255'],
            'status_menu' => ['required', 'string', 'max:255'],
        ]);

        try {

            \DB::beginTransaction();

            $data = new MsMenu;
            $data->name_menu = $request->name_menu;
            
            $replace_rpmenu = str_replace("Rp. ", "", $request->price_menu);
            $replace_dotmenu = str_replace(".", "", $replace_rpmenu);
            $data->price_menu = $replace_dotmenu;

            $data->type_menu = $request->type_menu;
            $data->status_menu = $request->status_menu;
            $data->name_menu = $request->name_menu;

            if (isset($request->foto_menu)) {
                $imageFile = $request->name_menu . '/' . \Str::random(60) . '.' . $request->foto_menu->getClientOriginalExtension();
                $image_path = $request->file('foto_menu')->move(storage_path('app/public/foto_menu/' . $request->name_menu), $imageFile);

                $data->foto_menu = $imageFile;
            }
            
            $data->save();
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Success Created',"Successfully Created Data : $data->name_menu");
            return redirect()->back();


        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect()->back();

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
        // $this->validate($request, [
        //     'name_menu' => ['required', 'string', 'max:255'],
        //     'type_menu' => ['required', 'string', 'max:255'],
        //     'status_menu' => ['required', 'string', 'max:255'],

        // ]);

        try {

            \DB::beginTransaction();

            $data = MsMenu::find($id);
            $data->name_menu = $request->get('name_menu');
            
            $replace_rpmenu = str_replace("Rp. ", "", $request->get('price_menu'));
            $replace_dotmenu = str_replace(".", "", $replace_rpmenu);
            $data->price_menu = $replace_dotmenu;

            if (isset($request->type_menu)) {
                $data->type_menu = $request->get('type_menu');
            }

            if (isset($request->status_menu)) {
                $data->status_menu = $request->get('status_menu');
            }

            if (isset($request->foto_menu)) {
                $imageFile = $request->name_menu . '/' . \Str::random(60) . '.' . $request->foto_menu->getClientOriginalExtension();
                $image_path = $request->file('foto_menu')->move(storage_path('app/public/foto_menu/' . $request->name_menu), $imageFile);

                $data->foto_menu = $imageFile;
            }
            
            $data->save();
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Success Updated',"Successfully Updated Data : $data->name_menu");
            return redirect()->back();


        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_redirect = MsMenu::find($id);
        $data = MsMenu::find($id)->delete();

        return redirect(route('menu-management.index'));
    }
}

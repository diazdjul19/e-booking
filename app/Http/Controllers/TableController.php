<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsTable;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MsTable::all();
        return view('dashboard_view.table_management.table_management', compact('data'));
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
            'number_table' => ['required', 'string', 'max:255'],
            'status_table' => ['required', 'string', 'max:255'],

        ]);

        try {

            \DB::beginTransaction();

            $data = new MsTable;
            $data->number_table = $request->number_table;
            $data->status_table = $request->status_table;
            $data->save();
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Success Created',"Successfully Created Data : $data->name_vendor");
            return redirect(route('table-management.index'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('table-management.index'));
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
        $this->validate($request, [
            'number_table' => ['required', 'string', 'max:255'],
            // 'status_table' => ['required', 'string', 'max:255'],

        ]);

        try {

            \DB::beginTransaction();

            $data = MsTable::find($id);
            $data->number_table = $request->get('number_table');
        
            if (isset($request->status_table)) {
                $data->status_table = $request->get('status_table');

            }
            $data->save();
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Success Updated',"Successfully Updated Data : $data->number_table");
            return redirect(route('table-management.index'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('table-management.index'));
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
        $data_redirect = MsTable::find($id);
        $data = MsTable::find($id)->delete();

        return redirect(route('table-management.index'));
    }
}

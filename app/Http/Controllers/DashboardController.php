<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contribution = Contributor::where('trash', false)->latest()->get();
        $total = Contributor::where('trash', true)->latest()->get();
        $count=count($total);
        return view('dashboard.index', [
            'count' => $count,
            'page' => 'dashboard',
            'all_contribution' => $contribution,
        ]);
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
        //
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
        $delete_data= Contributor::findOrFail($id);
        $delete_data->delete();

        return back() ->with('success','Data deleted successfully');
    }
    public function trash()
    {
        $contribution = Contributor::where('trash', true)->get();
        $total = Contributor::where('trash', false)->latest()->get();
        $count=count($total);
        return view('dashboard.index', [
            'count' => $count,
            'page' => 'trash',
            'all_contribution' => $contribution,
        ]);
    }
    public function updateStatus($id)
    {
        $data = Contributor::where('id', $id)->first();

        if ($data->status) {
            $data->update([
                'status' => false,
            ]);
        } else {
            $data->update([
                'status' => true,
            ]);
        }
        return back()->with('success', 'Status updated successfully');
    }
    public function updateTrash($id)
    {
        $data = Contributor::where('id', $id)->first();

        if ($data->trash) {
            $data->update([
                'trash' => false,
            ]);
        } else {
            $data->update([
                'trash' => true,
            ]);
        }
        return back()->with('success', 'Trash updated successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.index');
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
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'designation' => 'required',
            'organizatioon' => 'required',
            'topic' => 'required',
            'reference' => 'required',
            'visuals' => 'required',
            'writeup' => 'required',
        ]);

        $uid=rand().time();

        Contributor::create([
            'uid' => $uid,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'designation' => $request->designation,
            'organizatioon' => $request->organizatioon,
            'topic' => $request->topic,
            'reference' => $request->reference,
            'visuals' => $request->visuals,
            'writeup' => $request->writeup,
        ]);

        return redirect()->route('thank.you',$uid)->with('success', 'Form Submitted');;
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
    public function thanks($uid=null)
    {
        if($uid===null){
            return redirect()->route('form.index')->with('warning', 'Incorrect URL');
        }
        if ($uid) {
            $user_date = Contributor::where('uid', $uid)->first();
            if ($user_date) {
                return view('form.thank',[
                    'name' => $user_date->name,
                ]);
            } else {
                return redirect()->route('form.index')->with('danger', 'ID not matched');
            }
        }
    }
}

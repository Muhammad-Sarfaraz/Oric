<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.settings.setting.index');
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

    public function validation($request)
    {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'title' => 'required|max:255',
        ]);
    }


    public function store(Request $request)
    {


        $this->validation($request);
        $data = new Website;

        $data->name = $request->name;
        $data->title = $request->title;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->wfooter = $request->wfooter;
        $data->adress = $request->adress;
        $data->wlogo = $request->wlogo->store('public/gallery/logo');


        $data->save();

        $website = Website::all();
        foreach ($website as $web) {
            $id = $web->id;
            if (isset($id)) {
                $backid = $id - 1;
            }
        }
        echo $backid;
        if (isset($backid)) {
            Website::find($backid)->delete();
        }

        return back()->with('status', 'Successfully Updated');

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

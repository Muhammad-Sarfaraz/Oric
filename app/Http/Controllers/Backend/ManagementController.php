<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library;
use App\Phonebook;
class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function library_index()
    {
        return view('backend.management.library.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function library_create()
    {
        return view('backend.management.library.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function library_store(Request $request)
    {
        Library::insert([$request->except('_token')]);
        return back()->with('status','Successfully Added');
    }
    public function destroy($id)
    {
        //
    }

    public function phonebook_index()
    {
        return view('backend.management.phonebook.index');
    }

    public function phonebook_create()
    {
        return view('backend.management.phonebook.create');
    }

    public function phonebook_store(Request $request)
    {
        Phonebook::insert([$request->except('_token')]);
        return back()->with('status','Successfully Added');
    }
    public function phonebook_destroy()
    {
        return view('backend.management.phonebook.create');
    }
}

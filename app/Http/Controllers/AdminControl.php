<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
class AdminControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $is_edit = false;
        $books  = book::get();
        return view('books',compact('books','is_edit'));
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
        $books = new book;
        $books->name = $request->name;
        $books->description = $request->description;
        //inserting into DataBase
        $books->save();
        return redirect('books')->with('message','books saved');


       // return $request->all();
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
        $gid = $id; 
        $fetch_record = book::find($id);
        $is_edit = true;
        $books = book::get();
        return view('books',compact('fetch_record','is_edit','books','gid'));
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
        $fetch_record = book::find($id);
        $fetch_record->name =  $request->name;
        $fetch_record->description = $request->description;
        $fetch_record->update();
        return redirect('books')->with('message','books updated');
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
        $fetch_record = book::find($id);
        $fetch_record->delete();
        return redirect('books')->with('message','books deleted');   
    }
}

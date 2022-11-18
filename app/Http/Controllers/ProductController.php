<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dummy;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $name=$request->search;
       $s=Dummy::where('id','=',$name)->orWhere('product','like',"%$name%")->orWhere('category','like',"%$name%")->orWhere('brand','like',"%$name%")->get();
       $count=$s->count();
       return view('welcome',['data'=>$s,"count"=>"empty"]);
    }


    public function index()
    {
       $s=Dummy::where('id',1)->get();
       $count=$s->count();
       return view('welcome',['data'=>$s,"count"=>$count]);
    }
    public function allindex()
    {
       $s=Dummy::all();
       $count=Dummy::all()->count();
       return view('welcome',['data'=>$s,"count"=>$count]);
    }



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

<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Material;
use App\MaterialType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $material = Material::whereStatus(2)->get();



        return view('material.index', compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = MaterialType::pluck('name', 'id')->all();
        return view('material.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialRequest $request)
    {
//        return $request->all();

        $input = $request->all();
        $input['created_by'] = Auth::user()->id;

        Material::create($input);

        return redirect('/material');

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
        $material = Material::findOrFail($id);
        $type = MaterialType::pluck('name', 'id')->all();

        return view('material.edit', compact('material', 'type'));



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
        return 'test';
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


//    public function approve()
//    {
//
//        $material = Material::whereStatus(0)->get();
//
////        return dd($material);
//        return view('material/approve', compact('material'));
//    }
//
//    public function viewStatus($id)
//    {
//
//    }
//
//    public function updateStatus(Request $request, $id)
//    {
//        return 'test2';
////        return $request->all();
//    }























}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialStatusUpdateRequest;
use App\Material;
use App\MaterialType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApproveMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material = Material::whereStatus(0)->get();
        return view('material.approve.index', compact('material'));
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
        $material = Material::findOrFail($id);
        $type = MaterialType::pluck('name', 'id')->all();

        return view('material.approve.edit', compact('material', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MaterialStatusUpdateRequest $request, $id)
    {
        //0 = awaiting status change
        //1 = Rejected
        //2 = Approved

        $input = $request->all();
        if($input['status'] == 2){
            $input['approved_by'] = Auth::user()->id;
        }elseif($input['status'] == 1){
            $input['rejected_by'] = Auth::user()->id;
        }


        Material::whereId($id)->first()->update($input);

        return redirect('/material/status/approve');


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

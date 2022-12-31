<?php

namespace App\Http\Controllers;

use App\Models\Collection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Collection as CollectionResource;
use App\Http\Controllers\BaseController as BaseController;

class CollectionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Collection::all();
        return $this->sendResponse(
            CollectionResource::collection($collection), 'Post fetched'
        );  
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
        $input = $request->all();
        $validator = Validator::make($input,[
            'nama' => 'required',
            'jenis' => 'required',
            'jumlahAwal' => 'required',
            'jumlahSisa' => 'required',
            'jumlahKeluar' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        $collection = Collection::create($input);
        return $this->sendResponse(new CollectionResource($collection), 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::find($id);
        if(is_null($collection)){
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new CollectionResource($collection), 'Post fetched');

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
    public function update(Request $request, Collection $collection)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama' => 'required',
            'jenis' => 'required',
            'jumlahAwal' => 'required',
            'jumlahSisa' => 'required',
            'jumlahKeluar' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $collection->nama = $input['nama'];
        $collection->jenis = $input['jenis'];
        $collection->jumlahAwal = $input['jumlahAwal'];
        $collection->jumlahSisa = $input['jumlahSisa'];
        $collection->jumlahKeluar = $input['jumlahKeluar'];
        $collection->save();

        return $this->sendResponse(new CollectionResource($collection), 'Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return $this->sendResponse([], 'Post Deleted');

    }
}

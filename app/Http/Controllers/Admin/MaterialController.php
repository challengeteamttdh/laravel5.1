<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\MaterialRequest;
use App\Material;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Datatables;

class MaterialController extends AdminController
{
    public function __construct()
    {
        view()->share('type', 'material');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Show the page
        return view('admin.material.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // Show the page
        return view('admin.material.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(MaterialRequest $request)
    {
        $material = new Material($request->all());
        $material -> user_id = Auth::id();
        $material -> save();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Material $material)
    {
        return view('admin.material.create_edit',compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(MaterialRequest $request, Material $material)
    {
        $material -> user_id_edited = Auth::id();
        $material -> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(Material $material)
    {
        // Show the page
        return view('admin.material.delete', compact('material'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(Material $material)
    {
        $material->forceDelete();
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $materials = Material::select(array('materials.id', 'materials.name', 'materials.created_at'));
        return Datatables::of($materials)
            ->add_column('actions', '<a href="{{{ URL::to(\'admin/material/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span> {{ trans("admin/modal.edit") }}</a>
                    <a href="{{{ URL::to(\'admin/material/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                    <input type="hidden" name="row" value="{{$id}}" id="row">')
            ->remove_column('id')
            ->make();
    }
}

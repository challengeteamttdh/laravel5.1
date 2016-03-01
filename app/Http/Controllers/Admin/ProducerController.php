<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\ProducerRequest;
use App\Producer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Datatables;

class ProducerController extends AdminController
{
    public function __construct()
    {
        view()->share('type', 'producer');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Show the page
        return view('admin.producer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // Show the page
        return view('admin.producer.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProducerRequest $request)
    {
        $producer = new Producer($request->all());
        $producer -> user_id = Auth::id();
        $producer -> save();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Producer $producer)
    {
        return view('admin.producer.create_edit',compact('$producer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ProducerRequest $request, Producer $producer)
    {
        $producer -> user_id_edited = Auth::id();
        $producer -> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(Producer $producer)
    {
        // Show the page
        return view('admin.producer.delete', compact('producer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(Producer $producer)
    {
        $producer->delete();
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $producers = Producer::select(array('producers.id', 'producers.name', 'producers.created_at'));
        return Datatables::of($producers)
            ->add_column('actions', '<a href="{{{ URL::to(\'admin/producer/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span> {{ trans("admin/modal.edit") }}</a>
                    <a href="{{{ URL::to(\'admin/producer/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                    <input type="hidden" name="row" value="{{$id}}" id="row">')
            ->remove_column('id')
            ->make();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubType;
use App\Models\Type;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::all();
        return view('admin.fields.index', compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $types = Type::all();
        $subtypes = SubType::all();
        return view('admin.fields.create', compact('categories', 'types', 'subtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|max:50|unique:fields',
            'category_id' => '',
            'type_id' => '',
            'subtype_id' => '',
            ]);

        $field = new Field;
        $field->name = $request->name;
        $field->category_id = $request->category_id;
        $field->type_id = $request->type_id;
        $field->subtype_id = $request->subtype_id;
        $field->save();

        $notification = array(
        'message' => 'field added successfully',
        'alert-type' => 'info'
        );
        return redirect(route('fields.index',$field->id))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Field $field)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Field $field)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete_companies', 'App\Company');
      $field = Field::find($id);
       $field->active(0);
       $field->save();
       $notification = array(
       'message' => 'Field deleted successfully',
       'alert-type' => 'info'
       );
       return back()->with($notification);
    }
}

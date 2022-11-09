<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Http\Requests\UserPost;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::get();
        return response()->json($teachers);
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
     * @param  UserPost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserPost $request)
    {
        $teacher = new Teacher;
        $teacher->fill($request->all());
        $teacher->save();
        return response()->json($teacher);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return response()->json($teacher);
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
     * @param  UserPost  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserPost $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name = $request['name'];
        $teacher->class_id = $request['class_id'];
        $teacher->save();
        return response()->json($teacher);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return response()->json(true);
    }
}

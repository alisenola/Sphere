<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests\UserPost;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::get();
        return response()->json($students);
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
        $student = new Student;
        $student->fill($request->all());
        $student->save();
        return response()->json($student);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return response()->json($student);
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
        $student = Student::find($id);
        $student->name = $request['name'];
        $student->class_id = $request['class_id'];
        $student->save();
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json(true);
    }
}

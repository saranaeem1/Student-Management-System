<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=course::all();
        return view('course.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input= $request->all();
        Course::create($input);
        return redirect('course')->with('flash_message','Course Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course=Course::find($id);
        return view('course.show')->with("courses",$course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course=Course::find($id);
        return view('course.edit')->with("courses",$course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course=Course::find($id);
        $input= $request->all();
        $course->update($input);
        return redirect('course')->with('flash_message','Course Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect('course')->with('flash_message','Course Deleted!');
    }
}

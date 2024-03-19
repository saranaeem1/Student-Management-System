<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers=teacher::all();
        return view('teacher.index')->with('teachers',$teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input= $request->all();
        Teacher::create($input);
        return redirect('teacher')->with('flash_message','Teacher Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $teacher=Teacher::find($id);
        return view('teacher.show')->with("teachers",$teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher=Teacher::find($id);
        return view('teacher.edit')->with("teachers",$teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $teacher=Teacher::find($id);
        $input= $request->all();
        $teacher->update($input);
        return redirect('teacher')->with('flash_message','Teacher Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::destroy($id);
        return redirect('teacher')->with('flash_message','Teacher Deleted!');
    }
}

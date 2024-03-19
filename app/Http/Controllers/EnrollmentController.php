<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Batch;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $enrollments = Enrollment::all();
        return view("enrollments.index")->with('enrollments',$enrollments);
    }

    public function create()
    {
        $batches = Batch::all();
        $students = Student::all();
        if ($batches->isEmpty()) {
            return redirect()->route('batches.index')->with('error', 'No courses available. Please add courses before creating batches.');
        }
        if ($students->isEmpty()) {
            return redirect()->route('batches.index')->with('error', 'No courses available. Please add courses before creating batches.');
        }
    
        return view('enrollments.create', compact('batches','students'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message','Enrollment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $batches = Batch::all();
        $students = Student::all();
        $enrollments = Enrollment::find($id);
        return view('enrollments.edit', compact('enrollments', 'batches','students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message','Enrollment Data Updated ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message','Enrollment Data Deleted');
    }
}
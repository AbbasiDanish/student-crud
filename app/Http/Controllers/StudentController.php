<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Fetch students with optional filtering
        $query = Student::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        if ($request->has('phone')) {
            $query->where('phone', 'like', '%' . $request->input('phone') . '%');
        }

        $students = $query->paginate(10);

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string|in:male,female,other',
            'enrollment_date' => 'nullable|date',
            'status' => 'nullable|string|in:active,inactive',
            'parent_guardian_name' => 'nullable|string|max:255',
            'parent_guardian_phone' => 'nullable|string|max:20',
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $validated['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Create a new student
        Student::create($validated);

        // Redirect to the index page with a success message
        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    /**
     * Show the form for editing the specified student.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\View\View
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified student in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Student $student)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string|in:male,female,other',
            'enrollment_date' => 'nullable|date',
            'status' => 'nullable|string|in:active,inactive',
            'parent_guardian_name' => 'nullable|string|max:255',
            'parent_guardian_phone' => 'nullable|string|max:20',
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            // Delete the old profile picture if it exists
            if ($student->profile_picture) {
                Storage::disk('public')->delete($student->profile_picture);
            }
            // Store the new profile picture
            $validated['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Update the student
        $student->update($validated);

        // Redirect to the index page with a success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified student from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Student $student)
    {
        // Delete the profile picture if it exists
        if ($student->profile_picture) {
            Storage::disk('public')->delete($student->profile_picture);
        }

        // Delete the student
        $student->delete();

        // Redirect to the index page with a success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
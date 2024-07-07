<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $students = Student::all();

        return response()->json(['students' => $students], 200);
    }

    /**
     * Store a newly created student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'date_of_birth' => 'required|date',
            'class' => 'required|string',
            'section' => 'required|string',
            'institute_id' => 'required|exists:institutes,id', // Assuming institutes table exists
        ]);

        $student = Student::create($validatedData);

        return response()->json(['student' => $student], 201);
    }

    /**
     * Display the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return response()->json(['student' => $student], 200);
    }

    /**
     * Update the specified student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'string',
            'surname' => 'string',
            'date_of_birth' => 'date',
            'class' => 'string',
            'section' => 'string',
            'institute_id' => 'exists:institutes,id', // Assuming institutes table exists
        ]);

        $student->update($validatedData);

        return response()->json(['student' => $student], 200);
    }

    /**
     * Remove the specified student from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return response()->json(['message' => 'Studente eliminato con successo'], 200);
    }

    // * CUSTOM METHODS -------------------------

    /**
     * Restituisce tutti gli studenti di un determinato istituto.
     *
     * @param  int  $instituteId
     * @return \Illuminate\Http\JsonResponse
     */
    public function studentsByInstitute($instituteId)
    {
        $students = Student::where('institute_id', $instituteId)->get();

        return response()->json(['students' => $students], 200);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutes = Institute::all();

        return response()->json(['institutes' => $institutes], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $institute = institute::findOrFail($id);

        return response()->json(['institute' => $institute], 200);
    }

}

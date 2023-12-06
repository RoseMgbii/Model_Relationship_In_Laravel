<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudentAddress($id): JsonResponse{
        $student = Student::class -> find((int)$id);
        return response()->json(["message:"=>" address is", $student->address->country]);
    }
}

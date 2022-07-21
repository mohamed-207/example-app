<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    public static function index(){
        $data=Department::with('employees')->get();
        return response()->json($data);
    }
}

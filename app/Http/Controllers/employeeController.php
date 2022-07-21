<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    //
    public static function index(){
        $data=Employee::all();
        return response()->json($data);
    }
}

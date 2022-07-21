<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    //

    public static function index(){
        $data=Project::with('employees')->get();
        return response()->json($data);
    }
}

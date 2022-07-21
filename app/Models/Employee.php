<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get the department of the employee.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    /**
     * Get the projects of the employee.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_id', 'id');
    }
}

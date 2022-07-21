<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{    use HasFactory;

//    protected $with=['employees'];
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name'];


    /**
     * Get the employee for the department.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}

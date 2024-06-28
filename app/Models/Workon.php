<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workon extends Model
{
    use HasFactory;
    protected $table = 'work_on';

    public $incrementing = false;

    protected $fillable = ['emp_id', 'prj_id'];

    public $timestamps = false;

    // Định nghĩa quan hệ nhiều-nhiều với Employee
    public function employees()
    {
        return $this->belongsTo(Employee::class, 'emp_id', 'emp_id');
    }

    // Định nghĩa quan hệ nhiều-nhiều với Project
    public function projects()
    {
        return $this->belongsTo(Project::class, 'prj_id', 'prj_id');
    }
}

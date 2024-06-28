<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';

    protected $primaryKey = 'emp_id';

    protected $fillable = ['emp_id', 'emp_name', 'emp_gender', 'emp_add', 'emp_dob', 'emp_doj', 'depart_id'];

    public $timestamps = false;

    // Định nghĩa quan hệ ngược lại với Department
    public function department()
    {
        return $this->belongsTo(Department::class, 'depart_id', 'depart_id');
    }
    public function dependents()
    {
        return $this->hasMany(Dependent::class, 'emp_id', 'emp_id');
    }
}

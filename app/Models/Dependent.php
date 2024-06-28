<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;
    protected $table = 'dependents';

    protected $primaryKey = 'depen_id';

    protected $fillable = ['depen_id', 'depen_gender', 'depen_rela', 'emp_id'];

    public $timestamps = false;

    // Định nghĩa quan hệ ngược lại với Department
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_id', 'emp_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';

    protected $primaryKey = 'depart_id';

    protected $fillable = ['depart_id', 'depart_name', 'depart_loca', 'emp_id', 'since'];

    public $timestamps = false;

    public function employee()
    {
        return $this->hasMany(Employee::class, 'depart_id', 'depart_id');
    }
    public function project()
    {
        return $this->hasMany(Project::class, 'depart_id', 'depart_id');
    }
}

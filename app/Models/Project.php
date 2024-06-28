<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    protected $primaryKey = 'prj_id';

    protected $fillable = ['prj_id', 'prj_name', 'prj_loca', 'depart_id'];

    public $timestamps = false;

    // Định nghĩa quan hệ ngược lại với Department
    public function department()
    {
        return $this->belongsTo(Department::class, 'depart_id', 'depart_id');
    }
}

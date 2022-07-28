<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskInstitumentModel extends Model
{
    use HasFactory;
    public $table='task_institumentcost';
    public $fillable=['user_id','project_id','task_id','institument_name','amount','date'];
    
    public function tasks(){
        return $this->belongsTo(ProjectTaskModel::class,'task_id','task_id');
    }
}

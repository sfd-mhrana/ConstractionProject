<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTaskCostModel extends Model
{
    use HasFactory;
    public $table='projecttaskcost';
    public $fillable=['user_id','project_id','task_id','details','date','amount','status'];
    public function tasks(){
        return $this->belongsTo(ProjectTaskModel::class,'task_id','task_id');
    }
}

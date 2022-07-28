<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDistributionMod extends Model
{
    use HasFactory; 
    public $table='task_distribution';
    public $fillable=['user_id','project_id','task_id','team_id'];
    
    public function tasks(){
        return $this->belongsTo(ProjectTaskModel::class,'task_id','task_id');
    }
    public function team(){
        return $this->belongsTo(CreateTeamModel::class,'team_id','team_id');
    }
} 

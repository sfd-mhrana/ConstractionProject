<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCostModel extends Model
{ 
    use HasFactory;
    public $table='team_cost';
    public $fillable=['user_id','project_id','team_id','details','amount','date','status'];
    public function team(){
        return $this->belongsTo(CreateTeamModel::class,'team_id','team_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMemberModel extends Model
{
    use HasFactory;
    public $table='team_members';
    public $fillable=['user_id','project_id','team_id','member_id'];
    public function employee(){
        return $this->belongsTo(EmployeeModel::class,'member_id','id');
    }
    public function team(){
        return $this->belongsTo(CreateTeamModel::class,'team_id','team_id');
    }
}

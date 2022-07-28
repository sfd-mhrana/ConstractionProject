<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateTeamModel extends Model
{
    use HasFactory;
    public $table='cteate_team';
    public $fillable=['user_id','project_id','team_id','team_name','team_member','creating_date'];
 
}

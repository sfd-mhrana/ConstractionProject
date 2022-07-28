<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCostMode extends Model
{
    use HasFactory; 
    public $table='project_cost';
    public $fillable=['user_id','project_id','details','amount','date','status'];
}

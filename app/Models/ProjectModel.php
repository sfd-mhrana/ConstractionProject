<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    public $table='project';
    public $fillable=['user_id','client_name','client_phone','client_address','project_id','project_name','project_address'
    ,'project_budgect','creating_date','starting_date','ending_date','target_time','project_status'];

}

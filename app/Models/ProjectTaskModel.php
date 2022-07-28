<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class ProjectTaskModel extends Model
{
    use HasFactory;
    public $table='projecttask';
    public $fillable=['user_id','project_id','task_id','creating_date','task_name','task_status','task_budgect'
    ,'start_date','ending_date','comments'];

}

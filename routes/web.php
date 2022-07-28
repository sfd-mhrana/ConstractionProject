<?php

use App\Http\Controllers\CreateTeamCon;
use App\Http\Controllers\EmployeeCon;
use App\Http\Controllers\ProjectCon;
use App\Http\Controllers\ProjectCostCon;
use App\Http\Controllers\ProjectTaskCon;
use App\Http\Controllers\ProjectTaskCostCon;
use App\Http\Controllers\SimpleEstimitingCon;
use App\Http\Controllers\TaskDistributionCon;
use App\Http\Controllers\TaskInstitumentCostCon;
use App\Http\Controllers\TeamCostCon;
use App\Http\Controllers\TeamMemberCon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Project Section
Route::get('project/{id}',[ProjectCon::class, 'index']);
Route::get('project/projectfrom/{id}', [ProjectCon::class, 'create']); 
Route::post('project/createproject/{id}',[ProjectCon::class, 'store']);
Route::post('project/updateprojectstatus}',[ProjectCon::class, 'updateprojectstatus'])->name('updatestatus');

// Employee Section
Route::get('employee/{id}',[EmployeeCon::class, 'index']);
Route::get('employee/employeefrom/{id}', [EmployeeCon::class, 'create']); 
Route::post('employee/createemployee/{id}',[EmployeeCon::class, 'store']);



//Peoject Deshbord....
Route::get('project/deshboard/{id}/{projectid}',[ProjectCon::class, 'projectdeshboard']);

//Project Task....
Route::get('project/createtask/{id}/{projectid}',[ProjectTaskCon::class, 'create']);
Route::post('project/storetask/{id}/{projectid}',[ProjectTaskCon::class, 'store']);
Route::get('project/tasklist/{id}/{projectid}',[ProjectTaskCon::class, 'index']);
Route::get('project/taskcost/{id}/{projectid}',[ProjectTaskCon::class, 'taskconst']);
Route::get('project/institumentcost/{id}/{projectid}',[ProjectTaskCon::class, 'institumentcost']);

// Task Cost
Route::post('project/createtaskcost/{id}/{projectid}',[ProjectTaskCostCon::class, 'store']);
//Task Institument Cost
Route::post('project/createtaskinstitumentcost/{id}/{projectid}',[TaskInstitumentCostCon::class, 'store']);

 
//Project Team
Route::get('project/createteam/{id}/{projectid}',[CreateTeamCon::class, 'create']);
Route::post('project/storeteam/{id}/{projectid}',[CreateTeamCon::class, 'store']);
Route::get('project/teamlist/{id}/{projectid}',[CreateTeamCon::class, 'index']);
Route::get('project/teammembers/{id}/{projectid}',[CreateTeamCon::class, 'teammembers']);
Route::get('project/teamcost/{id}/{projectid}',[CreateTeamCon::class, 'teamcosting']);
Route::get('project/taskdistribution/{id}/{projectid}',[CreateTeamCon::class, 'taskdistribution']);

//Team Members
Route::post('project/teammembers/{id}/{projectid}',[TeamMemberCon::class, 'store']);
//Team Costing
Route::post('project/teamcost/{id}/{projectid}',[TeamCostCon::class, 'store']);
//Task Distribution
Route::post('project/taskdistribution/{id}/{projectid}',[TaskDistributionCon::class, 'store']);


//Project Estamiting
Route::get('project/simpleestamite/{id}/{projectid}',[SimpleEstimitingCon::class, 'index']);
//Estamiting 
Route::post('project/simpleestamite/{id}/{projectid}',[SimpleEstimitingCon::class, 'store']);



//Project Costing
Route::get('project/projectcost/{id}/{projectid}',[ProjectCostCon::class, 'index']);
//Costing 
Route::post('project/projectcost/{id}/{projectid}',[ProjectCostCon::class, 'store']);


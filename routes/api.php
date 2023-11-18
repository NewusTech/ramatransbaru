<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('import-user',[\App\Http\Controllers\ImportUser::class,'index'])->name('import-user');
Route::get('job',function(){
    $roles =  \App\Models\Role::where('role_group_id', request()->input('id'))->get();
    foreach($roles as $role){
         $html = "<optgroup label='$role->name'>";
    foreach($role->jobs as $job):
        $html .="<option value=`$job->id'>$job->job_title</option>";
    endforeach;
    $html .="</optgroup>";
    }
    return $html;
})->name('getjob');

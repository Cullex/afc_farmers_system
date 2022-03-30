<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyRecordController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\IndividualRecordController;
use App\Http\Controllers\SeasonStatsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\UserController;
use App\User;
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


Route::middleware('guest')->group(function (){
    Route::get('/login' , [ AuthController::class , 'loginView' ])->name('login');
    Route::get('/register', [AuthController::class, 'registerView']);
    Route::post('/registerUser', [AuthController::class, 'registerUser']);
    Route::post('/login' , [ AuthController::class , 'login']);
});
//add individual record
Route::post('/addIndividual', [IndividualRecordController::class, 'store']);
//add company record
Route::post('/addCompany', [CompanyRecordController::class, 'store']);
//display list of farmers to attach crop to
Route::get('/listFarmers', [IndividualRecordController::class, 'listFarmers']);


//attach maize to farmer
Route::post('/attachMaize/{model}', [CropController::class, 'store']);
//attach maize to wheat
Route::post('/attachWheat/{model}', [CropController::class, 'attachWheat']);
//attach Soyabeans to farmer
Route::post('/attachSoyaBeans/{model}', [CropController::class, 'attachSoyaBeans']);
//attach sunflower to farmer
Route::post('/attachSunFlower/{model}', [CropController::class, 'attachSunFlower']);
//attach white sorghum to farmer
Route::post('/attachWhiteSorghum/{model}', [CropController::class, 'attachWhiteSorghum']);
//attach sugar beans
Route::post('/attachSugarBeans/{model}', [CropController::class, 'attachSugarBeans']);



//attach Season
Route::post('/attachSeasonHectrage/{model}', [SeasonController::class, 'update']);
//individual records routes
//list all individual records
Route::get('/allIndividuals', [IndividualRecordController::class, 'index']);
//return selected individual record
Route::get('/viewIndividual/{id}', [IndividualRecordController::class, 'show']);
//update selected record
Route::post('/updateIndividual/{id}', [IndividualRecordController::class, 'edit']);
//return all individual records
Route::get('/getIndividualRecords', [IndividualRecordController::class, 'individualRecords']);
//download file excel format
Route::get('/downloadIndividualRecords', [IndividualRecordController::class, 'downloadIndividualRecords']);
//search for a record
Route::get('/searchIndividual', [IndividualRecordController::class, 'searchIndividual']);

//company record routes
//list all company records
Route::get('/allCompanies', [CompanyRecordController::class, 'index']);
//get selected company
Route::get('/viewCompany/{id}', [CompanyRecordController::class, 'show']);
//update selected company
Route::post('/updateCompany/{id}', [CompanyRecordController::class, 'edit']);
//return all company Records
Route::get('/getCompanyRecords', [CompanyRecordController::class, 'companyRecords']);
//download all companies excel format
Route::get('/downloadCompanyRecords', [CompanyRecordController::class, 'downloadCompanyRecords']);

//Season Controller
Route::post('/addSeason', [SeasonController::class, 'store']);

//statistics routes
//seasonStats maize
Route::get('/maizeTotalRecords', [SeasonStatsController::class, 'maizeTotalRecords']);
//season Maize Total
Route::get('/maizeSeasonTotal', [SeasonStatsController::class, 'maizeSeasonTotal']);
//season stats wheat
Route::get('/wheatTotalRecords', [SeasonStatsController::class, 'wheatTotalRecords']);
//season wheat total
Route::get('/wheatSeasonTotal', [SeasonStatsController::class, 'wheatSeasonTotal']);

//2021-2022 winter maize records
Route::get('/maizeWinter2122', [SeasonStatsController::class, 'maizeWinter2122']);
//2122Winter maize total
Route::get('/maizeWinterTotal2122', [SeasonStatsController::class, 'maizeWinterTotal2122']);
//winter 21/22 records wheat
Route::get('/wheatWinter2122', [SeasonStatsController::class, 'wheatWinter2122']);
//winter 21/22 wheat total
Route::get('/wheatWinterTotal2122', [SeasonStatsController::class, 'wheatWinterTotal2122']);
//sugar beans
Route::get('/sugarBeansWinter', [SeasonStatsController::class, 'sugarBeansWinter']);




//User Controller
//return all users
Route::get('/accessUsers', [AccessController::class, 'show']);
//return user to edit
Route::get('/getUserLevel/{id}', [AccessController::class, 'edit']);
//update user access level
Route::post('/updateUserLevel/{id}', [AccessController::class, 'update'])->name('updateUserLevel');

//generate and access system reports
Route::get('/systemReports', [ReportsController::class, 'index']);


Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');
Route::get('/password/reset' , [AuthController::class , 'getResetForm']);
Route::post('/password/reset' , [AuthController::class , 'reset']);
Route::post('/reset' , [AuthController::class , 'resetPassword']);

//return bulawayo province stats
Route::get('/getBulawayoStats', [StatsController::class, 'index']);
//calculate total for bulawayo province
Route::get('/getBulawayoTotal', [StatsController::class, 'show']);
//return Harare province stats
Route::get('/getHarareStats', [StatsController::class, 'harare']);
//calculate total for harare province
Route::get('/harareTotal', [StatsController::class, 'harareTotal']);
//return midlands province stats
Route::get('/getMidlandsStats', [StatsController::class, 'midlands']);
//calculate total for midlands province
Route::get('/midlandsTotal', [StatsController::class, 'midlandsTotal']);
//return manicaland stats
Route::get('/getManicalandStats', [StatsController::class, 'manicaland']);
//calculate manicaland total
Route::get('/manicalandTotal', [StatsController::class, 'manicalandTotal']);
//return Masvingo stats
Route::get('/getMasvingoStats', [StatsController::class, 'masvingo']);
//calculate masvingo total
Route::get('/masvingoTotal', [StatsController::class, 'masvingoTotal']);
//return matNorth Statistics
Route::get('/matNorthStats', [StatsController::class, 'matNorthStats']);
//calculate matNorthStats
Route::get('/matNorthTotal', [StatsController::class, 'matNorthTotal']);
//return matSouth stats
Route::get('/matSouthStats', [StatsController::class, 'matSouthStats']);
//return matSouth total
Route::get('/matSouthTotal', [StatsController::class, 'matSouthTotal']);
//mash central stats
Route::get('/mashCentralStats', [StatsController::class, 'mashCentralStats']);
//mashcentral total
Route::get('/mashCentralTotal', [StatsController::class, 'mashCentralTotal']);
//mashEast Stats
Route::get('/mashEastStats', [StatsController::class, 'mashEastStats']);
//calculate mash east total
Route::get('/mashEastTotal', [StatsController::class, 'mashEastTotal']);
//mashWest Stats
Route::get('/mashWestStats', [StatsController::class, 'mashWestStats']);
//calculate mashWest total
Route::get('/mashWestTotal', [StatsController::class, 'mashWestTotal']);


Route::middleware('auth')->group(function (){

    Route::post('/password' , [AuthController::class , 'password']);
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    /*
     * Users
     *
     */

    Route::prefix('users')->group(function (){
        Route::get('/' ,  [UserController::class , 'index'])->middleware('can:admin,'. User::class);
        Route::post('/create' ,  [UserController::class , 'store'])->middleware('can:admin,'. User::class);
        Route::get('/{model}/view' ,  [UserController::class , 'view'])->middleware('can:admin,'. User::class);
        Route::get('/{model}/activate' ,  [UserController::class , 'activate'])->middleware('can:admin,'. User::class);
        Route::get('/{model}/deactivate' ,  [UserController::class , 'deactivate'])->middleware('can:admin,'. User::class);
        Route::post('/{model}/update' ,  [UserController::class , 'update'])->middleware('can:admin,'. User::class);
    });

    Route::prefix('roles')->group(function (){
        Route::get('/' ,  [RoleController::class , 'index']);
        Route::post('/create' ,  [RoleController::class , 'store']);
        Route::get('/{model}/view' ,  [RoleController::class , 'view']);
        Route::post('/{model}/update' ,  [RoleController::class , 'update']);
    });

    Route::prefix('permissions')->group(function (){
        Route::get('/' ,  [PermissionController::class , 'index']);
    });

});




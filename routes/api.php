<?php

use App\Http\Controllers\AppointmentTimeController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentTypeController;
use App\Http\Controllers\AptTimeController;
use App\Http\Controllers\CaseTypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PracticeLcationController;
use App\Http\Controllers\PurposeOfVisitController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\FirmController;
use App\Http\Controllers\InsuranceController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// User Side Api
Route::middleware(['restrictByDomain'])->group(function () {

Route::get('appointment-type', [AppointmentTypeController::class, 'getAppointmentType']);
Route::get('appointment-time', [AptTimeController::class, 'getAppointmentTime']);
Route::get('case-type', [CaseTypeController::class, 'getCaseType']);
Route::get('category', [CategoryController::class, 'getCategory']);
Route::get('firm', [FirmController::class, 'getFirm']);
Route::get('insurance', [InsuranceController::class, 'getInsurance']);
Route::get('practice-location', [PracticeLcationController::class, 'getPracticeLocation']);
Route::get('purpose-of-visit', [PurposeOfVisitController::class, 'getPurposeOfVisit']);
Route::get('speciality', [SpecialityController::class, 'getSpeciality']);
Route::get('user-role', [UserRoleController::class, 'getUserRole']);

// Admin Side Api
// Grouped Middleware

Route::middleware(['nameValidation'])->group(function () {
    Route::post('appointment-type', [AppointmentTypeController::class, 'createAppointmentType']);
    Route::patch('appointment-type/{id}', [AppointmentTypeController::class, 'updateAppointmentType']);

    Route::post('appointment-time', [AptTimeController::class, 'createAppointmentTime']);
    Route::patch('appointment-time/{id}', [AptTimeController::class, 'updateAppointmentTime']);

    Route::post('case-type', [CaseTypeController::class, 'createCaseType']);
    Route::patch('case-type/{id}', [CaseTypeController::class, 'updateCaseType']);

    Route::post('category', [CategoryController::class, 'createCategory']);
    Route::patch('category/{id}', [CategoryController::class, 'updateCategory']);

    Route::post('firm', [FirmController::class, 'createFirm']);
    Route::patch('firm/{id}', [FirmController::class, 'updateFirm']);

    Route::post('insurance', [InsuranceController::class, 'createInsurance']);
    Route::patch('insurance/{id}', [InsuranceController::class, 'updateInsurance']);

    Route::post('practice-location', [PracticeLcationController::class, 'createPracticeLocation']);
    Route::patch('practice-location/{id}', [PracticeLcationController::class, 'updatePracticeLocation']);

    Route::post('purpose-of-visit', [PurposeOfVisitController::class, 'createPurposeOfVisit']);
    Route::patch('purpose-of-visit/{id}', [PurposeOfVisitController::class, 'updatePurposeOfVisit']);

    Route::post('speciality', [SpecialityController::class, 'createSpeciality']);
    Route::patch('speciality/{id}', [SpecialityController::class, 'updateSpeciality']);

    Route::post('user-role', [UserRoleController::class, 'createUserRole']);
    Route::patch('user-role/{id}', [UserRoleController::class, 'updateUserRole']);
});

Route::delete('appointment-type/{id}', [AppointmentTypeController::class, 'deleteAppointmentType']);
Route::delete('appointment-time/{id}', [AptTimeController::class, 'deleteAppointmentTime']);
Route::delete('case-type/{id}', [CaseTypeController::class, 'deleteCaseType']);
Route::delete('category/{id}', [CategoryController::class, 'deleteCategory']);
Route::delete('firm/{id}', [FirmController::class, 'deleteFirm']);
Route::delete('insurance/{id}', [InsuranceController::class, 'deleteInsurance']);
Route::delete('practice-location/{id}', [PracticeLcationController::class, 'deletePracticeLocation']);
Route::delete('purpose-of-visit/{id}', [PurposeOfVisitController::class, 'deletePurposeOfVisit']);
Route::delete('speciality/{id}', [SpecialityController::class, 'deleteSpeciality']);
Route::delete('user-role/{id}', [UserRoleController::class, 'deleteUserRole']);

// Trashed Case Type

Route::get('trashed-appointment-type', [AppointmentTypeController::class, 'trashedAppointmentType']);
Route::get('trashed-appointment-time', [AptTimeController::class, 'trashedAppointmentTime']);
Route::get('trashed-case-type', [CaseTypeController::class, 'trashedCaseType']);
Route::get('trashed-category', [CategoryController::class, 'trashedCategory']);
Route::get('trashed-firm', [FirmController::class, 'trashedFirm']);
Route::get('trashed-insurance', [InsuranceController::class, 'trashedInsurance']);
Route::get('trashed-practice-location', [PracticeLcationController::class, 'trashedPracticeLocation']);
Route::get('trashed-purpose-of-visit', [PurposeOfVisitController::class, 'trashedPurposeOfVisit']);
Route::get('trashed-speciality', [SpecialityController::class, 'trashedSpeciality']);
Route::get('trashed-user-role', [UserRoleController::class, 'trashedUserRole']);

// Restore Trashed Data

Route::patch('restore-appointment-type/{id}', [AppointmentTypeController::class, 'restoreAppointmentType']);
Route::patch('restore-appointment-time/{id}', [AptTimeController::class, 'restoreAppointmentTime']);
Route::patch('restore-case-type/{id}', [CaseTypeController::class, 'restoreCaseType']);
Route::patch('restore-category/{id}', [CategoryController::class, 'restoreCategory']);
Route::patch('restore-firm/{id}', [FirmController::class, 'restoreFirm']);
Route::patch('restore-insurance/{id}', [InsuranceController::class, 'restoreInsurance']);
Route::patch('restore-practice-location/{id}', [PracticeLcationController::class, 'restorePracticeLocation']);
Route::patch('restore-purpose-of-visit/{id}', [PurposeOfVisitController::class, 'restorePurposeOfVisit']);
Route::patch('restore-speciality/{id}', [SpecialityController::class, 'restoreSpeciality']);
Route::patch('restore-user-role/{id}', [UserRoleController::class, 'restoreUserRole']);

});
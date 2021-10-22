<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodPressureMonitorController;
use App\Http\Livewire\PatientComponent;
use App\Http\Livewire\PatientTable;
use App\Http\Livewire\BloodPressureReadingComponent;

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

Route::get('/', PatientTable::class)->name('index');
Route::get('/patients/add', PatientComponent::class)->name('patients.add');
Route::get('/bp-readings/add', BloodPressureReadingComponent::class)->name('bp-readings.add');

<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//==========Customer========
Route::get('/customer',[CustomerController::class,'customer'])->name("customer");

        //-----Thêm-----//
Route::get('/add_customer',[CustomerController::class,'add_customer'])->name("add_customer");

        //-----Xem-----//
Route::get('/view_customer/{id?}',[CustomerController::class,'view_customer'])->name("view_customer");

        //----Xóa-----//
Route::get('/delete_customer/{id?}',[CustomerController::class,'delete_customer'])->name("delete_customer");

        //-----Sửa-----//
Route::get('/update_customer/{id?}',[CustomerController::class,'update_customer'])->name("update_customer");

        //-----Lưu-----//
Route::post('/save_customer/{id?}',[CustomerController::class,'save_customer'])->name("save_customer");

//===========Employee===========
Route::get('/employee',function(){
    return view("employees/employee");
})->name("employee");


//Tour
Route::get('/tour',function(){
    return view("tours/tour");
})->name("tour");

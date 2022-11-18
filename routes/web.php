<?php

use App\Models\Dummy;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;




Route::get("/",[ProductController::class,'index'])->name("pr.index");

Route::get("/more",[ProductController::class,'allindex'])->name("all");

Route::get("/search",[ProductController::class,"search"])->name("search");

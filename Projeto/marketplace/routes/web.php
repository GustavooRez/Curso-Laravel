<?php

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

Route::get('/', function () {
    $helloWorld = 'Hello World';
    
    return view('welcome', compact('helloWorld' ));
});


Route::get('/model', function(){
    
//    $user = new \App\User();
//    $user->name = 'Usuário Teste';
//    $user->email = 'email@teste.com';
//  $user->password = bcrypt('1234');
//    $user->save();

   // return $user->save();

   // Atribuição em Massa

  /* $user = \App\Models\User::create([
       'name' => 'Nanderson',
       'email' => 'email@email.com',
       'password' => '1234543',
   ]);

   dd($user);*/

   return \App\Models\User::all();
});
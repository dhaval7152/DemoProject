<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function dispDemo(){
        // DB::insert('insert into users(name,email,password) values(?,?,?)',['dhaval','dp90440@gmail.com','dhaval@123']);
        // DB::insert('insert into users(name,email,password) values(?,?,?)',['sanjay','sanjay@gmail.com','sanjay@123']);
        // DB::insert('insert into users(name,email,password) values(?,?,?)',['uday','uday@gmail.com','uday@123']);
        // DB::insert('insert into users(name,email,password) values(?,?,?)',['utsav','utsav@gmail.com','utsav@123']);
        // DB::insert('insert into users(name,email,password) values(?,?,?)',['kabir','kabir@gmail.com','kabir@123']);
        // DB::update('update users set name=? where email=?',['abc','dhaval@gmail.com']);
        // DB::delete('delete from users where id = ?',[4]);
        // $user=DB::select('select * from users');

        // $user=new User();
        // $data=['name'=>'kohli',
        // 'email'=>'viratk@gmail.com',
        // 'password'=>Hash::make('yourpassword')];
        // User::create($data);

        
        // $user->name='sanjay';
        // $user->email='sanju23@gmail.com';
        // $user->password='udaybhan';
        // User::create($data);


        

        // User::where('id',1)->delete();
        // $user=User::all();
        // return$user;

        // $user


        $user=User::all();
        return $user;
    return view('demo');
    }
    
}

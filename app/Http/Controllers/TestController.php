<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // <-- data transfer  (compact method) -->
    // public function test()
    // {
    //     $name="Mg Mg";
    //     $age = 22;
    //     $career = "Developer";
    //     return view("test",compact('name','age','career'));
    // }


    // <-- data transfer  (with method) -->
    // public function test()
    // {
    //     $name = "Mg Kyaw";
    //     $age = 22;
    //     $career = "Developer";
    //     return view('test')
    //            ->with('name',$name)
    //            ->with('age',$age)
    //            ->with('career',$career) ;
    // }


    // <-- data transfer (array method form)
    // public function test()
    // {
    //     $data = [
    //         'name' => 'Kyaw Kyaw',
    //         'age' => 22,
    //         'career' => "Developer"
    //     ];
    //     return view('test',['data' =>$data]);
    // }


    // <-- how to send HTML tag to blade file -->
    // public function test()
    // {
    //     $htmlString = '<h1>Hello,this is paragraph</h1>';
    //     return view('test',compact('htmlString'));
    // }


    public function test()
    {
        $names = ['Mg Mg','Su Su','Zaw Zaw','Hlaing Hlaing'];
        $age = 25;
        return view('test',compact('age'));
    }
}

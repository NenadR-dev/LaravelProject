<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($id)
    {
        return "USER: ".$id;
    }

    public function ageChecker()
    {
        return "Super Secret Stuff";
    }
    
    public function testPost(Route $route)
    {
        return "post Test";
    }

    public function testPatch()
    {
        return "patch Test";
    }

    public function testPut()
    {
        return 'put Test';
    }

    public function testDelete()
    {
        return 'delete Test';   
    }

    public function bladeFirstname()
    {
        $name = "Nenad";
        return view('firstname',['name' => $name]);
    }

    public function showError()
    {
        return "Age restricted. No age found / age is < 18.";
    }
}

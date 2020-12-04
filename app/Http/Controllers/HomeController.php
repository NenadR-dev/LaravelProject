<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ageChecker()
    {
        return "Super Secret Stuff";
    }

    public function showError()
    {
        return "Age restricted. No age found / age is < 18.";
    }
}

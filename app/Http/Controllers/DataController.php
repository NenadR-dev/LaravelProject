<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function __construct() {
        $this->middleware('auth:api', ['except' => ['open']]);
    }

    public function open()
    {
        info('Open auth');
        return response()->json('this data is open for all users');
    }
    
    public function closed()
    {
        info('Closed auth');
        if(Auth::check())
            return response()->json('this data is for authenticated users only');
        else
            return 'Error. Not authenticated';
    }
}

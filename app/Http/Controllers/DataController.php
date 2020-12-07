<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Exceptions\CustomException;

class DataController extends Controller
{

    public function open()
    {
        return response()->json('this data is open for all users');
    }
    
    public function closed()
    {
        try
        {
            if(auth()->user() != null)
            {
                return response()->json('this data is only for authorized useres');
            }
            throw new CustomException('Nema JWT');
        } 
        catch(CustomException $e)
        {
            abort(403);
        }
    }
}

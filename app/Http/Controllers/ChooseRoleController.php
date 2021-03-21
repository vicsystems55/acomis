<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notification;

use Auth;

class ChooseRoleController extends Controller
{
    public function index()
    {
        if (Auth::user()->role =='admin') {
            return redirect('/admin');
        }

        elseif (Auth::user()->role =='user') {

            // Notification::create([
            //     'performed_by' => Auth::user()->id,
            //     'title' => 'User Authentication',
            //     'log' => 'Just Logged in from ' . request()->ip()
            // ]);
            return redirect('/user');
        }

        elseif (Auth::user()->role =='super_admin') {

            return redirect('/super_admin');
        }
        
        elseif (Auth::user()->role =='hcbo') {

            return redirect('/hcbo');
        }
        
        elseif (Auth::user()->role =='me') {

            return redirect('/me');
        }
        
        elseif (Auth::user()->role =='spo') {

            return redirect('/spo');
        }
        

        else{
            abort(403);
        }
    }
}

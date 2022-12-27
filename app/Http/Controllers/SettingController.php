<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() 
    {
        return view('layouts.settings');
    }

    public function delete(Request $request)
    {
        $user_id = $request->id;
        Contact::where('user_record_id', $user_id)->delete();
        User::where('id', $user_id)->delete();
        return view('layout.settings');
    }
}

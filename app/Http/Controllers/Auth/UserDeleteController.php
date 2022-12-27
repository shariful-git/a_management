<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserDeleteController extends Controller
{
    public function delete()
    {
        $auth_id = Auth::user()->id;
        Contact::where('user_record_id', $auth_id)->delete();
        User::where('id', $auth_id)->delete();
        return redirect('home');
    }
}

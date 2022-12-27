<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{
    public function index()
    {
        return view('settings');
    }

    public function contact()
    {
        return view('layouts.contact');
    }

    public function submit(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $fullName = $firstName . ' ' . $lastName;
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_email' => 'required',
            'city' => 'required',
            'division' => 'required',
            'post_code' => 'required',
            'permission' => 'required'
        ]);
        Contact::create($request->all());
        return redirect('contact')->with('success', '"' . $fullName . '"' . ' Thanks for contacting us!');
    }

    public function updateProfileInfo(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Full Name Cannot be Null!'
            ]
        );

        $userInfo = [
            'name' => $request->name,
            'bio' => $request->bio ?? '',
            'url' => $request->url ?? '',
            'location' => $request->location ?? ''
        ];

        $id = Auth::user()->id;
        User::where('id', $id)->update($userInfo);
        return redirect('settings')->with('success', 'Successfully Updated!');
    }
}

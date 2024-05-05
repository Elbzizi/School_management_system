<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('adminAuth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Admin::class],
            'cin' => ['required'],
        ]);

        $cin = $request->input('cin');

        $password = $this->generatePasswordWithCin($cin);

        $admin = Admin::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'cin' => $request->cin,
            'email' => $request->email,
            'password' => Hash::make($password),
            'role' => $request->role,
            'tel'=>$request->tel,
            'adress'=>$request->adress,
            'image'=>$request->image,
        ]);
        // dd($admin);

        event(new Registered($admin));

        Auth::login($admin);

        return redirect(route('admin.login'));
    }
    private function generatePasswordWithCin($cin)
    {
        // Generate two random numbers
        $randomNumbers = str_pad(rand(0, 99), 2, '0', STR_PAD_LEFT);

        // Concatenate the random numbers with the provided Cin
        $password = $cin;

        return $password;
    }
}

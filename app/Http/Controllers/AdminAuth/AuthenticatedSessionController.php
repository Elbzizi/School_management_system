<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('adminAuth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // dd($request->all());
        $request->authenticate('admin');

        $request->session()->regenerate();

        return redirect()->route('admin.home');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function authenticated(Request $request, $user)
    {
        // // This is where you can customize redirection based on user role
        // if ($user->role === 'directeur') {
        //     return redirect()->route('admin.home');
        // } elseif ($user->role === 'surveillent') {
        //     return redirect()->route('admin.home');
        // }
    //     if (Auth::guard('admin')->check()) {
    //         $adminName = Auth::guard('admin')->user()->name;
    //         $adminPrenom = Auth::guard('admin')->user()->prenom;
    //         session()->flash('adminName', $adminName);
    //         session()->flash('adminPrenom', $adminPrenom);
    //         dd(session('adminName'));

    //     }

    //     return redirect()->intended($this->redirectPath());

    //     // Redirect to a default route if the role doesn't match
    //     // return redirect(RouteServiceProvider::HOME);
    // }
    // protected function redirectPath()
    // {
    //     return '/admin/home'; // Example custom redirect path
    }
}

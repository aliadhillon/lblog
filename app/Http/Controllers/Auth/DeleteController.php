<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function destroy()
    {
        $user = Auth::user();
        Auth::logout();
        $user->delete();
        return redirect()->route('home')->with('msg', 'User Deleted: ' . $user->name );
    }
}

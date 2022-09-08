<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller{
	public function __invoke() {
        Auth::logout();
		return redirect()->route('admin.login');
    }
}
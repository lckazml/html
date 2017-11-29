<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Admins;

class LoginController extends Controller
{
    public function index(Request $request){

        if($user=$request->all()) {

            $admin=Admins::where('username', $request->username)->exists();

            if ($admin) {
                $admin = Admins::where('username', $request->username)->firstOrFail();
                if (Hash::check($user['password'], $admin->password)) {
                    session(['uid' => $admin->id]);
                    return redirect('/jump')->with(['message' => '登陆成功', 'url' => '/admin', 'jumpTime' => 2, 'status' => true]);
                } else {
                    return redirect('/jump')->with(['message' => '用户名或密码不正确', 'url' => '/admin/login', 'jumpTime' => 2, 'status' => false]);
                }
            }else{
                return redirect('/jump')->with(['message' => '用户名或密码不正确', 'url' => '/admin/login', 'jumpTime' => 2, 'status' => false]);
            }
        }
        return view('admin.login.login');
    }

}

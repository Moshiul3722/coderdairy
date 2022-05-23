<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function userProfile()
    {
        // return view('admin.user.profile');
        return view('admin.user.profile')->with([
            // 'userInfo'=>User::where('id',Auth::id())->first()
            'userInfo' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fullName' => ['required', 'string', 'max: 255'],
            'userName' => ['required', 'string', 'max: 50'],
        ]);

        $user = User::find(Auth::id());

        // Default thumbnail from database

        // dd($user->image['url']);
        $thumb = $user->image['url'];

        if (!empty($request->file('thumbnail'))) {
            Storage::delete('public/uploads/' . $thumb);
            $thumb = time() . '-' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->storeAs('public/uploads', $thumb);
        }

        // Update client data
        User::find(Auth::id())->update([
            'name'      => $request->fullName,
            'userName'  => $request->userName,
            'password'  => Hash::make($request->password),
            'image' => $thumb
        ]);

        return redirect()->route('problem.index')->with('success', 'Updated Successfully');
    }
}

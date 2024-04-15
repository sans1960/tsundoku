<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('edituser', 'updateuser');
    }




    public function allusers()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }
    public function edituser($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }
    public function updateuser(Request $request, User $user)
    {
        $request->validate([
            'nickname' => 'string|max:8',
            'novetats' => 'in:Si,No',
            'avatar' => File::types(['jpg', 'png', 'webp', 'jpeg'])

                ->max(1024),
            'biopic' => 'string',
        ]);
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);

                $filePath = Storage::disk('public')->put('images/avatars', request()->file('avatar'));
                $user->avatar = $filePath;
            } else {
                $filePath = Storage::disk('public')->put('images/avatars', request()->file('avatar'));
                $user->avatar = $filePath;
            }
        }
        $user->nickname = $request->nickname;
        $user->novetats = $request->novetats;
        $user->biopic = $request->biopic;
        $user->update();
        session()->flash('notif.success', 'Perfil actualitzat amb éxit!');
        return redirect()->route('home');
    }
    public function oneuser(User $user)
    {
        return view('admin.users.show', compact('user'));
    }
    public function ban(User $user)
    {
        return view('admin.users.ban', compact('user'));
    }
    public function unban(User $user)
    {
        $user->unban();
        session()->flash('notif.success', 'Usuari desbloquejat amb éxit!');
        return redirect()->route('admin.users.index');
    }
    public function updateban(User $user)
    {
        if (!empty(request('banned'))) {
            $user->ban([
                'comment' => request('comment'),
            ]);
        }
        session()->flash('notif.success', 'Usuari bloquejat amb éxit!');
        return redirect()->route('admin.users.index');
    }
    public function deleteuser($id)
    {
        $user = User::find($id);
        // if (Storage::url($user->avatar)) {
        //     Storage::disk('public')->delete($user->avatar);
        // }

        $delete = $user->delete();

        if ($delete) {
            session()->flash('notif.success', 'User deleted successfully!');
            return redirect()->route('admin.users.index');
        }
    }
}

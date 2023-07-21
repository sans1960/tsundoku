<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('admin');
 
       
    }




    public function allusers(){
        $users = User::paginate(10);
        return view('admin.users.index',compact('users'));
    }
    public function oneuser(User $user){
        return view('admin.users.show',compact('user'));
    }
    public function ban(User $user){
        return view('admin.users.ban',compact('user'));
    }
    public function unban(User $user){
        $user->unban();
               session()->flash('notif.success', 'Usuari desbloquejat amb éxit!');
        return redirect()->route('admin.users.index');
    }
      public function updateban(User $user){
        if(!empty(request('banned'))){
            $user->ban([
                'comment' => request('comment'),
            ]);
        }
            session()->flash('notif.success', 'Usuari bloquejat amb éxit!');
        return redirect()->route('admin.users.index');
    }
    public function allcomments(){
       $comments = Comment::paginate(5);
       return view('admin.comments.index',compact('comments'));

    }
    public function deletecomment(Comment $comment){
        $comment->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('admin.comments.index');
 
     }
}

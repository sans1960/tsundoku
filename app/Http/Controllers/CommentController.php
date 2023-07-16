<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Book;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Bookshop;
use App\Models\Post;
use App\Models\Medi;
use App\Models\Acte;

class CommentController extends Controller
{
        public function commentbook(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $book = Book::find($request->get('book_id'));
        $book->comments()->save($comment);

        return back();
    }
        public function replybook(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');
        
         $book = Book::find($request->get('book_id'));
        $book->comments()->save($reply);
         
        return back();
    }
        public function commentautor(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $autor = Autor::find($request->get('autor_id'));
        $autor->comments()->save($comment);

        return back();
    }
        public function replyautor(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');
        
        $autor = Autor::find($request->get('autor_id'));
        $autor->comments()->save($reply);
         
        return back();
    }
        public function commenteditorial(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $editorial = Editorial::find($request->get('editorial_id'));
        $editorial->comments()->save($comment);

        return back();
    }
        public function replyeditorial(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');
        
        $editorial = Editorial::find($request->get('editorial_id'));
        $editorial->comments()->save($reply);
         
        return back();
    }
       public function commentbookshop(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $bookshop = Bookshop::find($request->get('bookshop_id'));
        $bookshop->comments()->save($comment);

        return back();
    }
        public function replybookshop(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');
        
        $bookshop = Bookshop::find($request->get('bookshop_id'));
        $bookshop->comments()->save($reply);
         
        return back();
    }
        public function commentpost(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();
    }
        public function replypost(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');
        
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($reply);
         
        return back();
    }
           public function commentmedi(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $medi = Medi::find($request->get('medi_id'));
        $medi->comments()->save($comment);

        return back();
    }
        public function replymedi(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');
        
        $medi = Medi::find($request->get('medi_id'));
        $medi->comments()->save($reply);
         
        return back();
    }
         public function commentacte(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $acte = Acte::find($request->get('acte_id'));
        $acte->comments()->save($comment);

        return back();
    }
        public function replyacte(Request $request)
    {
        $reply = new Comment;
        $reply->body = $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');
        
        $acte = Acte::find($request->get('acte_id'));
        $acte->comments()->save($reply);
         
        return back();
    }
}

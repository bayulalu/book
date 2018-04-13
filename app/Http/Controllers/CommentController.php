<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request, $id)
    {
        $this->validate($request, [
        	'subject' => 'required|min:2'
        ]);

        $buku = Book::findOrFail($id);

        $comment = Comment::create([
        	'subject' => $request->subject,
        	'book_id' => $id,
        	'user_id' => Auth::user()->id
        ]); 

        return redirect('/buku/'.$buku->slug);
    }
}

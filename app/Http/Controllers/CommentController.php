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

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comment.editComment', compact('comment'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'comment' => 'required|min:2'
        ]);

        $comment = Comment::findOrFail($id);

        $comment->update([
            'subject' => $request->comment
        ]);
        return redirect('/buku/'.$comment->book->slug);
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect('/buku/'.$comment->book->slug);
    }
}

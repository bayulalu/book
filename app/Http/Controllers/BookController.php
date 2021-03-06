<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Tag;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $cari_b = urldecode($request->cari);
        if (!empty($cari_b)) {
            $books = Book::with('tags')->where('title','like','%'.$cari_b.'%')->paginate(8);
        }else{
            $books = Book::with('tags')->orderBy('id','desc')->paginate(8);
        }
            return view('konten.book',compact('books','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('konten.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'author' => 'required|min:3',
            'publisher' => 'required|min:3',
            'title' => 'required|min:3',
            'synposis' => 'required|min:10',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:1000'
        ]);

        if (empty($request->tags)){
           return redirect('buku/create')->withInput($request->input())->with('tag_error','Tag Tidak Boleh Kosong');
        }



         $slug = str_slug($request->title, '-');

         // upload gambar
         $fileName = time().'.png';
         
         $request->file('gambar')->storeAs('public/buku', $fileName);
         
          $book = Book::create([
          	'author' => $request->author,
          	'publisher' => $request->publisher,
          	'title' => $request->title,
          	'synopsis' => $request->synposis,
          	'slug' => $slug,
          	'img' => $fileName,
          	'user_id' => Auth::user()->id

          ]);

       $book->tags()->attach($request->tags);

          return redirect('/buku')->with('msg','Data Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $book = Book::with('comments.user')->where('slug', $slug)->first();
        
        return view('konten.singgle', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $book = Book::findOrFail($id);
        if ($book->isOwner()) { 
            $tags = Tag::all();
            return view('konten.update', compact('book','tags'));
         }else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'author' => 'required|min:3',
            'publisher' => 'required|min:3',
            'title' => 'required|min:3',
            'synposis' => 'required|min:10',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:1000'
        ]);

        $fileName = time().'.png';
        $request->file('gambar')->storeAs('public/buku', $fileName);
        
        $book = Book::findOrFail($id);      
              
            $book->update([
                'author' => $request->author,
                'publisher' => $request->publisher,
                'title' => $request->title,
                'synopsis' => $request->synposis,
                'img' => $fileName,

            ]);

            return redirect('/buku')->with('msg','Data Berhasil Diubah');
       


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);  
        $book->delete();
        return redirect('/buku')->with('msg','Data Berhasil Dihapus');
    }

    public function filter($tag)
    {
        $tags = Tag::all();
        $books = Book::with('tags')->whereHas('tags',function($query) use ($tag){
            $query->where('name', $tag);
        })->paginate(8);

        return view('konten.book', compact('books', 'tags'));
    }
}

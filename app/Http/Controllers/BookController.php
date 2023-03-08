<?php

namespace App\Http\Controllers;

use App\Exports\BooksExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) 
        {
        $books = Book::where('judul', 'LIKE', '%' .$request->search. '%')->paginate(4);
        }
        else
        {
        $books = Book::paginate(4);  
        }

        return view('admin/buku/index_buku', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.buku.create_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        if (!empty($request->file('gambar'))) {
            $book = $request->all();
            $book['gambar'] = $request->file('gambar')->store('book');

            Book::create($book);

            return redirect()->route('books.index');
        } else{
            $book = $request->all();
            Book::create($book);

            return redirect()->route('books.index');
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('admin/buku/edit_buku', compact('book'));
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
        $book = Book::findOrFail($id);
        $book->update($request->all());
        $book->save();

        return redirect()->route('books.index');
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
        return redirect()->route('books.index');
    }

    public function view()
    {
        $book = Book::all();
        $title = Book::all();
        return view('index', [
            'book' => $book,
            'title' => $title,
        ]);
    }
    public function detailView($id)
    {
        $books = Book::where('id', $id)->first();
        $title = Book::all();
        return view('detailBooks', [
            'books' => $books,
            'title' => $title
        ]);
    }
    public function excel()
    {
        return Excel::download(new BooksExport, 'DataBooks.xlsx');
    }

    public function pdf()
    {
        $books= Book::all();

        view()->share('books', $books);
        $pdf = PDF::loadview('PDF');
        return $pdf->download('DataBooks.pdf');
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $books = Book::latest()->paginate(5);
        return view('books.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**``
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
            
          
        ]);
    
         $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        // Book::create($request->all());
        Book::create($input);
        return redirect(route('book.index'))
                        ->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Book $book)
    // {
    //     return view('books.show',compact('book'));
    // } 
     

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Book $book)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'author' => 'required', 
    //     ]);
    
    //     $book->update($request->all());
    //     // return redirect(route('book.index'));
    //     // return response()->json(['link' => route('book.index')]);                    
    
    //     return redirect()->route('book.index')
    //                     ->with('success','Book updated successfully');
    // }
public function delete(Request $req ,$id)
{
    dd($req->all());
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $book = Book::find($id);
        $book->delete();

        return response()->json(['link' => route('book.index')]);
        return redirect(route('book.index'))->with('success',"book deleted successfully");
    }
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->author = $request->input('author');
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $book->update($input);
        return redirect()->route('book.index')->with('status','Student Updated Successfully');
    }
}

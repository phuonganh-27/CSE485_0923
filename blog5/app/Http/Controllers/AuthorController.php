<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::latest()->get();
        return view("authors.index", compact("authors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Sử dụng validate để kiểm tra dữ liệu và bảo vệ chống tấn công CSRF
    $validatedData = $request->validate([
        'name' => 'required|max:255',
    ]);

    // Sử dụng create() để tạo một bản ghi Author với dữ liệu đã được kiểm tra
    Author::create($validatedData);

    // Sử dụng session()->flash() để đặt thông báo thành công
    return redirect()->route("authors.index")->with("Message", "Author created successfully.");
}


    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        // return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
    $data = $request->except(['_token', '_method']);
    
    // Sử dụng phương thức update với dữ liệu được loại bỏ trường "_token" và "_method"
    $author->update($data);

    return redirect()->route("authors.index")->with("Message", "Author updated successfully.");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route("authors.index")->with("Message", "Author deleted successfully.");
    }
}

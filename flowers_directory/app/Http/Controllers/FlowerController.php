<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::latest()->get();
        return view("index", compact("flowers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Sử dụng validate để kiểm tra dữ liệu và bảo vệ chống tấn công CSRF
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "image" => "required",
            "origin" => "required",
        ]);

        // Sử dụng create() để tạo một bản ghi Author với dữ liệu đã được kiểm tra
        Flower::create($validatedData);

        // Sử dụng session()->flash() để đặt thông báo thành công
        return redirect()->route("flowers.index")->with("Message", "Flower created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        return view('show', compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        return view('edit', compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $data = $request->except('_token', '_method');

        // Sử dụng phương thức update với dữ liệu được loại bỏ trường "_token" và "_method"
        $flower->update($data);

        return redirect()->route("flowers.index")->with("Message", "Flower updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();

        return redirect()->route("flowers.index")->with("Message", "Flower deleted successfully.");
    }
}

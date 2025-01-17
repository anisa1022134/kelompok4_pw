<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("news.index");
        $news = News::all();
        return response()->json($news);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'publish_date' => 'required|date',
            'content' => 'required|string',
        ]);

        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
        }

        $news = News::create([
            'title' => $request->title,
            'publisher' => $request->publisher,
            'cover' => $coverPath,
            'publish_date' => $request->publish_date,
            'content' => $request->content,
        ]);

        return response()->json(['message' => 'News created successfully!', 'data' => $news]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $news = News::findOrFail($id);

        return response()->json($news);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

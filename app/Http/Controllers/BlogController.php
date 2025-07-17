<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Blogs';
        $categories = BlogCategory::orderby('id', 'desc')->where('status', 1)->get();
        $blogs = Blog::orderby('id', 'desc')->get();
        return view('pages.admin.news.index', compact('title', 'blogs', 'categories'));
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
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'short_desc' => 'required|string|max:250',
            'content' => 'required|string',
            'category_id' => 'required|exists:blog_categories,id',
        ]);

        // Upload Photo
        $photo = $request->file('photo');
        $photoName = time() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('photos'), $photoName);
        $photoPath = 'photos/' . $photoName;

        // Store Blog
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->photo = $photoPath;
        $blog->short_desc = $request->short_desc;
        $blog->content = $request->content;
        $blog->category_id = $request->category_id;
        $blog->save();

        return redirect()->back()->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'short_desc' => 'required|string|max:250',
            'content' => 'required|string',
            'category_id' => 'required|exists:blog_categories,id',
        ]);

        // Check if new photo uploaded
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($blog->photo && file_exists(public_path($blog->photo))) {
                unlink(public_path($blog->photo));
            }

            // Upload new photo
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('photos'), $photoName);
            $blog->photo = 'photos/' . $photoName;
        }

        // Update other fields
        $blog->title = $request->title;
        $blog->short_desc = $request->short_desc;
        $blog->content = $request->content;
        $blog->category_id = $request->category_id;

        $blog->save();

        return redirect()->back()->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete the image file if it exists
        if ($blog->photo && file_exists(public_path($blog->photo))) {
            unlink(public_path($blog->photo));
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }
}

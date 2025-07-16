<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $title = 'Blog Categories';
        $categories = BlogCategory::orderby('id', 'desc')->get();
        return view('pages.admin.news.news_category.index', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
        ]);

        $name = strip_tags($request->input('name'));

        if (BlogCategory::where('name', $name)->exists()) {
            return back()->with('error', 'Category already exists.');
        }

        BlogCategory::create([
            'name' => $name,
            'status' => 1,
        ]);

        return redirect()->route('news_categories.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request, BlogCategory $category)
    {
        $request->validate([
            'name' => 'required|max:50',
        ]);

        $name = strip_tags($request->input('name'));

        if (BlogCategory::where('name', $name)->where('id', '!=', $category->id)->exists()) {
            return back()->with('error', 'Category name already exists.');
        }

        $category->name = $name;
        $category->save();

        return redirect()->route('news_categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(BlogCategory $category)
    {
        $category->delete();

        return redirect()->route('news_categories.index')->with('success', 'Category deleted successfully.');
    }

    public function deactivate(BlogCategory $category)
    {
        $category->status = 0;
        $category->save();

        return redirect()->route('news_categories.index')->with('success', 'Category deactivated.');
    }

    public function activate(BlogCategory $category)
    {
        $category->status = 1;
        $category->save();

        return redirect()->route('news_categories.index')->with('success', 'Category activated.');
    }
}

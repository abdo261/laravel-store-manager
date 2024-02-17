<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categorys = Category::all();
        } catch (QueryException $exception) {
            $errorMessage = $exception->getMessage();
            // Pass the error message to the view
            return view('pages.category.index', ['errorMessage' => $errorMessage]);
        }
    
        return view('pages.category.index', compact('categorys'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:4',
            'color' => 'required',
        ] );
        // if ($validatedData->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validatedData)
        //         ->withInput();
        // }
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->color = $validatedData['color'];
        $category->save();
       return redirect()->route('category.index')->with('success', 'category created succesfely');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.category.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {$category = Category::findOrFail($id);
        return view('pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { $category = Category::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|min:4',
            'color' => 'required',
        ] );
        if ($category->name === $validatedData['name'] && $category->color === $validatedData['color']) {
            return redirect()->back()->with('error', 'No changes detected.');
        }
       
        $category->name = $validatedData['name'];
        $category->color = $validatedData['color'];
        $category->save();
       return redirect()->route('category.index')->with('success', 'category created succesfely');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success','category deleted succesfely');
       
    }
}

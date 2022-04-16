<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index')->with([
            'caterories'  => Category::orderBy('name', 'ASC')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'admin.category.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Category validation
        $this->categoryValidation($request);

        try {
            // Category store in database
            Category::create([
                'name'      =>  $request->name,
                'slug'      =>  Str::slug($request->name),
                'status'    =>  $request->status
            ]);

            // return response
            return redirect()->route('category.index')->with('success', 'Category Created');
        } catch (\Throwable $th) {
            return redirect()->route('category.index')->with('error', $th->getMessage());
        }

        // $category_name = Category::find($request->name);
        // $category_name = Category::where('name', "=", $request->name)->first();
        // dd($category_name);
        // if ($category_name) {
        //     return redirect()->route('category.edit')->with([
        //         'category' => Category::all(),
        //         'error' => 'This Category Already Exist'
        //     ]);
        // } else {

        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit')->with([
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Category validation
        $this->categoryValidation($request);

        try {
            //Update category
            $category->update([
                'name'      => $request->name,
                'slug'      => Str::slug($request->name),
                'status'    => $request->status
            ]);

            // return response
            return redirect()->route('category.index')->with('success', 'Category Updated');
        } catch (\Throwable $th) {
            //throw $th
            return redirect()->route('category.index')->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category Deleted');
    }

    public function categoryValidation(Request $request)
    {
        return $request->validate([
            'name'      => ['required', 'max:255', 'string'],
            'status'    => ['not_in:none', 'string']
        ]);
    }
}

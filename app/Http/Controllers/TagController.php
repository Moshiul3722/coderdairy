<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tag.index')->with([
            'tags'  => Tag::orderBy('name', 'ASC')->paginate(10)
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
            'admin.tag.create'
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
        $this->tagValidation($request);

        try {
            // Category store in database
            Tag::create([
                'name'      =>  $request->name,
                'slug'      =>  Str::slug($request->name)
            ]);

            // return response
            return redirect()->route('tag.index')->with('success', 'Tag Created');
        } catch (\Throwable $th) {
            return redirect()->route('Tag.index')->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit')->with([
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        // Category validation
        $this->tagValidation($request);

        try {
            //Update category
            $tag->update([
                'name'      => $request->name,
                'slug'      => Str::slug($request->name)
            ]);

            // return response
            return redirect()->route('tag.index')->with('success', 'tag Updated');
        } catch (\Throwable $th) {
            //throw $th
            return redirect()->route('tag.index')->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index')->with('success', 'Tag Deleted');
    }

    public function tagValidation(Request $request)
    {
        return $request->validate([
            'name'      => ['required', 'max:255', 'string'],
        ]);
    }
}

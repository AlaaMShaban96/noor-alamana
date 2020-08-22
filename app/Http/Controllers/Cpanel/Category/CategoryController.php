<?php

namespace App\Http\Controllers\Cpanel\Category;

use App\Category;
use App\CategoryTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('category.index',compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            
            'language_codes' => 'required', 
            
            'names' => 'required', 
            
            'descriptions' => 'required',
             
            'image' => 'required', 
           
            
        ]);
        
        $category = new Category();
        $category->admin_id = 1;
        $category->image="img/path";
        $category->save();

        foreach ($request->language_codes as $key => $code) {
            
            $translation=new CategoryTranslation();
            $translation->category_id=$category->id;
            $translation->name=$request->names[$key];
            $translation->description=$request->descriptions[$key];
            $translation->language_code=$code;
            $translation->save();
        }
       
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Category $category)
    {
        // dd($request->all());

        $request->validate([
            
            'language_codes' => 'required', 
            
            'names' => 'required', 
            
            'descriptions' => 'required', 
           
            
        ]);
       
        if ($request->img == null) {

            $category->image="img/path";
            $category->save();
            
        }
      
    

        foreach ($category->categoryTranslation as $key=> $translation) {
            
            $translation->category_id=$category->id;
            $translation->name=$request->names[$key];
            $translation->description=$request->descriptions[$key];
            
            $translation->save();
        }
       
       return redirect('some/url');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->categoryTranslation()->delete();
        $category->delete();
        return redirect('some/url');

    }
}

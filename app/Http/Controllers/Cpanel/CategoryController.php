<?php

namespace App\Http\Controllers\Cpanel;

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
        Category::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return 'Category.create';
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
       
       return response()->json(['Create'=>'done'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category->categoryTranslation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return $category;
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
         
        // $category = new Category();
       
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
       
       return response()->json(['Update'=>'done'], 200);

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
        return response()->json(['delete'=>'done'], 200);
    }
}

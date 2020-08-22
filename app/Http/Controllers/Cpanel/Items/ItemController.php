<?php

namespace App\Http\Controllers\Cpanel\Items;

use App\Item;
use App\Category;
use App\ItemTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all();
        return view('item.create', compact('categories'));
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
            
            'category_id' => 'required', 
            
            'language_codes' => 'required', 

            'names' => 'required', 

            'image' => 'required', 
            
            
        ]);
        $item = new Item();
        $item->admin_id = 1;
        $item->category_id = $request->category_id;
        $item->image=$this->uploadeImage( $request);
        $item->save();
dd('uplade img done');
        foreach ($request->language_codes as $key => $code) {
            
            $translation=new ItemTranslation();
            $translation->item_id=$item->id;
            $translation->name=$request->names[$key];
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
    public function show(Item $item)
    {
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            
            'category_id' => 'required', 
            
            'language_codes' => 'required', 

            'names' => 'required', 
            
            
        ]);

        if ($request->img == null) {

            $item->image=$this->uploadeImage( $request);
            $item->save();
        }
        $item->category_id = $request->category_id;
        

        foreach ($item->itemTranslation as $key=> $translation) {
            
            $translation->item_id=$item->id;
            $translation->name=$request->names[$key];
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
    public function destroy(Item $item)
    {
        $item->itemTranslation()->delete();
        unlink($item->img);
        $item->delete();
        return redirect('some/url');
    }
    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/items', $imageName, 'public');
    
        return $path;
    }
}

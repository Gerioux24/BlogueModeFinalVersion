<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{

    public function create()
    {
        $articles = Product::all();

        return view('pages.create', compact('articles'));
    }

    public function deletearticle($id){
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Article not found');
        }

        if ($product->product_image) {
            Storage::delete("public/product_images/{$product->product_image}");
        }

        $product->delete();
        return redirect('/create');


    }



    public function editerarticle($id){
        $product = Product::find($id);
      return view('pages.editerarticle')->with('product', $product);
    }

    public function updateproduct($id, Request $request)
    {
        $product = Product::find($id);

        $product->product_title = $request->input('product_title');
        $product->product_little_description = $request->input('product_little_description');
        $product->product_description = $request->input('product_description');

        if ($request->hasFile('product_image')) {
            $this->validate($request, [
                'product_image' => 'image|nullable'
            ]);
            Storage::delete('public/product_images/'.$product->product_image);

            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('product_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName."_".time().".".$ext;

            $path = $request->file('product_image')->storeAs("public/product_images", $fileNameToStore);

            $product->product_image = $fileNameToStore;
        }

        $product->save();

        return redirect('/create');
    }

    public function saveproduct(Request $request){
        $this->validate ($request, [
            'product_title' => 'required',
            'product_little_description' => 'required',
            'product_description' => 'required',
            'product_description' => 'required',
            'product_image' => 'image|nullable'
    ]);

                $fileNameWithExt = $request->file('product_image')->getClientOriginalName();

                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $ext = $request->file('product_image')->getClientOriginalExtension();
                $fileNameToStore = $fileName."_".time().".".$ext;

                $path = $request->file('product_image')->storeAs("public/product_images", $fileNameToStore);

                $product = new Product();
                $product->product_title = $request->input('product_title');
                $product->product_little_description = $request->input('product_little_description');
                $product->product_description = $request->input('product_description');
                $product->product_image = $fileNameToStore;

                $product->save();


                return redirect('/create');
    }



   

}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $contact = Contact::all();
        return view('admin.product.index', compact('product', 'contact'));
    }

    public function add()
    {
        $category = Category::all();
        $contact = Contact::all();
        return view('admin.product.add', compact('category', 'contact'));
    }

    public function insert(Request $request)
    {
        $product = new Product();
        $var = '';


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . rand(1, 1000) . '.' . $ext;

            //move the image file to uploads Directory
            $file->move('assets/uploads/product/', $filename);

            //Save the file to database
            $product->image = $filename;
        }

        if ($request->hasFile('images')) {
            // $image = new Image;
            // echo "<pre>";
            //echo 'hello';
            //print_r($request->file('images'));
            //sdie();
            // echo "<pre>";
            // print_r($request->file('images'));
            // die();
            $headache = $request->file('images');
            $a = '';
            foreach ($headache as $key => $imagefile) {
                $ext = $imagefile->getClientOriginalExtension();
                $filename = time() . rand(1, 1000) . '.' . $ext;
                $imagefile->move('assets/uploads/multiple', $filename);
                $a = $a . ',' . $filename;
            }
            $product->images = $a;
        }

        // save to other inputs to database
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->org_price = $request->input('org_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->rate = $request->input('rate');
        $product->save();
        return redirect('add-product')->with('status', "Product Added Successfully");
    }

    public function edit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        $contact = Contact::all();
        return view('admin.product.edit', compact('product', 'category', 'contact'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/product/' . $product->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            //move the image file to uploads Directory
            $file->move('assets/uploads/product/', $filename);

            //Save the file to database
            $product->image = $filename;

            // save to other inputs to database
        }
        $product->name = $request->input('name');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->org_price = $request->input('org_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->rate = $request->input('rate');
        $product->update();
        return redirect('/products')->with('status', "Product Updated Successfully");
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product->image) {
            $path = 'assets/uploads/product/' . $product->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('products')->with('status', "Product Deleted Successfully");
    }
}

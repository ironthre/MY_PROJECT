<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Contact;

class CatogoryController extends Controller
{
    public function index()
    {
        //Create variable for category model to fetch all data from db and pass it in view
        $category = Category::all();
        $contact = Contact::all();
        return view('admin.category.index', compact('category', 'contact'));
    }

    public function add()
    {
        $contact = Contact::all();
        return view('admin.category.add', compact('contact'));
    }

    public function insert(Request $request)
    {
        //new model
        $category = new Category();

        //check if file uploaded has an image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            //move the image file to uploads Directory
            $file->move('assets/uploads/category/', $filename);

            //Save the file to database
            $category->image = $filename;

            // save to other inputs to database
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->status = $request->input('status') == TRUE ? '1' : '0';
            $category->save();
            return redirect('/categories')->with('status', "Category Added Successfully");
        } else {
            return redirect('/dashboard');
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $contact = Contact::all();
        return view('admin.category.edit', compact('category', 'contact'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            //move the image file to uploads Directory
            $file->move('assets/uploads/category/', $filename);

            //Save the file to database
            $category->image = $filename;
            // save to other inputs to database
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->status = $request->input('status') == TRUE ? '1' : '0';
            $category->update();
            return redirect('/categories')->with('status', "Category Updated Successfully");
        }
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if ($category->image) {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories')->with('status', "Category Deleted Successfully");
    }


}

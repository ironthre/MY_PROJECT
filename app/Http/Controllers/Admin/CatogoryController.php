<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;



class CatogoryController extends Controller
{
    public function index()
    {
        //Create variable for category model to fetch all data from db and pass it in view
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function add()
    {
        return view('admin.category.add');
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
            $category->slug = $request->input('slug');
            $category->description = $request->input('description');
            $category->status = $request->input('status') == TRUE ? '1' : '0';
            $category->popular = $request->input('popular') == TRUE ? '1' : '0';
            $category->meta_title = $request->input('meta_title');
            $category->meta_keywords = $request->input('meta_keyword');
            $category->meta_descrip = $request->input('meta_desc');
            $category->save();
            return redirect('/categories')->with('status', "Category Added Successfully");
        } else {
            return redirect('/dashboard');
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
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
            $category->slug = $request->input('slug');
            $category->description = $request->input('description');
            $category->status = $request->input('status') == TRUE ? '1' : '0';
            $category->popular = $request->input('popular') == TRUE ? '1' : '0';
            $category->meta_title = $request->input('meta_title');
            $category->meta_keywords = $request->input('meta_keyword');
            $category->meta_descrip = $request->input('meta_desc');
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

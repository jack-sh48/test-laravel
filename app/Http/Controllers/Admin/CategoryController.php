<?php

namespace App\Http\Controllers\Admin;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Input;
use Validator;
use Redirect;
// use App\User;
// use App\Models\SellInvoice;
// use App\Models\Purchase;
// use App\Models\GoodsDetailsModel;
// use App\Models\ChildUser;
// use App\Models\TCPDF\TCPDF;
use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller
{
    public function new(){
    	return view('Admin.Category.new') -> with('value',"safa");
    } 

    public function create(){

    	  return View('Admin.Category.create');

    	// return view('Admin.Category.new') -> with('value',"safa");
    } 



    public function store(Request $request)
    {
         

        $validator = Validator::make(Input::all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/categories/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
          

            $category = new Category();
            $category->title =   Input::get('title');
            $category->parent_id = Input::get('parent_id');
            $category->image = "ffdasfsa";
            $category->type = Input::get('type');
            $category->workout_type = Input::get('workout_type');
            $category->status = Input::get('status');
            $category->created_datetime = new DateTime();
            $category->save();
            \Session::flash('message', 'Successfully created category!');
            return Redirect::to('999');
        }


        // Store the blog post...
    }
   
}
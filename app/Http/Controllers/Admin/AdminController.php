<?php

namespace App\Http\Controllers\Admin;

/*use Illuminate\Http\Request;*/
use App\Http\Controllers\Controller;
// use App\User;
// use App\Models\SellInvoice;
// use App\Models\Purchase;
// use App\Models\GoodsDetailsModel;
// use App\Models\ChildUser;
// use App\Models\TCPDF\TCPDF;

class AdminController extends Controller
{
    public function dashboard(){
    	// $users = User::where('email' ,'!=' , 'mygstkhata@gmail.com')->paginate(10);
     //    $userCount = User::where('email' ,'!=' , 'mygstkhata@gmail.com')->count();
    	// $sellCount = SellInvoice::count();
    	// $purchaseCount = Purchase::count();
    	// $goodsCount = GoodsDetailsModel::count();
    	// return view('userDetail.usersInfo')
    	// ->with('users',$users)
     //    ->with('userCount' , $userCount)
    	// ->with('sellCount',$sellCount)
    	// ->with('purchaseCount',$purchaseCount)
    	// ->with('goodsCount',$goodsCount);
    	return view('Admin.dashboard') -> with('value',"safa");
    } 
   
}
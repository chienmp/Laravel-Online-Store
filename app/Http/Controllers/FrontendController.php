<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

use function JmesPath\search;

class FrontendController extends Controller
{
    //
    public function getHome(){
        $data['featured'] = Product::where('prod_featured',1)->orderByDesc('prod_id')->take(8)->get();
        $data['new'] = Product::orderByDesc('prod_id')->take(8)->get();
        return view('frontend.home',$data);
    }
    public function getDetail($id){
        $data['item'] = Product::find($id);
        $data['comment'] = Comment::where('com_product',$id)->get();
        return view('frontend.details',$data);
    }
    public function getCategory($id){
        $data['items'] = Product::where('prod_cate',$id)->orderByDesc('prod_id')->paginate(2);
        $data['cateName'] = Category::find($id);
        return view('frontend.category',$data);
        
    }
    public function postComment(Request $request , $id){
        $comment = new Comment;
        $comment->com_name= $request->name;
        $comment->com_email= $request->email;
        $comment->com_content= $request->content;
        $comment->com_product = $id;
        $comment->save();
        return back();
    }
    public function getSearch(Request $request){
        $result = $request->result;
        $data['keyword'] = $result;
        $result = str_replace(' ', '%', $result);
        $data['items'] = Product::where('prod_name', 'like', '%' . $result . '%')
        ->paginate(2);
        return view('frontend.search',$data);
    }
}

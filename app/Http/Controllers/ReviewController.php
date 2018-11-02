<?php

namespace App\Http\Controllers;
use App\Product;
use App\Review;
use Auth;
use App\Like;
use App\Dislike;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['index','show']]);
        $this->middleware('regular', ['only'=>['edit','destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($prod_id)
    {
        //return "all reviews for product ".$prod_id;
        $reviews = Product::find($prod_id)->reviews;
        $product = Product::find($prod_id);
        //$reviews = Review::paginate(3);
        return view('reviews.index')->with('reviews', $reviews)->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($prod_id)
    {
         $product = Product::find($prod_id);
         return view('reviews.create')->with('product',$product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'review' => 'required|max:255',
            'rating' => 'required|numeric|min:1|max:5'
        ]);
        $review = new Review;
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->product_id = $request->input('product_id');
        $review->user_id = Auth::user()->id;
        $review->save();
        return redirect("/product/".$request->input('product_id')."/review");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($prod_id,$rev_id)
    {
        //return "Product id is $prod_id and review id is $rev_id";
        $product = Product::find($prod_id);
        $review = Review::find($rev_id);
        $likeCtr = Like::where($prod_id,$rev_id)->count();
        $dislikeCtr = Dislike::where($prod_id,$rev_id)->count();
        return view('reviews.show')->with('review', $review)->with('product',$product)->with('likeCtr',$likeCtr)->with('dislikeCtr',$dislikeCtr);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($prod_id,$rev_id)
    {
        $product = Product::find($prod_id);
        $review = Review::find($rev_id);
        return view('reviews.edit')->with('product', $product)->with('review', $review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $prod_id,$rev_id)
    {
        $this->validate($request, [
            'review' => 'required|max:255',
            'rating' => 'required|numeric|min:1|max:5'
        ]);
        $product = Product::find($prod_id);
        $review = Review::find($rev_id);
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->user_id = Auth::user()->id;
        $review->save();
        return redirect("/product/".$prod_id."/review/".$rev_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($prod_id,$rev_id)
    {
        $review = Review::find($rev_id);
        $review->delete();
        return redirect("/product");
    }
    
    public function like($prod_id,$rev_id)
    {
        $loggedin_user = Auth::user()->id;
        $like_user = Like::where(['user_id'=> $loggedin_user,'product_id'=>$prod_id,'review_id'=>$rev_id])->first();
        if(empty($like_user->user_id)){
            $user_id = Auth::user()->id;
            $like = new Like;
            $like->user_id = $user_id;
            $like->product_id = $prod_id;
            $like->review_id = $rev_id;
            $like->save();
            return redirect("/product/".$prod_id."/review/".$rev_id);
        }
        else{
            return redirect("/product/".$prod_id."/review/".$rev_id);
        }
    }
    public function dislike($prod_id,$rev_id)
    {
        $loggedin_user = Auth::user()->id;
        $dislike_user = Dislike::where(['user_id'=> $loggedin_user,'product_id'=>$prod_id,'review_id'=>$rev_id])->first();
        if(empty($dislike_user->user_id)){
            $user_id = Auth::user()->id;
            $dislike = new Dislike;
            $dislike->user_id = $user_id;
            $dislike->product_id = $prod_id;
            $dislike->review_id = $rev_id;
            $dislike->save();
            return redirect("/product/".$prod_id."/review/".$rev_id);
        }
        else{
            return redirect("/product/".$prod_id."/review/".$rev_id);
        }
    }
}

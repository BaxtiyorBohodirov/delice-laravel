<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contacts;
use App\Models\ContactsForm;
use App\Models\News;
use App\Models\OurMission;
use App\Models\ProductDetails;
use App\Models\ProductImages;
use App\Models\Products;
use App\Models\ProductsCatalog;
use App\Models\Reviews;
use DateTime;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use TCG\Voyager\Http\Controllers\ContentTypes\Timestamp;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Voyager;

class SiteController extends Controller
{
    public function index()
    {
        $ourmission=OurMission::orderBy('order')->where('status',1)->first();
        $productscatalogs=ProductsCatalog::orderBy('order')->where('status',1)->get();
        $products=Products::orderBy('order')->where(['status'=>1,'onGallery'=>0])->get();
        $gallery=Products::orderBy('order')->where(['status'=>1,'onGallery'=>1])->get();
        $news=News::orderBy('order')->where('status',1)->limit(3)->get();
        $reviews=Reviews::orderBy('order')->where('status',1)->get();
        return view('index',
        [
            'ourmission'=>$ourmission,
            'catalogs'=>$productscatalogs,
            'products'=>$products,
            'gallery'=>$gallery,
            'news'=>$news,
            'reviews'=>$reviews
        ]);
    }
    public function aboutUs()
    {
        $about=About::orderBy('order')->where('status',1)->first();
        $ourmission=OurMission::orderBy('order')->where('status',1)->first();
        $reviews=Reviews::orderBy('order')->where('status',1)->get();
        return view('about-us',['about'=>$about,'reviews'=>$reviews,'reviews'=>$reviews,'ourmission'=>$ourmission]);
    }
    public function card()
    {
        $product_id=(request('product_id'))?request()->product_id:1;
        $product=Products::find($product_id);
        $producImages=$product->productImages();
        $productDetails=$product->productDetails();
        $sameProducts=Products::orderBy('order')->where(['status'=>1,'onGallery'=>0,'catalog_id'=>$product->catalog_id])->get();
        return view('card',[
            'product'=>$product,
            'productImages'=>$producImages,
            'productDetails'=>$productDetails,
            'sameProducts'=>$sameProducts
        ]);
    }
    public function catalog()
    {
        $catalogs=ProductsCatalog::orderBy('order')->where(['status'=>1])->get();
        $products=Products::orderBy('order')->where(['status'=>1,'onGallery'=>0])->get();
        return view('catalog',['catalogs'=>$catalogs,'products'=>$products]);
    }
    public function contacts()
    {
        $contact=Contacts::orderBy('order')->where(['status'=>1])->first();
        return view('contacts',['contact'=>$contact]);
    } 
    public function gallery()
    {
        $product_id=(request('product_id'))?request()->product_id:1;
        $product=Products::find($product_id);
        $productImages=ProductImages::orderBy('order')->where(['status'=>1,'forPage'=>0,'product_id'=>$product_id])->get();
        return view('gallery',['product'=>$product,'productImages'=>$productImages]);
    }
    public function news()
    {
        $news=News::orderBy('order')->where(['status'=>1])->get();
        return view('news',['news'=>$news]);
    }
    public function newsIn($id)
    {
        $news=News::find($id);
        return view('news-in',['news'=>$news]);
    }
    public function searchResults()
    {
        return view('search-results');
    }
    public function getProducts($id){
    //    $model=ProductsCatalog::find($id)->hasMany(Products::class);
        if($id==1){
            $model=Products::orderBy('order')->where(['status'=>1,'onGallery'=>0])->get();
        }
        else{
            $model=Products::orderBy('order')->where(['status'=>1,'onGallery'=>0,'catalog_id'=>$id])->get();
        }
            foreach($model as $item)
            {
                $item->image=Voyager::image($item->image);
            }
        return ['model'=>$model];
    }
    public function getProductDetail($id)
    {
        $detail=ProductDetails::find($id);
        $detail->content_uz=$detail->{"content_".App::getlocale()};
        return ['detail'=>$detail];
    }
    public function setlang($lang)
    {
        App::setlocale($lang);
        session()->put('locale',$lang);
        return redirect()->back();
    }    
    public function ourMission()
    {
        $ourmission=OurMission::orderBy('order')->where('status',1)->first();
        return view('index',['ourmission'=>$ourmission]);
    }
    public function contactForm()
    {
        $request=Request::all();

        $new=new ContactsForm();
        $new->name=$request['name'];
        $new->phone=$request['phone'];
        $new->email=$request['email'];
        $new->content=$request['content'];
        $new->save();
        return Response::json($request);
    }
}

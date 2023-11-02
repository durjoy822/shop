<?php

namespace  App\Services\Admin;

use App\Models\Imagegallery;
use App\Models\Product;
use App\Traits\FileDelete;
use App\Traits\FileUpload;

class ProductService
{
    use FileUpload;
    use FileDelete;

   public function store($request){
//    dd($request->all());
    $product=new Product();
    $product->category_id=$request->category_id;
    $product->sub_category_id=$request->sub_category_id;
    $product->brand_id=$request->brand_id;
    $product->unit_id=$request->unit_id;
    $product->short_description=$request->short_description;
    $product->long_description=$request->long_description;
    $product->name=$request->name;
    $product->code=$request->code;
    $product->regular_price=$request->regular_price;
    $product->selling_price=$request->selling_price;
    $product->discount=$request->discount;
    $product->stock_amount=$request->stock_amount;
    $product->status=$request->status;
    if($request->image){
        $product->image=$this->uploadImage($request->image,'product');
    }
    $product->save();
    if($product->id){
        $images=$request->file('multiple_image');
        foreach($images as $image){
            $multipleImage=new Imagegallery();
            $multipleImage->product_id=$product->id;
            $multipleImage->multiple_image=$this->uploadMultipleImage($image,'image-gallery');
            $multipleImage->save();
        }

    }
   }



   public function update($request, $id)
   {
       $product = Product::find($id);
       $product->category_id = $request->category_id;
       $product->sub_category_id = $request->sub_category_id;
       $product->brand_id = $request->brand_id;
       $product->unit_id = $request->unit_id;
       $product->short_description = $request->short_description;
       $product->long_description = $request->long_description;
       $product->name = $request->name;
       $product->code = $request->code;
       $product->regular_price = $request->regular_price;
       $product->selling_price = $request->selling_price;
       $product->discount = $request->discount;
       $product->stock_amount = $request->stock_amount;
       $product->status = $request->status;

       if ($request->file('image')) {
           if (file_exists($product->image)) {
               unlink($product->image);
           }
           $product->image = $this->uploadImage($request->file('image'), 'product');
       }

       $product->save();

       if ($product->id) {
           // Delete existing multiple images associated with the product
           $multipleImages = Imagegallery::where('product_id', $id)->get();

           foreach ($multipleImages as $multipleImage) {
               if (file_exists($multipleImage->multiple_image)) {
                   unlink($multipleImage->multiple_image);
               }
               $multipleImage->delete();
           }

           if ($request->hasFile('multiple_image')) {
               $images = $request->file('multiple_image');
               foreach ($images as $image) {
                   $imageGallery = new Imagegallery();
                   $imageGallery->product_id = $id;
                   $imageGallery->multiple_image = $this->uploadMultipleImage($image, 'image-gallery');
                   $imageGallery->save();
               }
           }
       }
   }
}
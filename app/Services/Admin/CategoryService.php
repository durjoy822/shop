<?php

namespace App\Services\Admin;

use App\Models\Category;
use App\Traits\FileDelete;
use App\Traits\FileUpload;

class CategoryService

{
    use FileUpload;
    use FileDelete;

 public function store($request){

    $category=new Category();
    $category->name=$request->name;
    if($request->image)
    $category->image=$this->uploadImage($request->image,'category');
    $category->save();

 }
 public function update($request,$id){

    $category=Category::find($id);
    $category->name=$request->name;
    if($request->file('image')){
        if(file_exists($category->image)){
            unlink($category->image);
        }
        $category->image=$this->uploadImage($request->image,'category');
    }
    $category->save();

 }
 public function delete($id){

    $category=Category::find($id);
    $category->image=$this->deleteImage($category->image);
    $category->delete();

 }


}

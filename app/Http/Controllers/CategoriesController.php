<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        
    }
    //hiển thị danh sách
    public function index(){
        return view('clients/categories/list');
    }
    //lấy ra 1 chuyên mục theo id(Phương thức get)
    public function getCategory($id){
        return view('clients/categories/edit');
    }
    //Sửa 1 chuyên mục (Phương thức POST)
    public function updateCategory($id){
        return 'Sửa chuyên mục'.$id;
    }

    public function addCategory(){
        return view('clients/categories/add');
    }
    
    public function handleAddCategory(){
        return redirect(route('categories.add'));
        //return 'Submid thêm chuyên mục';
    }
    //Xóa chuyên mục
    public function deleteCategory($id){
        return 'Submit Xóa chuyên mục'.$id;
    }
}

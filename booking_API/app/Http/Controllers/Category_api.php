<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Category_api extends Controller
{
    public function index($id=null)
    {
    $category=new Category();
    return $id?$category->where('C_id',$id)->get():$category->all();
    }
}

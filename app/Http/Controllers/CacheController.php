<?php

namespace App\Http\Controllers;

use App\Cache as AppCache;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    function Index(){
    //    Cache::set("Name","Syed Tahmeer Hussain Naqvi"); 
    //    echo Cache::get("Age","Tahmeer");
       Cache::remember('Email',1,function(){
           return Student::all("Email");
       });
       echo Cache::get('Name');
    //    $data = AppCache::pull("Name");
    //    $data->key = "Age";
    //    $data->value = "25" ;
    //    $data->expiration = 1;
    //    $data->save();
//    echo $data;

      echo Cache::store('Name')->get("Syed Tahmeer Hussain Naqvi");
    }
}

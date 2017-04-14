<?php

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;

class DrinkModel {
    
    public static function getSearchedDrinks($categoryId, $searchName){
        if($categoryId == 0){
            return DB::table('drinks')
                ->join('categories','drinks.category_id','=','categories.id')
                ->select('drinks.id','drinks.name','drinks.category_id','categories.name as category_name',
                        'drinks.image1','drinks.image2','drinks.image3','drinks.image4',
                        'drinks.price')
                ->where([
                    ['drinks.name','like','%'.$searchName.'%']
                ])->paginate(10);
        }else{
            return DB::table('drinks')
                ->join('categories','drinks.category_id','=','categories.id')
                ->select('drinks.id','drinks.name','drinks.category_id','categories.name',
                        'drinks.image1','drinks.image2','drinks.image3','drinks.image4',
                        'drinks.price')
                ->where([
                    ['drinks.category_id','=',$categoryId],
                    ['drinks.name','like','%'.$searchName.'%']
                ])->paginate(10);
        }
        
    }
    
    public static function getDrinkByName($name){
        return DB::table('drinks')->select('id')
                ->where('name','=','$name')->get();
    }
    
    public static function addNewDrink($data){
        return DB::table('drinks')
                ->insert([
                    'name' => $data->txtDrinkName,
                    'category_id' => $data->cobCategory,
                    'image1' => $data->image1,
                    'image2' => $data->image2,
                    'image3' => $data->image3,
                    'image4' => $data->image4,
                    'price' => $data->txtPrice,
                    'description' => $data->txtDescription
                ]);
    }
}


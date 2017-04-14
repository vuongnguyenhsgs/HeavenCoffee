<?php
    
    namespace App\Http\Controllers\Process;
    
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Models\CategoryModel;
    use App\Http\Models\DrinkModel;

    class DrinkController extends Controller{
        
        protected function getAll(Request $request){
            $categoryId = $request->cobCategory;
            if($categoryId == ''){
                $categoryId = 0;
            }
            $searchedName = $request->searchedName;
            $categories = CategoryModel::getAllCategory();
            $drinks = DrinkModel::getSearchedDrinks($categoryId, $searchedName);
            return view('Process.drinks', compact(['categories', 'drinks', 'categoryId', 'searchedName']));
        }
        
        protected function getAddingNewDrink(){
            $categories = CategoryModel::getAllCategory();
            return view('Process.add-new-drink', compact(['categories']));
        }
        
        public function isExistedDrink(Request $request){
            $drinks = DrinkModel::getDrinkByName($request->txtDrinkName);
            if(count($drinks) > 0){
                return 'true';
            }else{
                return 'false';
            }
        }
        
        public function postAddingNewDrink(Request $request){
            $data = $request->except('_token');
            return $data;
            if(DrinkModel::addNewDrink($data)){
                return 'true';
            }else{
                return 'false';
            }
        }
    }
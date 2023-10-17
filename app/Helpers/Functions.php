<?php 
use App\Models\Category;
function getAll(){
   $category = new Category;
   return $category->getAllCategory();
}
?>
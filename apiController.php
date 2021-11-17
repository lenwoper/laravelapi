<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;

class apiController extends Controller
{
    //
    function list()
    {
  
      return api::all();
    }
  
    //  psot api here 
    function add(Request $req)
    {
  
      $divice = new Api;
      $divice->name = $req->name;
      $divice->price = $req->price;
      $divice->rating = $req->rating;
      $divice->desone = $req->desone;
      $divice->destwo = $req->deswto;
      $save = $divice->save();
  
      if ($save) {
        return ["result" => "thank that is bubmittted "];
      } else {
        return ["result" => "something is wrong please  "];
      }
    }
    // it is updating 
    function update(Request $req)
    {
  
      $divice = Api::find($req->id);
      $divice->name = $req->name;
      $divice->price = $req->price;
      $divice->rating = $req->rating;
      $divice->desone = $req->desone;
      $divice->destwo = $req->deswto;
      $save = $divice->save();
  
      if ($save) {
  
        return ["result" => "Thanks your data has been updated  "];
    
      } else {
  
        return ["result" => "Oops something is going  wrong "];
     
      }
    }
  
  
    
    //  that is delete this api 's data 
  
  
  
    function finished($id)
    {
      $deveice = Api::find($id);
      $result =  $deveice->delete();
     
  
      if ($result) {
     
        return ["result" => " Thanks your this data has been deleted "];
    
        
      } else {
  
  
        return ["result" => " semethins is going wrong  "];
     
      }
    }


      // search api in this hello abhijee 

  function searching($name){

    $result = Api::where("name","like","%".$name."%")->get();
    
    return $result;
    
      }
    
}

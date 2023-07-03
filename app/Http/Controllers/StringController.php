<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StringManipulator;

class StringController extends Controller
{
    public function form(){
        return view('string.form');
    }

    public function result(){

        //Capture all data from the request
        $str = request()->get('str');
        $opr = request()->get('opr');
        $result = null;

        // Process the Requested operation (Business logic)
    if ($opr == "CountLetter") {
        $result = strlen($str);
    } else if ($opr == "CountWord") {
        $result = str_word_count($str);
    } else if ($opr == "StringReverse") {
        $result = strrev($str);
    }

       // Save this Data in Database
        $vms = new StringManipulator(); // Create Model Object
        $vms->str = $str;
        $vms->opr = $opr;
        $vms->result = $result;
        $vms->save();
        
        return view('string.result')
        ->with('result',$result)
        ->with('str',$str)
        ->with('opr',$opr);

    }

    // this method is used for listing the logs from DB Table
    public function logs(){
        $vms = new StringManipulator();
        $data = $vms->all();

      //return view ('string.logs')->with('data',$data);

    }

    public function queries() {

        $vms = new StringManipulator();
        $filter = request()->get('filter');   
        $value = request()->get('value');  
 

        if($filter == 'all') {
            $data = $vms->all();
            echo"All records  " .$data->count()."<br>";
        
            foreach($data as $d){
                echo "id - ".$d->id. " <> ";
                echo "str - ".$d->str. " <<>> ";
                echo "opr - ".$d->opr. " <<>> ";
                echo "created_at - ".$d->created_at. "<br>"; 

            }
        }

        if($filter == 'first') {
            echo "First records";
         $d = $vms->first(); 
            echo "id - ".$d->id. "<br>";
            echo "str - ".$d->str. "<br>";
            echo "opr - ".$d->opr. "<br>";
            echo "created_at - ".$d->created_at. "<br>"; 

        }

        if($filter == 'last') {
            echo "Last records <br> ";
          $d = $vms->orderby('id','desc')->first(); 
            echo "id - ".$d->id. "<br>";
            echo "str - ".$d->str. "<br>";
            echo "opr - ".$d->opr. "<br>";
            echo "created_at - ".$d->created_at. "<br>"; 

        }

        if($filter == 'top3') {
            $data = $vms->limit(3)->get();
            echo"TOP 3 records  " .$data->count()."<br>";

                foreach($data as $d){
                    echo "id - ".$d->id. " <<>> ";
                    echo "str - ".$d->str. " <<>> ";
                    echo "opr - ".$d->opr. " <<>> ";
                    echo "created_at - ".$d->created_at. "<br>"; 
                }
        }               

        if($filter == 'reverse'){
         $data = $vms->orderby ('id', 'desc')->get();
            echo"Reverse order records  " .$data->count()."<br>";
    
                foreach($data as $d){
                    echo "id - ".$d->id. " <<>> ";
                    echo "str - ".$d->str. " <<>> ";
                    echo "opr - ".$d->opr. " <<>> ";
                    echo "created_at - ".$d->created_at. "<br>"; 

                }
        }

    }

}

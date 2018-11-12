<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function selectId($id){

    	$users = DB::table('table')
    					->select('*')
    					->where('id' , $id)
    					->get(); 

    	return view('query', ['users' => $users]); 
    }

    public function select(){

    	$users = DB::table('table')
    					->get(); 

    	return view('query', ['users' => $users]); 
    }

    public function update($id, $name){
    	$users = DB::table('table')
    					->where('id', $id)
    					->update(['name' => $name]);
    	echo "Se ha actualizado correctamente"; 
    	return view('query', ['users' => $users]); 
    }

    public function insert(){
    	$users = DB::table('table')->insert(

    		['name' => 'yaiza', 'age' => 23, 'exists' => true, 'date' => '2019-10-10', 'password' => 'ahjdfsgwqlñhwuiiw']
    	);
    	echo "Se ha insertado correctamente";
    }

    public function delete($id){
    	$users = DB::table('table')
    					->where('id', $id)
    					->delete();
    	echo "Usuario eliminado correctamente";
    }
}

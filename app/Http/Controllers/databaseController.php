<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB; 
use App\Table; 

class databaseController extends BaseController {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function selectId($id){

        $table = table::find($id); 

        return view('query', ['table' => $table]); 
    }

    public function select(){

        $table = Table::all();

        return view('query', ['table' => $table]); 
    }

    public function update($id, $name){
        $table = Table::find($id); 
        $table->name = $name;
        $table->save(); 

        echo "Se ha actualizado correctamente";
    }

    public function insert(){

        $table = new Table; 

    $table = DB::table('table')->insert(

        ['name' => 'yaiza', 'age' => 23, 'exists' => true, 'date' => '2019-10-10', 'password' => 'ahjdfsgwqlñhwuiiw']
    );

        echo "Se ha insertado correctamente";
    }

    public function delete($id){
        $table = Table::find($id);
        $table->delete();
        echo "Usuario eliminado correctamente";
    }

    
}

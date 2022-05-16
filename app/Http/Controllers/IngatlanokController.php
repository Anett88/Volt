<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingatlan as Ingatlanok;


class IngatlanokController extends Controller
{
public function index(){
    $tabla = Ingatlanok::join('kategorias', 'kategorias.kategoria_id','ingatlans.kategoria_id')
		->select('*');
    	return response()->json($tabla->get());
}
public function store(Request $request)
    		{
				Ingatlanok::create($request->all());

    		}

            public function update(Request $request, $id)
    		{
        		$task=Ingatlanok::find($id);
        		$task->update($request->all());

    		}


public function destroy($taskId)
    		{
        		$task=Ingatlanok::find($taskId);
        		$task->delete();
    		}

}

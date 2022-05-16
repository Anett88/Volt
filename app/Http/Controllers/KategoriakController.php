<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoria as Kategoriak;
class KategoriakController extends Controller
{
    public function index(){
        $tasks=Kategoriak::all();
        return response()->json($tasks);
    }
    public function store(Request $request)
                {
                    $task=new Kategoriak();
    
                    $task->title=$request->title;
    
                    $task->save();
                }
    
                public function update(Request $request, $taskId)
                {
                    $task=Kategoriak::find($taskId);
                    
                    $task->title=$request->title;
           
                    $task->save();
                }
    
    
    public function destroy($taskId)
                {
                    $task=Kategoriak::find($taskId);
                    $task->delete();
                }
    
}

<?php

namespace App\Http\Controllers;
use App\Helpers\Tokeet;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function index()
    {
        $this->fetchTasksFromApi();
        $data=Tasks::get();
        return view("dashboard.index",compact('data'));
    }
    public function fetchTasksFromApi(){
        $data=Tokeet::getAllTasks()['data'];
        // Tasks::insert($data2)
     
        foreach($data as $item){
            $task=new Tasks();
            $task->account=$item['account'];
            $task->archived=$item['archived'];
            $task->created=  Carbon::createFromTimestamp($item['created'])->toDateTimeString();
            $task->due=  Carbon::createFromTimestamp($item['due'])->toDateTimeString();
            $task->list=$item['list'];
            $task->name=$item['name'];
            $task->pkey=$item['pkey'];
        
            $task->save();
        }
        return true;
    
    }
    public function edit(Tasks $task)
    {

        return response()->json(compact('task'));
    }

    public function update(Tasks $task, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
           
        ]);
        $task = $task->update([
            'name' => $request->name,
        ]);
        $message = "Edited successfully";
        return response()->json(compact('message'));

    }

    public function delete($id)
    {
        $item = Tasks::findOrFail($id);
        $item->delete();
        $message = 'Deleted successfully';

        return response()->json(compact('message'));
    }
}

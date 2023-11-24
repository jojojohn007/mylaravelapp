<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{

    
    //
public function addNewTaskAction(Request $request)
    {
        dd();
        // dump($request->input('_method'));
        $pattern = '/\d+/';
        $replacement = '';

        $normalizedArray = [];
        $taskdetails = [];
        $userid = auth()->id();

        $incomingData = $request->input();

        foreach ($incomingData as $key => $value) {
            $stringWithoutNumbers = preg_replace($pattern, $replacement, $key);

            if ($stringWithoutNumbers == 'title' || $stringWithoutNumbers == 'description') {
                array_push($normalizedArray, [$stringWithoutNumbers => $value]);
            };
        }
        $taskdetails['user_id'] = $userid;
        for ($i = 0; $i < count($normalizedArray); $i++) {
            $title = $normalizedArray[$i]['title'];
            $description = $normalizedArray[$i + 1]['description'];
            $taskdetails['title'] = $title;
            $taskdetails['description'] = $description;
            $taskdetails['status'] = 'todo';
            dump($i);
            dump($taskdetails);
//SAVING METHOD 1 ;
            // $table = DB::table('tasks');
            // $table->insert([
            //     'title'=>$title,
            //     'description'=>$description,
            //     'status'=>'todo',
            //     'user_id'=>$userid
            // ]);

            //SAVING METHOD 2
            $task = new Task();
            $task->title = $title;
            $task->description = $description ;
            $task->status= 'todo';
            $task->user_id = $userid;
            $task->save();

            //SAVING METHOD 3 
            
            // Task::create($taskdetails);
            $i += 1;
        }

    }

    public function editScreen(Task $task)
    {

        return view('/task/taskedit',['task'=>$task]);
    }
    public function updateTask(Task $task, Request $request){
        $task = $task;
        $incomingData= $request->input();
        $result = $task->update($incomingData);
        dump($result);

    }

    public function deleteTask(Task $task){

        $task->delete();


    }
}

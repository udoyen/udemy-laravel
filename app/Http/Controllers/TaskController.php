<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    public function getIndex()
    {
        $tasks = array('Meeting with boss', 'Meeting with wife', 'Bathing the kids');
        $output = '<h1>Tasks</h1>';
        $output .= '<ul>';
        foreach ($tasks as $key => $task) {
            # code...
            $output .= '<li><a href="/tasks/show/'.$key.'">'.$task.'</a></li>';
        }

        $output .= '</ul>';

        return $output;
    }

    public function getShow($id)
    {
        $tasks = array('Meeting with boss', 'Meeting with wife', 'Bathing the kids');

        return $tasks[$id];
    }


    public function getWelcome($text = null){
    // $text = "Hello World!";
      return view('welcome', array('text' => $text));
    }
}

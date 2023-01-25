<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show(){
        $deployments = Project::find(1);

        dump($deployments->deployments); // коллекция c деплойментами 

        foreach($deployments->deployments as $deployment){ 
            dump($deployment['commit_hash']); 
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $with = ['deployments'];
    
    public function deployments(){
        return $this->hasManyThrough(
            Deployment::class,
            Environment::class,
            'project_id', // Внешний ключ в таблице `environments` ...
            'environment_id', // Внешний ключ в таблице `deployments` ...
            'id', // Локальный ключ в таблице `projects` ...
            'id' // Локальный ключ в таблице `environments` ...
        );
    }
}

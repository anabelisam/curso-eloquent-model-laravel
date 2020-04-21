<?php
namespace App\Http\Controllers;
use App\Project;

class ProjectController
{
  public function getAllProjects() {
    $projects = Project::all();
    return $projects;
  }

  public function insertProject() {
    $project = new Project;
    $project->city_id = 1;
    $project->company_id = 1;
    $project->user_id = 1;
    $project->name = 'Nombre del proyecto';
    $project->execution_date = '2020-04-30';
    $project->is_active = 1;
    $project->save();

    return "Guardado";
  }

  public function updateProject() {
    $project = Project::find(1);
    $project->name = 'Proyecto de tecnología';
    $project->save();

    return "Actualizado";
  }
}
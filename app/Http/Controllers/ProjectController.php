<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController
{
  public function getAllProjects() {
    $projects = Project::all();
    return $projects;
  }
}
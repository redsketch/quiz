<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index()
    {
		$companies = Company::with(['projects', 'projects.tasks'])->take(3)->get();
		
		foreach ($companies as $company) {
			echo "{$company->title} has following projects<br>";
			
			foreach ($company->projects as $project) {
				echo "Project {$project->title} {$project->tasks->count()} <br>";
			}
		}
	}
}

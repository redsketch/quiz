<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    
    public function projects()
    {
		return $this->hasMany(\App\Project::class);
	}
}

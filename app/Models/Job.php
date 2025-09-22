<?php

Namespace App\Models; 
use Illuminate\Support\Arr;

class Job {
    public function all(): array {
        return [
            ['Id' => 1
                  ,'Title' => 'Full Stack Developer'
                  ,'salary' => '120k'
                   ]
                  ,[
                    'Id' => 2
                  ,'Title' => 'Backend Developer'
                  ,'salary' => '100k'
                   ]
                  ,['Id' => 3
                  ,'Title' => 'Frontend Developer'
                  ,'salary' => '90k']
                ];
    }
    public function find($id) {
        $Job =  Arr::first(static::all(), fn($job) => $job['Id'] == $id);
        if (!$Job) {
            abort(404);
        }
        return $Job;
    }
}
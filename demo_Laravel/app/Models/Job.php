<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job{
    public static function all():array
    {
        return [
            [
                'id'=>1,
                'title'=>'director',
                'salary'=>'50000$'
            ],
            [
                'id'=>2,
                'title'=>'Programmer',
                'salary'=>'10000$',
            ],
            [
                'id'=>3,
                'title'=>'teacher',
                'salary'=>'40000$'
            ]
            ];
    }

    public static function find(int $id): array
    {
        $job= \Illuminate\Support\Arr::first(static::all(), fn($job)=>$job['id']==$id);
        
        if(! $job){
            abort(404);
        }

        return $job;
    }
}

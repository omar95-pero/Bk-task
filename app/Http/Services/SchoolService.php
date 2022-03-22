<?php

namespace App\Http\Services;

use App\Models\School;

class SchoolService
{
public function save($data){
    return School::create($data);
}
public function update($data,$id){
    $school =  School::findOrFail($id);
    return $school->update($data);
}
}

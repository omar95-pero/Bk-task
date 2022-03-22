<?php

namespace App\Http\Services;

use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentService
{
    public function save($data)
    {
        return Student::create($data);
    }
    public function update($data, $id)
    {
        $student =  Student::findOrFail($id);
        return $student->update($data);
    }
}

<?php

namespace App\Observers;

use App\Models\Student;

class StudentObserver
{
    public function creating(Student $student)
    {
        $order = Student::where('school_id', $student->school_id)->orderBy('order', 'DESC')->first();
        $student->order = $order->school_id + 2;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Services\StudentService;
use App\Traits\ApiResponseTrait;

class StudentApiController extends Controller
{
    use ApiResponseTrait;
    protected $service;

    public function __construct(StudentService $service)
    {
        return $this->service = $service;
    }
    public function store(StoreStudentRequest $request)
    {
        $data =  $this->service->save($request->all());
        return $this->sendSuccess('success', $data);
    }
    public function update(UpdateStudentRequest $request, $id)
    {
        $data = $this->service->update($request->all(), $id);
        return $this->sendSuccess('success', $data);
    }
    public function destroy($id)
    {
        $this->service->delete($id);
        return $this->sendSuccess('success', null);
    }
}

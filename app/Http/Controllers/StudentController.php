<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Services\StudentService;
use App\Models\School;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class StudentController extends Controller
{
    protected $service;
    public function __construct(StudentService $service)
    {
        return $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $students = Student::orderBy('school_id', 'ASC')
                ->orderBy('order', 'ASC')->get();
            return DataTables::of($students)
                ->addColumn('check_all', function ($student) {
                    return "<input type='checkbox' class=' check_all form-check-input '  name='delete_all' id='" . $student->id . "'>";
                })
                ->addColumn('actions', function ($student) {


                    $editAction = "<a href='javascript:;' data-toggle='modal' data-target='#exampleModal' class='btn light btn-info mx-1 editButton'  data-bs-toggle='tooltip' data-bs-original-title='Edit product' id='" . $student->id . "'>
                          Edit
                       </a>";

                    $deleteAction = "  <button  class='btn light btn-danger mx-1 delete'   id='" . $student->id . "'>Delete</button>";

                    $action = $editAction . " " . $deleteAction;
                    return $action;
                })
                ->addColumn('name', function ($student) {
                    return $student->name;
                })->rawColumns(['name', 'actions', 'check_all'])->make(true);
        }

        $schools = School::all();
        return view('students.index', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        if ($request->ajax()) {
            $this->service->save($request->all());
            return response()->json('success', 200);
        }
    }
    public function edit(Request $request, $id)
    {

        if ($request->ajax()) {

            $schools = School::all();
            $student = Student::findOrFail($id);
            $view = view('students.parts.edit_form')->with(["schools" => $schools, 'student' => $student])->render();
            return response()->json(array('success' => true, 'html' => $view));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, $id)
    {
        if ($request->ajax()) {
            $this->service->update($request->all(), $id);
            return response()->json('success', 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where("id", $id)->delete();
        return response()->json(["success" => true]);
    }
}

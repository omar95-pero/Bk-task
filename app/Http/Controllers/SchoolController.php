<?php

namespace App\Http\Controllers;

use App\Http\Services\SchoolService;
use App\Models\School;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SchoolController extends Controller
{
    protected $service;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(SchoolService $service)
    {
        return $this->service = $service;
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {

            $schools = School::all();
            return DataTables::of($schools)
                ->addColumn('check_all', function ($school) {
                    return "<input type='checkbox' class=' check_all form-check-input '  name='delete_all' id='" . $school->id . "'>";
                })
                ->addColumn('actions', function ($school) {


                    $editAction = "<a href='javascript:;' data-toggle='modal' data-target='#exampleModal' class='btn light btn-info mx-1 editButton'  data-bs-toggle='tooltip' data-bs-original-title='Edit product' id='" . $school->id . "'>
                          Edit
                       </a>";

                    $deleteAction = "  <button  class='btn light btn-danger mx-1 delete'   id='" . $school->id . "'>Delete</button>";

                    $action = $editAction . " " . $deleteAction;
                    return $action;
                })
                ->addColumn('name', function ($school) {
                    return $school->name;
                })->rawColumns(['name', 'actions', 'check_all'])->make(true);
        }


        return view('schools.index');
    }


    public function store(StoreSchoolRequest $request)
    {
        if ($request->ajax()) {
            $this->service->save($request->all());
            return response()->json('success', 200);
        }
    }


    public function edit(Request $request, $id)
    {

        if ($request->ajax()) {

            $school = School::findOrFail($id);
            $view = view('schools.parts.edit_form')->with(["school" => $school])->render();
            return response()->json(array('success' => true, 'html' => $view));
        }
    }


    public function update(UpdateSchoolRequest $request, $id)
    {
        if ($request->ajax()) {
            $this->service->update($request->all(), $id);
            return response()->json('success', 200);
        }
    }


    public function destroy($id)
    {
        School::where("id", $id)->delete();
        return response()->json(["success" => true]);
    }
}

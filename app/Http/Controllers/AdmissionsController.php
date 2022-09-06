<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmissionsRequest;
use App\Http\Requests\UpdateAdmissionsRequest;
use App\Repositories\AdmissionsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admissions;
use Illuminate\Http\Request;
use Flash;
use Response;

use DB;
use App\Models\Classes;
use App\Models\Batches;
use App\Models\Rolls;

class AdmissionsController extends AppBaseController
{
    /** @var  AdmissionsRepository */
    private $admissionsRepository;

    public function __construct(AdmissionsRepository $admissionsRepo)
    {
        $this->admissionsRepository = $admissionsRepo;
    }

    /**
     * Display a listing of the Admissions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classes = Classes::all();
        $batches = Batches::all();
        $student_id = Admissions::max('roll_no');
        $roll_id = Rolls::max('roll_id');
        $admissions = DB::table('admissions')
            ->join('classes', 'classes.class_id', 'admissions.class_id')
            ->join('batches', 'batches.batch_id', 'admissions.batch_id')
            ->get();

        // $admissions = $this->admissionsRepository->all();

        return view('admissions.index', compact('classes', 'batches', 'student_id', 'roll_id'))
            ->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new Admissions.
     *
     * @return Response
     */
    public function create()
    {
        return view('admissions.create');
    }

    /**
     * Store a newly created Admissions in storage.
     *
     * @param CreateAdmissionsRequest $request
     *
     * @return Response
     */
    public function store(CreateAdmissionsRequest $request)
    {
        $input = $request->all();

        $image = $request->file('image');
        $image_name = md5(rand(1111, 9999)) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/students'), $image_name);

        $admissions = new Admissions;
        $admissions->roll_no = $request->roll_no;
        $admissions->first_name = $request->first_name;
        $admissions->last_name = $request->last_name;
        $admissions->father_name = $request->father_name;
        $admissions->father_phone = $request->father_phone;
        $admissions->mother_name = $request->mother_name;
        $admissions->gender = $request->gender;
        $admissions->dob = $request->dob;
        $admissions->email = $request->email;
        $admissions->phone = $request->phone;
        $admissions->address = $request->address;
        $admissions->current_address = $request->current_address;
        $admissions->nationality = $request->nationality;
        $admissions->status = $request->status;
        $admissions->date_registered = date('Y-m-d');
        $admissions->user_id = $request->user_id;
        $admissions->class_id = $request->class_id;
        $admissions->batch_id = $request->batch_id;
        $admissions->image = $image_name;
        if ($admissions->save()) {
            // $rolls = new Rolls;
            // $rolls->student_id = $request->student_id;
            // $rolls->username = $request->username;
            // $rolls->password = $request->password;
            // $rolls->save();

            // $student_id = $request->student_id;
            $student_id = Admissions::max('roll_no');
            $username = $request->username;
            $password = $request->password;

            Rolls::insert(['student_id' => $student_id, 'username' => $username, 'password' => $password]);
        }


        // $admissions = $this->admissionsRepository->create($input);

        Flash::success('Admissions saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified Admissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admissions', $admissions);
    }

    /**
     * Show the form for editing the specified Admissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classes = Classes::all();
        $batches = Batches::all();
        $student_id = Admissions::max('roll_no');
        $roll_id = Rolls::max('roll_id');

        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit', compact('classes', 'batches', 'student_id', 'roll_id'))->with('admissions', $admissions);
    }

    /**
     * Update the specified Admissions in storage.
     *
     * @param int $id
     * @param UpdateAdmissionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdmissionsRequest $request)
    {
        $image = $request->file('image');
        $image_name = md5(rand(1111, 9999)) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/students'), $image_name);

        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        $admissions = $this->admissionsRepository->update($request->all(), $id);

        $admissions = array(
            'image' => $image_name,
        );
        $this->admissionsRepository->update($admissions, $id);

        Flash::success('Admissions updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified Admissions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admissions = $this->admissionsRepository->find($id);

        if (empty($admissions)) {
            Flash::error('Admissions not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionsRepository->delete($id);

        Flash::success('Admissions deleted successfully.');

        return redirect(route('admissions.index'));
    }
}

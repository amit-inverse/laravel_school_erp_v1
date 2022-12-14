<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassAssigningsRequest;
use App\Http\Requests\UpdateClassAssigningsRequest;
use App\Repositories\ClassAssigningsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use DB;

class ClassAssigningsController extends AppBaseController
{
    /** @var  ClassAssigningsRepository */
    private $classAssigningsRepository;

    public function __construct(ClassAssigningsRepository $classAssigningsRepo)
    {
        $this->classAssigningsRepository = $classAssigningsRepo;
    }

    /**
     * Display a listing of the ClassAssignings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classSchedulings = DB::table('class_schedulings')
            ->select('courses.*', 'levels.*', 'shifts.*', 'classrooms.*', 'batches.*', 'days.*', 'times.*', 'teachers.*', 'class_schedulings.*')
            ->join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
            ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
            ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')
            ->join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
            ->join('days', 'days.day_id', '=', 'class_schedulings.day_id')
            ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
            ->join('teachers', 'teachers.teacher_id', '=', 'class_schedulings.teacher_id')
            ->get();

        $classAssignings = $this->classAssigningsRepository->all();

        return view('class_assignings.index', compact('classSchedulings'))
            ->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for creating a new ClassAssignings.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_assignings.create');
    }

    /**
     * Store a newly created ClassAssignings in storage.
     *
     * @param CreateClassAssigningsRequest $request
     *
     * @return Response
     */
    public function store(CreateClassAssigningsRequest $request)
    {
        $input = $request->all();

        $classAssignings = $this->classAssigningsRepository->create($input);

        Flash::success('Class Assignings saved successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Display the specified ClassAssignings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.show')->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for editing the specified ClassAssignings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.edit')->with('classAssignings', $classAssignings);
    }

    /**
     * Update the specified ClassAssignings in storage.
     *
     * @param int $id
     * @param UpdateClassAssigningsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassAssigningsRequest $request)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        $classAssignings = $this->classAssigningsRepository->update($request->all(), $id);

        Flash::success('Class Assignings updated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Remove the specified ClassAssignings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classAssignings = $this->classAssigningsRepository->find($id);

        if (empty($classAssignings)) {
            Flash::error('Class Assignings not found');

            return redirect(route('classAssignings.index'));
        }

        $this->classAssigningsRepository->delete($id);

        Flash::success('Class Assignings deleted successfully.');

        return redirect(route('classAssignings.index'));
    }
}

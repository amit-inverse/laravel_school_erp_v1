<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingsRequest;
use App\Http\Requests\UpdateClassSchedulingsRequest;
use App\Repositories\ClassSchedulingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use DB;
use App\Models\Courses;
use App\Models\Levels;
use App\Models\Shifts;
use App\Models\Classrooms;
use App\Models\Batches;
use App\Models\ClassSchedulings;
use App\Models\Days;
use App\Models\Times;
use App\Models\Teachers;

class ClassSchedulingsController extends AppBaseController
{
    /** @var  ClassSchedulingsRepository */
    private $classSchedulingsRepository;

    public function __construct(ClassSchedulingsRepository $classSchedulingsRepo)
    {
        $this->classSchedulingsRepository = $classSchedulingsRepo;
    }

    /**
     * Display a listing of the ClassSchedulings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courses = Courses::all();
        $levels = Levels::all();
        $shifts = Shifts::all();
        $classrooms = Classrooms::all();
        $batches = Batches::all();
        $days = Days::all();
        $times = Times::all();
        $teachers = Teachers::all();

        // dd($courses);
        // die;

        // $classSchedulings = $this->classSchedulingsRepository->all();
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

        // dd($classSchedulings);
        // die;

        return view('class_schedulings.index', compact('courses', 'levels', 'shifts', 'classrooms', 'batches', 'days', 'times', 'teachers'))
            ->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for creating a new ClassSchedulings.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassSchedulings in storage.
     *
     * @param CreateClassSchedulingsRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingsRequest $request)
    {
        $input = $request->all();

        $classSchedulings = $this->classSchedulingsRepository->create($input);

        Flash::success('Class Schedulings saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassSchedulings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for editing the specified ClassSchedulings.
     *
     * @param int $id
     *
     * @return Response
     */
    // public function edit($id)
    // {
    //     $classSchedulings = $this->classSchedulingsRepository->find($id);

    //     if (empty($classSchedulings)) {
    //         Flash::error('Class Schedulings not found');

    //         return redirect(route('classSchedulings.index'));
    //     }

    //     return view('class_schedulings.edit')->with('classSchedulings', $classSchedulings);
    // }
    public function edit(Request $request)
    {
        if ($request->ajax()) {
            return response(ClassSchedulings::find($request->id));
        }
    }

    /**
     * Update the specified ClassSchedulings in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingsRequest $request
     *
     * @return Response
     */
    // public function update($id, UpdateClassSchedulingsRequest $request)
    // {
    //     $classSchedulings = $this->classSchedulingsRepository->find($id);

    //     if (empty($classSchedulings)) {
    //         Flash::error('Class Schedulings not found');

    //         return redirect(route('classSchedulings.index'));
    //     }

    //     $classSchedulings = $this->classSchedulingsRepository->update($request->all(), $id);

    //     Flash::success('Class Schedulings updated successfully.');

    //     return redirect(route('classSchedulings.index'));
    // }
    public function update(Request $request)
    {
        $classSchedulings = array(
            'course_id' => $request->course_id,
            'level_id' => $request->level_id,
            'shift_id' => $request->shift_id,
            'classroom_id' => $request->classroom_id,
            'batch_id' => $request->batch_id,
            'day_id' => $request->day_id,
            'time_id' => $request->time_id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'teacher_id' => $request->teacher_id,
            'status' => $request->status,
        );

        // echo '<pre>';
        // print_r($classSchedulings);
        // die;

        ClassSchedulings::FindOrFail($request->class_schedule_id)->update($classSchedulings);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');
        }

        Flash::success('Class Schedulings updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified ClassSchedulings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSchedulings = $this->classSchedulingsRepository->find($id);

        if (empty($classSchedulings)) {
            Flash::error('Class Schedulings not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingsRepository->delete($id);

        Flash::success('Class Schedulings deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }

    public function DynamicLevel(Request $request)
    {
        $course_id = $request->get('course_id');

        // $levels = Levels::where('course_id', $course_id)->get();
        $levels = Levels::where('course_id', '=', $course_id)->get();

        return Response::json($levels);
        // return json_encode($levels);
    }
}

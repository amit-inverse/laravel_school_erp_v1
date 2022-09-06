<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeesStructuresRequest;
use App\Http\Requests\UpdateFeesStructuresRequest;
use App\Repositories\FeesStructuresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use DB;
use App\Models\Courses;
use App\Models\Levels;

class FeesStructuresController extends AppBaseController
{
    /** @var  FeesStructuresRepository */
    private $feesStructuresRepository;

    public function __construct(FeesStructuresRepository $feesStructuresRepo)
    {
        $this->feesStructuresRepository = $feesStructuresRepo;
    }

    /**
     * Display a listing of the FeesStructures.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courses = Courses::all();
        $levels = Levels::all();

        $feesStructures = DB::table('fees_structures')
            ->select('fees_structures.*', 'courses.*', 'levels.*')
            ->join('courses', 'courses.course_id', '=', 'fees_structures.course_id')
            ->join('levels', 'levels.level_id', '=', 'fees_structures.level_id')
            ->get();

        // $feesStructures = $this->feesStructuresRepository->all();

        return view('fees_structures.index', compact('courses', 'levels'))
            ->with('feesStructures', $feesStructures);
    }

    /**
     * Show the form for creating a new FeesStructures.
     *
     * @return Response
     */
    public function create()
    {
        return view('fees_structures.create');
    }

    /**
     * Store a newly created FeesStructures in storage.
     *
     * @param CreateFeesStructuresRequest $request
     *
     * @return Response
     */
    public function store(CreateFeesStructuresRequest $request)
    {
        $input = $request->all();

        $feesStructures = $this->feesStructuresRepository->create($input);

        Flash::success('Fees Structures saved successfully.');

        return redirect(route('feesStructures.index'));
    }

    /**
     * Display the specified FeesStructures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $feesStructures = $this->feesStructuresRepository->find($id);

        if (empty($feesStructures)) {
            Flash::error('Fees Structures not found');

            return redirect(route('feesStructures.index'));
        }

        return view('fees_structures.show')->with('feesStructures', $feesStructures);
    }

    /**
     * Show the form for editing the specified FeesStructures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $feesStructures = $this->feesStructuresRepository->find($id);

        if (empty($feesStructures)) {
            Flash::error('Fees Structures not found');

            return redirect(route('feesStructures.index'));
        }

        return view('fees_structures.edit')->with('feesStructures', $feesStructures);
    }

    /**
     * Update the specified FeesStructures in storage.
     *
     * @param int $id
     * @param UpdateFeesStructuresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeesStructuresRequest $request)
    {
        $feesStructures = $this->feesStructuresRepository->find($id);

        if (empty($feesStructures)) {
            Flash::error('Fees Structures not found');

            return redirect(route('feesStructures.index'));
        }

        $feesStructures = $this->feesStructuresRepository->update($request->all(), $id);

        Flash::success('Fees Structures updated successfully.');

        return redirect(route('feesStructures.index'));
    }

    /**
     * Remove the specified FeesStructures from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $feesStructures = $this->feesStructuresRepository->find($id);

        if (empty($feesStructures)) {
            Flash::error('Fees Structures not found');

            return redirect(route('feesStructures.index'));
        }

        $this->feesStructuresRepository->delete($id);

        Flash::success('Fees Structures deleted successfully.');

        return redirect(route('feesStructures.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLevelsRequest;
use App\Http\Requests\UpdateLevelsRequest;
use App\Repositories\LevelsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LevelsController extends AppBaseController
{
    /** @var  LevelsRepository */
    private $levelsRepository;

    public function __construct(LevelsRepository $levelsRepo)
    {
        $this->levelsRepository = $levelsRepo;
    }

    /**
     * Display a listing of the Levels.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $levels = $this->levelsRepository->all();

        return view('levels.index')
            ->with('levels', $levels);
    }

    /**
     * Show the form for creating a new Levels.
     *
     * @return Response
     */
    public function create()
    {
        return view('levels.create');
    }

    /**
     * Store a newly created Levels in storage.
     *
     * @param CreateLevelsRequest $request
     *
     * @return Response
     */
    public function store(CreateLevelsRequest $request)
    {
        $input = $request->all();

        $levels = $this->levelsRepository->create($input);

        Flash::success('Levels saved successfully.');

        return redirect(route('levels.index'));
    }

    /**
     * Display the specified Levels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        return view('levels.show')->with('levels', $levels);
    }

    /**
     * Show the form for editing the specified Levels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        return view('levels.edit')->with('levels', $levels);
    }

    /**
     * Update the specified Levels in storage.
     *
     * @param int $id
     * @param UpdateLevelsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLevelsRequest $request)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        $levels = $this->levelsRepository->update($request->all(), $id);

        Flash::success('Levels updated successfully.');

        return redirect(route('levels.index'));
    }

    /**
     * Remove the specified Levels from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $levels = $this->levelsRepository->find($id);

        if (empty($levels)) {
            Flash::error('Levels not found');

            return redirect(route('levels.index'));
        }

        $this->levelsRepository->delete($id);

        Flash::success('Levels deleted successfully.');

        return redirect(route('levels.index'));
    }
}

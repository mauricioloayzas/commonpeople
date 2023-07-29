<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Service\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /** @var ProjectService */
    private $projectService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->projectService = app(ProjectService::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('exercise/home');
    }

    public function list()
    {
        return view('exercise.list', [
            'projects'  => ProjectResource::collection($this->projectService->getAll())
        ]);
    }

    public function form()
    {
        return view('exercise/form');
    }

    public function loadSliderData(Request $request)
    {
        return response()->json(
            ['data' => ProjectResource::collection($this->projectService->getAll())->toArray($request)],
            Response::HTTP_OK
        );
    }

    public function slider()
    {
        return view('exercise.slider');
    }
}

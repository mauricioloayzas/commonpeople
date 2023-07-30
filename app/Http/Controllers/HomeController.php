<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Image;
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
        return view('exercise.home' , [
            'message'  => "Bienvenidos, para acceder a las tareas de la prueba por favor hacerlo con el menú del header"
        ]);
    }

    public function list()
    {
        return view('exercise.list', [
            'projects'  => ProjectResource::collection($this->projectService->getAll())
        ]);
    }

    public function form()
    {
        return view('exercise/form', [
            'orderNumber'   => $this->projectService->getMaxOrder() + 1
        ]);
    }

    public function newProject(ProjectRequest $request)
    {
        $data = $request->all();
        $project = $this->projectService->createProject($data);
        $counter = 1;
        while($counter <= 4){
            Image::factory()->create([
                'folder'        => "images",
                'name'          => "slider-image-{$counter}.jpg",
                'status'        => Status::ACTIVE,
                'order'         => $counter,
                'project_id'    => $project->id
            ]);

            $counter++;
        }

        return view('exercise.list', [
            'projects'  => ProjectResource::collection($this->projectService->getAll())
        ]);
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

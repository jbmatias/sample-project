<?php

namespace App\Http\Controllers;

use App\Actions\StoreEnvironmentAction;
use App\Http\Requests\StoreEnvironmentRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StoreEnvironmentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreEnvironmentRequest $request, Project $project)
    {        
        return StoreEnvironmentAction::run($project, $request->validated());
    }
}

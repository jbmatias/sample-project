<?php

namespace App\Http\Controllers;

use App\Actions\IndexProjectAction;
use App\Http\Requests\IndexProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexProjectController extends Controller
{
    public function __invoke( IndexProjectRequest $request)
    {
        return IndexProjectAction::run($request->query());
    }
}

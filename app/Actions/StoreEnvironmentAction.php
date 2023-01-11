<?php

namespace App\Actions;

use App\Models\Environment;
use App\Models\Project;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreEnvironmentAction
{
    use AsAction;

    public function handle(Project $project, array $attributes)
    {        
        return $project->environments()->create($attributes);
    }
}

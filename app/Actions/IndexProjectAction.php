<?php

namespace App\Actions;

use App\Http\Resources\IndexProjectCollection;
use App\Models\Project;
use Lorisleiva\Actions\Concerns\AsAction;

class IndexProjectAction
{
    use AsAction;

    public function handle(array $attributes)
    {        
        return new IndexProjectCollection(Project::paginate(10));
    }
}

<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Environment;
use App\Models\Project;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\StoreEnvironmentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed([
        // ProjectSeeder::class,
        // StoreEnvironmentSeeder::class
    ]);
});

test('Get Projects', function () {
    //given
    Project::factory(10)->create();

    //When
    $response = $this->get(route('project.index'));

    //Then
    $response->assertSuccessful();
    $this->assertDatabaseCount('projects', 10);
});

test('Store Project Environment', function () {
    //given
    Project::factory(10)->create();
    $project = Project::first();
    $attributes = [
        'name' => 'test'        
    ];

    //When
    $response = $this->post(route('enviroments.store', [
        'project' => $project, 
    ]), $attributes );

    //Then
    $response->assertSuccessful();
    $this->assertDatabaseCount('environments', 1);
});

test('Store Project Environment won\'t work with invalid payload', function () {
    //given
    Project::factory(10)->create();
    $project = Project::first();
    $attributes = [
        'name' => 123123
    ];

    //When
    $response = $this->post(route('enviroments.store', [
        'project' => $project, 
    ]), $attributes );

    //Then
    $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);    
});
<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
use App\Models\Project;

use function Pest\Laravel\get;

it('extends base controller class')
    ->expect(HomeController::class)
    ->toExtend(\App\Http\Controllers\Controller::class);

it('is an invokable class')
    ->expect(HomeController::class)
    ->toBeInvokable();

it('shows the home page', function () {
    $response = get(route('home'))
        ->assertOk()
        ->assertViewIs('home');
});

it('shows latest posts', function () {
    $post = Post::factory()->create();

    $response = get(route('home'))
        ->assertOk()
        ->assertViewHas('posts');

    $latestPosts = $response->viewData('posts');

    expect($latestPosts)
        ->toBeInstanceOf(\Illuminate\Pagination\LengthAwarePaginator::class)
        ->toHaveCount(1);

    expect($latestPosts->first())
        ->toBeModel($post);
});

it('shows projects', function () {
    Project::factory()->count(5)->create();

    $this->get(route('home'))
        ->assertViewHas('projects', fn ($results) => $results->count() === 5);
});

it('only shows visible projects', function () {
    Project::factory()->count(4)->create();
    $hiddenProject = Project::factory()->hidden()->create();

    $this->get(route('home'))
        ->assertViewHas('projects', fn ($results) => $results->count() === 4
            && ! $results->contains($hiddenProject)
        );
});

it('prioritizes featued projects in ordering', function () {
    $featuredProject = Project::factory()->featured()->create();
    Project::factory()->count(4)->create();

    $this->get(route('home'))
        ->assertViewHas('projects', fn ($results) => $results->count() === 5
            && $results->first()->is($featuredProject)
        );
});

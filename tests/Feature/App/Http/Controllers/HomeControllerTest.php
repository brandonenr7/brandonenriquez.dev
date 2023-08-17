<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;

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

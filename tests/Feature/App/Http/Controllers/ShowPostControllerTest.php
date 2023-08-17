<?php

use App\Http\Controllers\ShowPostController;
use App\Models\Post;

use function Pest\Laravel\get;

it('extends base controller')
    ->expect(ShowPostController::class)
    ->toExtend(\App\Http\Controllers\Controller::class);

it('is invokable')
    ->expect(ShowPostController::class)
    ->toBeInvokable();

it('shows a post', function () {
    $post = Post::factory()->create();

    $response = get(route('posts.show', $post))
        ->assertOk()
        ->assertViewIs('posts.show')
        ->assertViewHas('post', $post);

    $response->assertSee($post->title);
    $response->assertSee($post->body);
});

it('returns error when model not found', function () {
    $response = get(route('posts.show', 'invalid-post-title'))
        ->assertNotFound();
});

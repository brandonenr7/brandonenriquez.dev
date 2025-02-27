<?php

use App\Models\Post;
use App\Models\User;

it('belongs to a user', function () {
    $user = User::factory()->create()->fresh();
    $post = Post::factory()->for($user)->create()->fresh();

    expect($post->user)
        ->toBeInstanceOf(User::class)
        ->is($user);
});

<?php

use Nin\BlogPhp\Comment;
use Nin\BlogPhp\Post;
use Nin\BlogPhp\User;

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

$user = new User($faker->randomDigitNotNull, $faker->firstName, $faker->lastName);
$post = new Post($faker->randomDigitNotNull, $user, $faker->jobTitle, $faker->text);
$comment = new Comment($faker->randomDigitNotNull, $user, $post, $faker->text);

$route = $argv[1] ?? null;

echo match ($route) {
    "user" => $user,
    "post" => $post,
    "comment" => $comment,
    default => "error argument, should be one of them: user, post, comment",
};
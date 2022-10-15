<?php

use Nin\BlogPhp\Comment;
use Nin\BlogPhp\Post;
use Nin\BlogPhp\User;

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

$user = new User(1, $faker->firstName, $faker->lastName);
$post = new Post(1, $user, $faker->jobTitle, $faker->text);
$comment = new Comment(1, $user, $post, $faker->text);

print $user . PHP_EOL;
print $post . PHP_EOL;
print $comment . PHP_EOL;
<?php

use App\Observer\Repository;
use App\Observer\Subscriptor;

$userRepo = new Repository\User();
// Logger observer subscribed to every events of the User Repository subject
$userRepo->attach(new Subscriptor\Logger);
// Notification observer subscribed to a single event of the User Repository subject
$userRepo->attach(new Subscriptor\Notification,'users:created');

$user = $userRepo->create([
    'name' => 'Charlie',
    'email' => 'charlie@gmail.com',
]);
$userRepo->delete($user);

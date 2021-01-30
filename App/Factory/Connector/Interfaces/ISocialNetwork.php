<?php namespace App\Factory\Connector\Interfaces;

interface ISocialNetwork
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}

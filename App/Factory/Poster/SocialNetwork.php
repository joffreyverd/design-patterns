<?php namespace App\Factory\Poster;

use App\Factory\Connector;

abstract class SocialNetwork
{
    abstract public function getSocialNetwork(): Connector\Interfaces\ISocialNetwork;

    public function post($content): void
    {
        // Call the factory method to create a Product object...
        $socialNetwork = $this->getSocialNetwork();
        // ...then use it as you will.
        $socialNetwork->logIn();
        $socialNetwork->createPost($content);
        $socialNetwork->logout();
    }
}

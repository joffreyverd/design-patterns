<?php namespace App\Factory\Poster;

use App\Factory\Poster;
use App\Factory\Connector;

// Inherits method `post` from the parent class
class LinkedIn extends Poster\SocialNetwork
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): Connector\Interfaces\ISocialNetwork
    {
        return new Connector\LinkedIn($this->email, $this->password);
    }
}

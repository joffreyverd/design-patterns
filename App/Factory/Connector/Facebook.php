<?php namespace App\Factory\Connector;

use App\Factory\Connector\Interfaces;

class Facebook implements Interfaces\ISocialNetwork
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Login with user $this->login and password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Login with user $this->login";
    }

    public function createPost($content): void
    {
        echo "Created post on Facebook \n";
    }
}

<?php

namespace App\Controller;

use DateTime;
use App\Dto\User;
use ArrayIterator;
use App\Core\Controller;
use Logger\Chrome\ChromePhp;
use App\Repository\UsersRepository;

class HomeController extends Controller
{
    private const LP = 'hfx/lp.html.twig';

    private const UP = 'hfx/users.html.twig';

    private const USER_ID = 4;

    public function index()
    {
        ChromePhp::log('hello world');
        ChromePhp::log($_SERVER);
        ChromePhp::warn('something went wrong!');
        
        return $this->render(self::LP, [
            'txt_1' => 132465,
            'txt_2' => 'DEV',
        ]);
    }

    public function displayUser(UsersRepository $usersRepository, User $user)
    {
        $result = (object) $usersRepository->getUser(self::USER_ID);

        $user->setId($result->id_user);
        $user->setUuid($result->uuid);
        $user->setUsername($result->username);
        $user->setName($result->name);
        $user->setLastLogin(new DateTime($result->last_login));
        $singleUser = $user;

        ChromePhp::log($user);

        $results = (array) $usersRepository->getUsers();
        $ai = new ArrayIterator();

        foreach ($results as $result) {
            $user = new User();
            $user->setId($result->id_user);
            $user->setUuid($result->uuid);
            $user->setUsername($result->username);
            $user->setName($result->name);
            $user->setLastLogin(new DateTime($result->last_login));
            $ai->append($user);
        }

        return $this->render(self::UP, [
            'user' => $singleUser,
            'users' => $ai,
        ]);
    }
}

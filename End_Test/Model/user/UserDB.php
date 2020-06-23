<?php
namespace User;
class UserDB
{
    private  $userDBConnect;

    public function __construct($userDBConnect)
    {
        $this->userDBConnect = $userDBConnect;

    }
}
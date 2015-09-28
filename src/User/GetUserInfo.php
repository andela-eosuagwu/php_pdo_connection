<?php

namespace Emeka\Newsletter\User;

use Emeka\Newsletter\Database\ConnectDataBase;

//require "src/Database/connect.php";

class GetUserInfo extends ConnectDataBase
{
    public function UserData()
    {
        $response =  $this->fetchData('USERS');
        return json_encode($response);
    }
    public function ProfileData()
    {
        $response =  $this->fetchData('PROFILE');
        return json_encode($response);
    }
}
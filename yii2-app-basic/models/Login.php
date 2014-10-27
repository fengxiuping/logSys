<?php

namespace app\models;

use yii\db\ActiveRecord;


class Login extends ActiveRecord
{

    public $id;
    public $name;
    public $pwd;
    public $role;
    public $time;
}

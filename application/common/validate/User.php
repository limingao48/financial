<?php
namespace app\common\validate;
use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username'  => 'require',
        'password' => 'require',
        'money' =>'require',
    ];
}
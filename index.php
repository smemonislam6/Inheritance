<?php

class Model
{
    protected $dates      = [];
    public function __get($property)
    {
        if (in_array($property, $this->dates)) {
            return new DateTime($this->{$property});
        }

        return $this->{$property};
    }

}

class User extends Model
{
    protected $dates      = ['created_at', 'updated_at'];
    protected $created_at = '2025-09-17 11:52';
}

class Comment extends Model
{

    protected $dates      = ['created_at', 'updated_at'];
    protected $created_at = '2025-09-17 11:52';

}

$user = new User();
var_dump($user->created_at);

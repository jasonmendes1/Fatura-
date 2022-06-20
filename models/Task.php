<?php

class Task extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('description'),
        array('done'),
        array('func_id'),
    );
    static $belongs_to = array(
        array('user'),
        array('func', 'class_name' => 'User', 'foreign_key' => 'func_id'),
    );
}
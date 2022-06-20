<?php

class Task extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('description'),
        array('done'),
    );
}
<?php

class Fatura extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('valortotal'),
        array('ivatotal'),
        array('estado'),
        array('cliente_id'),
        array('func_id')
    );
    static $belongs_to = array(
        array('user'),
        array('cliente', 'class_name' => 'User', 'foreign_key' => 'cliente_id'),
        array('func', 'class_name' => 'User', 'foreign_key' => 'func_id'),
        # array('produto'),
    );   

}
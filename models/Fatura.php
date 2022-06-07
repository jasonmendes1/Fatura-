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
}
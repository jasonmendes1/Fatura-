<?php

class Fatura extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('data'),
        array('valortotal'),
        array('ivatotal'),
        array('estado'),
        array('linhafatura_id'),
        array('cliente_id'),
        array('func_id')
    );
}
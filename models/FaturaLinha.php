<?php

class Faturalinha extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade'),
        array('valor'),
        array('valoriva'),
        array('fatura_id'),
        array('produto_id')
    );
    static $belongs_to = array(
        array('fatura'),
        array('produto'),
    );
}
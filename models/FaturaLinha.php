<?php

class FaturaLinha extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade'),
        array('valor'),
        array('valoriva'),
        array('fatura_id'),
        array('produto_id')
    );
}
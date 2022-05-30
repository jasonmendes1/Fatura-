<?php

class Iva extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('referencia'),
        array('percentagem'),
        array('descricao'),
        array('vigor')
    );
}
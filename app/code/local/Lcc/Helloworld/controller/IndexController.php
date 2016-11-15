<?php

class Lcc_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo 'Hello world Mageto';
    }

    public function goodbyeAction()
    {
        echo 'goodbye';
    }
}
<?php

class Test_News_Model_Blogpost extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        //parent::_construct();
        $this->_init('news/blogpost'); //参数是资源模型的URI news是组名blogpost是半类名
    }

}
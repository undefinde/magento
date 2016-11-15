<?php

class Test_News_Model_Resource_Mysql4_Blogpost extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('news/blogpost', 'blogpost_id');
    }
}
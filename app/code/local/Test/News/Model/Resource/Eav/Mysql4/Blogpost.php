<?php

class Test_News_Model_Resource_Eav_Mysql4_Blogpost extends Mage_Eav_Model_Entity_Abstract
{
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('news_eavblogpost');
        $this->setConnection(
            $resource->getConnection('news-eav_read'),
            $resource->getConnection('news-eav_write')
        );
    }
}
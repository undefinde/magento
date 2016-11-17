<?php

class Test_News_BlogController extends Mage_Core_Controller_Front_Action
{
    public function eavReadAction()
    {
        $eavModel = Mage::getModel('news-eav/eavblogpost');
        $params = $this->getRequest()->getParams();
        echo ("loading the blogpost with an ID of".$params['id']."<br>");
        $eavModel->load($params['id']);
        $data = $eavModel->getData();
        var_dump($data);
    }
}

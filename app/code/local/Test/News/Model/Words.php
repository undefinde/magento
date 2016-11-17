<?php

class Test_News_Model_Words
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('news')->__('Hello')),
            array('value'=>2, 'label'=>Mage::helper('news')->__('Goodbye')),
            array('value'=>3, 'label'=>Mage::helper('news')->__('Yes')),
            array('value'=>4, 'label'=>Mage::helper('news')->__('No')),
        );
    }
}
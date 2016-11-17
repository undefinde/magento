<?php

class Test_News_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        //echo 'hello world';
        /*
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('news/blogpost');
        echo get_class($blogpost);
        echo "Loading the blogpost with an ID of".$params['id']."<br>";
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
        */
        $this->loadLayout();
        $this->renderLayout();
    }

    public function createNewPostAction()
    {
        $blogpost = Mage::getModel('news/blogpost');
        $blogpost->setTitle('code post');
        $blogpost->setPost('This post was create by code');
        $blogpost->save();
        echo 'post created';
    }

    public function editFirstPostAction()
    {
        $blogpost = Mage::getModel('news/blogpost');
        $blogpost->load(1);
        $blogpost->setTitle('edited by code');
        $blogpost->save();
        echo 'post_edited';
    }

    public function deleteFirstPostAction()
    {
        $blogpost = Mage::getModel('news/blogpost');
        $blogpost->load(1);
        $blogpost->delete();
        echo 'post removed';
    }

    public function showAllBlogPostAction()
    {
        $posts = Mage::getModel('news/blogpost')->getCollection();
        foreach ($posts as $blog_post) {
            echo '<h3>'.$blog_post->getTitle().'</h3>';
            echo nl2br($blog_post->getPost());
        }
    }

    public function phtmlAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function loadConfigAction()
    {
        header('Content-Type: text/xml');
        echo $config = Mage::getConfig()
            ->loadModulesConfiguration('system.xml')
            ->getNode()
            ->asXML();
        var_dump($config);
        exit;
    }
}
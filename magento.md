## magneto ORM模型
PHP的“IteratorAggregate”和“Countable”接口
资源模型才是真正和数据库对话的组件
在控制器里方法 实例化一个模型Mage::getModel('helloworld/blogpost');
Magento去实例化Model/blogpost类 
当一个模型需要访问数据库的时候，Magento会自动实例化一个资源模型来使用Mage::getResourceModel('helloworld/blogpost');
为资源模型添加资源类Model/Resource/Mysql4/Blogpost.php;
资源模型通过实体和我们的表联系起来
## magento布局 块 模板
Magento的执行控制器不直接将数据传给试图，相反的视图将直接引用模型，从模型取数据。
每一个块都和一个唯一的模板文件phtml绑定。
模板里面很多地调用了“$this->getChildHtml(…)”。每次调用都会引入另外一个块的HTML内容，直到最底层的块。
### 布局对象
布局对象（或者说布局文件）就是一个XML文件，定义了一个页面包含了哪些块，并且定义了哪个块是顶层块。


调用“loadLayout”时，Magento会做如下处理
生成这个布局文件
为每一个<block />和<reference />标签实例化一个块对象。块对象的类名是通过标签的name属性来查找的。这些块对象被存储在布局对象的_blocks数组中

调用“renderLayout”方法是，Magento会遍历_output数组中所有的块名字，从_blocks数组中获得该名字的块，并调用块对象中使用output属性的值作为名字的函数。这个函数往往是“toHtml”。这个output属性也告诉Magento这里就是输出HTML的起点，也就是顶层块。

## magento资源配置


Magento升级的步骤

    从数据表“core_resource”中获得当前模块的安装版本
    从配置文件中获得当前模块的版本
    如果两个版本一样，那么什么都不做
    如果#2的版本号小于#1的版本号，我也不知道Magento会干什么，理论上是不可能出现的情况
    如果#2的版本号大于#1的版本号，那么开始升级程序
    在配置脚本文件夹内（在上面的例子中是“helloworld_setup”）把所有升级脚本加入队列
    在队列内，按照升级脚本的起始版本排序，升序
    循环队列
    如果队列中当前脚本的起始版本不等于“core_resource”数据表中当前模块的版本号，那么跳过该脚本
    如果队列中当前脚本的起始版本等于“core_resource”数据表中当前模块的版本号并且目标版本小于等于#2的版本号，那么执行该脚本。
    循环队列结束，升级结束

## magento高级模型

所有的资源模型都最终继承“Mage_Core_Model_Resrouce_Abstract”
简单模型是直接继承“Mage_Core_Model_Mysql4_Abstract”
EAV模型是直接继承“Mage_Eav_Model_Entity_Abstract”

Magento提供了一个特殊的资源配置类

## magento系统配置
当一个用户访问一个受保护的资源的时候，后台管理系统（Adminhtml）的执行控制器会执行以下步骤

    为用户正在访问的资源生成一个URI
    根据ACL系统检查该用户是否有权限访问指定的资源
    如果用户拥有访问权限，那么进行用户指定的操作。否则，跳转到相应的错误页面（也可能是停止操作或者显示空白页面）。









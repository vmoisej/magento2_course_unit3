<?php

namespace Unit3\PlayWithBlockTemplate\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('Unit3\PlayWithBlockTemplate\Block\Template');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
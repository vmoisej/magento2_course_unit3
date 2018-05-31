<?php

namespace Unit3\PlayWithBlockTemplate\Controller\Block;

class Test extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Unit3\PlayWithBlockTemplate\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
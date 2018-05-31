<?php

namespace Unit3\PlayWithBlockTemplate\Block\Product\View;

class Description extends \Magento\Framework\View\Element\Template
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock)
    {
        // $originalBlock->getProduct()->setDescription('Plugin BeforeToHtml Test Description. Custom Description.');
        $originalBlock->setTemplate('Unit3_PlayWithBlockTemplate::description.phtml');
    }
}
<?php
namespace Unit3\PlayWithLayout\Block;

class Custom extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = array()
    ) {
        parent::__construct($context, $data);
    }
}

<?php
namespace Magento\Theme\Block\Html\Header;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Header
 */
class Interceptor extends \Magento\Theme\Block\Html\Header implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $data, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function getWelcome()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWelcome');
        return $pluginInfo ? $this->___callPlugins('getWelcome', func_get_args(), $pluginInfo) : parent::getWelcome();
    }
}

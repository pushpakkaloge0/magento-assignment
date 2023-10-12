<?php
namespace Magento\Theme\Block\Html\Footer;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Footer
 */
class Interceptor extends \Magento\Theme\Block\Html\Footer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $httpContext, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCopyright()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCopyright');
        return $pluginInfo ? $this->___callPlugins('getCopyright', func_get_args(), $pluginInfo) : parent::getCopyright();
    }
}

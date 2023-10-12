<?php
namespace Magento\Theme\Block\Html\Breadcrumbs;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Breadcrumbs
 */
class Interceptor extends \Magento\Theme\Block\Html\Breadcrumbs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function addCrumb($crumbName, $crumbInfo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCrumb');
        return $pluginInfo ? $this->___callPlugins('addCrumb', func_get_args(), $pluginInfo) : parent::addCrumb($crumbName, $crumbInfo);
    }
}

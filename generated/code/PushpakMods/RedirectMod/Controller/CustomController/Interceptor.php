<?php
namespace PushpakMods\RedirectMod\Controller\CustomController;

/**
 * Interceptor class for @see \PushpakMods\RedirectMod\Controller\CustomController
 */
class Interceptor extends \PushpakMods\RedirectMod\Controller\CustomController implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Framework\App\Response\RedirectInterface $redirect)
    {
        $this->___init();
        parent::__construct($context, $urlBuilder, $redirect);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}

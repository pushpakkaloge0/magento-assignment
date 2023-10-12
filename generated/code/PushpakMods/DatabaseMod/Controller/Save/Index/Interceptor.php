<?php
namespace PushpakMods\DatabaseMod\Controller\Save\Index;

/**
 * Interceptor class for @see \PushpakMods\DatabaseMod\Controller\Save\Index
 */
class Interceptor extends \PushpakMods\DatabaseMod\Controller\Save\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \PushpakMods\DatabaseMod\Model\EmployeeFactory $employeeFactory)
    {
        $this->___init();
        parent::__construct($context, $employeeFactory);
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

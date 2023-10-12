<?php
namespace PushpakMods\RedirectMod\Controller;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\UrlInterface;

class CustomController extends \Magento\Framework\App\Action\Action
{
    protected $urlBuilder;
    protected $redirect;

    public function __construct(
        Context $context,
        UrlInterface $urlBuilder,
        RedirectInterface $redirect
    ) {
        parent::__construct($context);
        $this->urlBuilder = $urlBuilder;
        $this->redirect = $redirect;
    }

    public function execute()
    {
        $currentUrl = $this->urlBuilder->getCurrentUrl();
        // Check if the URL contains the pattern "ThisIsMyUrl"
        if (strpos($currentUrl, 'ThisIsMyUrl') !== false) {
            // Transform the URL
            $newUrl = str_replace('ThisIsMyUrl', 'this/us/my/url', $currentUrl);
            // Redirect to the transformed URL
            return $this->redirect->redirect($this->getResponse(), $newUrl);
        }

        // If the pattern is not found, proceed with the original request.
        // Your controller logic for other routes can go here.
    }
}

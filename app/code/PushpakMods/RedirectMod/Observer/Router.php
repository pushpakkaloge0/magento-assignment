<?php 
namespace PushpakMods\RedirectMod\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\RouterList;



class Router implements ObserverInterface{
    protected $logger;
    protected $request;

    protected  $prev=null;
    protected $executed = false;

    public function __construct(LoggerInterface $logger,\Magento\Framework\App\Request\Http $request) {
        $this->logger = $logger;
        $this->request = $request;
    }

    public function execute(Observer $observer)
    {
        $controllerAction = $observer->getEvent()->getControllerAction();
        $currentUrl = $controllerAction->getRequest()->getUriString();

        if ($this->shouldExcludeUrl($currentUrl)) {
            exit;
        }

        $this->logger->info('Current URL: ' . $currentUrl);
        $this->logger->info('Previous URL: ' . $this->prev);
        if($this->prev !== $currentUrl && $this->executed==false){
            $this->prev=$currentUrl;
            $this->executed=true;
            $commandArray = explode('/', $currentUrl);
            $lastWord = end($commandArray);
            $finalurl=""; 
            $cnt=0;   
            for($i=0;$i<strlen($lastWord);$i++){
                if($i !=0 && $lastWord[$i]>="A" && $lastWord[$i]<="Z"){
                    $finalurl = $finalurl."/";
                    $lower = strtolower($lastWord[$i]);
                    $finalurl = $finalurl.$lower;
                    $cnt=$cnt+1;
                }else{
                    $lower = strtolower($lastWord[$i]);
                    $finalurl = $finalurl.$lower;    
                }
            }

            if($cnt<=1){
                return;
            }

            $baseurl="";
            for($i=0;$i<count($commandArray)-1;$i++){
                $baseurl = $baseurl.$commandArray[$i]."/";     
            }

            
            $url = $baseurl.$finalurl;
            
            header("Location: $url");
            exit;
        }
    }

    

    private function shouldExcludeUrl($url)
    {
        // Define patterns for URLs to exclude
        $excludedPatterns = ['/favicon.ico', '/static/', '/media/']; // Add more as needed

        foreach ($excludedPatterns as $pattern) {
            if (strpos($url, $pattern) !== false) {
                return true;
            }
        }

        return false;
    }
}


?>
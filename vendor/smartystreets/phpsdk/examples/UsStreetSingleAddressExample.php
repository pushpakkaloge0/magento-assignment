<?php

require_once(dirname(dirname(__FILE__)) . '/src/ClientBuilder.php');
require_once(dirname(dirname(__FILE__)) . '/src/US_Street/Lookup.php');
require_once(dirname(dirname(__FILE__)) . '/src/StaticCredentials.php');
use SmartyStreets\PhpSdk\Exceptions\SmartyException;
use SmartyStreets\PhpSdk\StaticCredentials;
use SmartyStreets\PhpSdk\ClientBuilder;
use SmartyStreets\PhpSdk\US_Street\Lookup;

$lookupExample = new UsStreetSingleAddressExample();
$lookupExample->run();

class UsStreetSingleAddressExample {

    public function run() {
        $authId = 'Your SmartyStreets Auth ID here';
        $authToken = 'Your SmartyStreets Auth Token here';

        // We recommend storing your secret keys in environment variables instead---it's safer!
//        $authId = getenv('SMARTY_AUTH_ID');
//        $authToken = getenv('SMARTY_AUTH_TOKEN');

        $staticCredentials = new StaticCredentials($authId, $authToken);
        $client = (new ClientBuilder($staticCredentials))
//                        ->viaProxy("http://localhost:8080", "username", "password") // uncomment this line to point to the specified proxy.
                        ->buildUsStreetApiClient();

        $lookup = new Lookup();
        $lookup->setStreet("1600 Amphitheatre Pkwy");
        $lookup->setCity("Mountain View");
        $lookup->setState("CA");

        try {
            $client->sendLookup($lookup);
            $this->displayResults($lookup);
        }
        catch (SmartyException $ex) {
            echo($ex->getMessage());
        }
        catch (\Exception $ex) {
            echo($ex->getMessage());
        }
    }

    public function displayResults(Lookup $lookup) {
        $results = $lookup->getResult();

        if (empty($results)) {
            echo("\nNo candidates. This means the address is not valid.");
            return;
        }

        $firstCandidate = $results[0];

        echo("\nAddress is valid. (There is at least one candidate)\n");
        echo("\nZIP Code: " . $firstCandidate->getComponents()->getZIPCode());
        echo("\nCounty: " . $firstCandidate->getMetadata()->getCountyName());
        echo("\nLatitude: " . $firstCandidate->getMetadata()->getLatitude());
        echo("\nLongitude: " . $firstCandidate->getMetadata()->getLongitude());
    }
}
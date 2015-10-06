<?php

use Widop\GoogleAnalytics\Query;
use Widop\GoogleAnalytics\Client;
use Widop\HttpAdapter\CurlHttpAdapter;
use Widop\GoogleAnalytics\Service;

class GoogleAnalyticsTest extends TestCase
{

	private function prepareClientInstance()
	{
		$clientId = '290933330494-8v2tpofu1rm81ouhv8p8ash2q8i02u8v.apps.googleusercontent.com';
		$privateKeyFile = __DIR__.'/ga_p12/My Cloud Project-cd3326fdee86.p12';
		$httpAdapter = new CurlHttpAdapter();	
		$client = new Client($clientId, $privateKeyFile, $httpAdapter);
		$token = $client->getAccessToken();
		return $client;
	}

	public function test_init_analytics_instance()
	{
		$client = $this->prepareClientInstance();

		$profileId = 'ga:67356838';
		$query = new Query($profileId);
		$query->setStartDate(new \DateTime('-2months'));
		$query->setEndDate(new \DateTime());
		$query->setMetrics(array('ga:visits' ,'ga:bounces'));
		$query->setDimensions(array('ga:browser', 'ga:city'));
		$service = new Service($client);
		$response = $service->query($query);

		var_dump($response);
	}
}
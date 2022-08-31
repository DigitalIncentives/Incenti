<?php

namespace DigitalIncentives\Incenti;

use GuzzleHttp\Client as HttpClient;

class IncentiSDK
{
    private HttpClient $http_client;

    public function __construct(private string $api_url, private string $client_id, private string $client_secret)
    {
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient(): HttpClient
    {
        if (!isset($this->http_client)) {
            $this->http_client = new HttpClient([
                'base_uri' => $this->api_url,
                'auth' => [$this->client_id, $this->client_secret]
            ]);
        }

        return $this->http_client;
    }

    /**
     * @param HttpClient $http_client
     */
    public function setHttpClient(HttpClient $http_client): void
    {
        $this->http_client = $http_client;
    }

    public function getCatalog(): array
    {
        $response = $this->getHttpClient()->get('/api/integration/v1.0/catalog');

        $responseJson = json_decode($response->getBody(), true);
        if (!isset($responseJson['brands'])) {
            throw new RequestException((string)$response->getBody());
        }

        return array_map(function ($brand) {
            return new Brand($brand);
        }, $responseJson['brands']);
    }

    public function getAccounts(): array
    {
        $response = $this->getHttpClient()->get('/api/integration/v1.0/accounts');

        $responseJson = json_decode($response->getBody(), true);
        if (!isset($responseJson['accounts'])) {
            throw new RequestException((string)$response->getBody());
        }

        return array_map(function ($accountData) {
            return new Account($accountData);
        }, $responseJson['accounts']);
    }

    public function getExchangeRates(string $baseCurrency = null, string $currency = null): ExchangeRates
    {
        $response = $this->getHttpClient()->get('/api/integration/v1.0/exchange-rates', [
            'query' => [
                'baseCurrency' => $baseCurrency ?? '',
                'currency' => $currency ?? ''
            ]
        ]);

        $responseJson = json_decode($response->getBody(), true);

        if (!isset($responseJson['baseCurrencyCode']) || empty($responseJson['rates'])) {
            throw new RequestException((string)$response->getBody());
        }

        return new ExchangeRates($responseJson);
    }

    public function createOrder(CreateOrder $order): void
    {
        $response = $this->getHttpClient()->post('/api/integration/v1.0/orders/checkout', [
            'json' => $order
        ]);

        $responseJson = json_decode($response->getBody());
        if ($responseJson !== $order->getRequestId()) {
            throw new RequestException((string)$response->getBody());
        }
    }

    public function getOrder(string $requestId): Order
    {
        $response = $this->getHttpClient()->get('/api/integration/v1.0/orders/' . $requestId);
        $responseJson = json_decode($response->getBody(), true);
        return new Order($responseJson);
    }
}

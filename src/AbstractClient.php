<?php

namespace NormanHuth\GithubApi;

use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

abstract class AbstractClient
{
    /**
     * The client instance.
     */
    protected PendingRequest $client;

    /**
     * The user agent to send with requests.
     */
    protected string $userAgent = 'norman-huth/github-api';

    /**
     * The API version to send with requests.
     */
    protected string $apiVersion = '2022-11-28';

    /**
     * The base URL to send requests to.
     */
    protected string $baseUrl = 'https://api.github.com';

    /**
     * Create a new client instance.
     */
    public function __construct(string $token)
    {
        /* @var \Illuminate\Http\Client\PendingRequest $http */
        $http = new Factory();
        $this->client = $http
            ->withHeaders([
                'User-Agent' => $this->userAgent,
                'X-GitHub-Api-Version' => $this->apiVersion,
            ])
            ->withToken($token)
            ->accept('application/vnd.github+json')
            ->baseUrl($this->baseUrl);
    }

    /**
     * Make replacements in the URL.
     */
    protected function makeReplacements(string $url, array $replace): string
    {
        $replace = $this->dataCleanUp($replace);

        foreach ($replace as $key => $value) {
            $url = str_replace('{' . $key . '}', $value, $url);
        }

        return $url;
    }

    /**
     * Remove null values, but keep empty strings.
     */
    protected function dataCleanUp(array $data): array
    {
        return array_filter($data, fn ($value) => !is_null($value));
    }

    /**
     * Issue a GET HTTP request.
     *
     * @api @
     */
    protected function get(string $route, array $data = [], array $replace = []): Response
    {
        $route = $this->makeReplacements($route, $replace);
        $route = str_replace('{path}', 'app/Models', $route);
        $data = $this->dataCleanUp($data);

        return $this->client->get($route, $data);
    }

    /**
     * Issue a POST HTTP request.
     */
    protected function post(string $route, array $data = [], array $replace = [], string $method = 'post'): Response
    {
        $route = $this->makeReplacements($route, $replace);
        $data = $this->dataCleanUp($data);

        return $this->client->withBody(json_encode($data))->{$method}($route, $data);
    }

    /**
     * Issue a PATCH HTTP request.
     */
    protected function patch(string $route, array $data = [], array $replace = []): Response
    {
        return $this->post($route, $data, $replace, __FUNCTION__);
    }

    /**
     * Issue a PUT HTTP request.
     */
    protected function put(string $route, array $data = [], array $replace = []): Response
    {
        return $this->post($route, $data, $replace, __FUNCTION__);
    }

    /**
     * Issue a DELETE HTTP request.
     */
    protected function delete(string $route, $data = [], array $replace = []): Response
    {
        return $this->post($route, $data, $replace, __FUNCTION__);
    }
}

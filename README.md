# GitHub API

A PHP GitHub API wrapper wich used the [Laravel HTTP Client](https://laravel.com/docs/http-client) (based on
[Guzzle HTTP client](http://docs.guzzlephp.org/en/stable/)).

This package does not require Laravel and can be used in any PHP application.

The API endpoint methods are automatically generated with the references from
[octokit/openapi](https://github.com/octokit/openapi/).

## Installation

```shell
composer require norman-huth/github-api
```

## Usage

```php
<?php

use NormanHuth\GithubApi\Client;

require_once __DIR__ . '/vendor/autoload.php';

$client = new Client('{GITHUB_TOKEN_HERE}');

$response = $client->repos()->reposCreateAFork(
    owner: 'Muetze42',
    repo: 'github-api',
    requestBody: ['organization' => 'MyVendor', 'name' => 'MyRepo']
);

```

Every method returns a `\Illuminate\Http\Client\Response`.

```php
<?php

if ($response->successful()) {
    return $response->json();
}
```

## Endpoints

See [ENDPOINTS.md](ENDPOINTS.md)

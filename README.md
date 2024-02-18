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

// Get data as array
return $response->json()
// Get data as object
return $response->object()
// More infos: https://laravel.com/docs/http-client#making-requests
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

## Aliases methods for the current authenticated user

For frequently used endpoints for the current authenticated user, there are also additional methods that can be called
directly from the client.

### Get the authenticated user

Alias for `$client->users()->getTheAuthenticatedUser()`.

Use the REST API to get public and private information about authenticated users.

Reference: https://docs.github.com/en/rest/users/users#get-the-authenticated-user

```php
<?php

$client->whoami();
```

### List repositories for the authenticated user

Reference: https://docs.github.com/en/rest/repos/repos#list-repositories-for-the-authenticated-user

Alias for `$client->repos()->listRepositoriesForTheAuthenticatedUser()`.

```php
<?php

$client->userRepositories();
```

### List gists for the authenticated user

Reference: https://docs.github.com/rest/gists/gists#list-gists-for-the-authenticated-user

Alias for `$client->gists()->listGistsForTheAuthenticatedUser()`.

```php
<?php

$client->userGists();
```

### List issues assigned to the authenticated user

Reference: https://docs.github.com/rest/issues/issues#list-issues-assigned-to-the-authenticated-user

Alias for `$client->issues()->listIssuesAssignedToTheAuthenticatedUser()`.

```php
<?php

$client->userIssues();
```

### List notifications for the authenticated user

Reference: https://docs.github.com/rest/activity/notifications#list-notifications-for-the-authenticated-user

Alias for `$client->activity()->listNotificationsForTheAuthenticatedUser()`.

```php
<?php

$client->userNotifications();
```

### List organization issues assigned to the authenticated user

Reference: https://docs.github.com/rest/issues/issues#list-organization-issues-assigned-to-the-authenticated-user

Alias for `$client->issues()->listOrganizationIssuesAssignedToTheAuthenticatedUser()`.

```php
<?php

$client->userOrganizationIssues();
```

### List repository notifications for the authenticated user

Reference: https://docs.github.com/rest/activity/notifications#list-repository-notifications-for-the-authenticated-user

Alias for `$client->activity()->listRepositoryNotificationsForTheAuthenticatedUser()`.

```php
<?php

$client->userRepositoryNotifications();
```

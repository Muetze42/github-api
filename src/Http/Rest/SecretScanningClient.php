<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class SecretScanningClient extends AbstractClient
{
    /**
     * List secret scanning alerts for an enterprise.
     *
     * @link https://docs.github.com/rest/secret-scanning/secret-scanning#list-secret-scanning-alerts-for-an-enterprise
     */
    public function listSecretScanningAlertsForAnEnterprise(
        string $enterprise,
        string $state = null,
        string $secret_type = null,
        string $resolution = null,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        string $before = null,
        string $after = null,
        string $validity = null
    ): Response {
        return $this->get(
            route: '/enterprises/{enterprise}/secret-scanning/alerts',
            replace: [
                'enterprise' => $enterprise,
                'state' => $state,
                'secret_type' => $secret_type,
                'resolution' => $resolution,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'before' => $before,
                'after' => $after,
                'validity' => $validity,
            ]
        );
    }

    /**
     * List secret scanning alerts for an organization.
     *
     * @link https://docs.github.com/rest/secret-scanning/secret-scanning#list-secret-scanning-alerts-for-an-organization
     */
    public function listSecretScanningAlertsForAnOrganization(
        string $org,
        string $state = null,
        string $secret_type = null,
        string $resolution = null,
        string $sort = null,
        string $direction = null,
        int $page = null,
        int $per_page = 100,
        string $before = null,
        string $after = null,
        string $validity = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/secret-scanning/alerts',
            replace: [
                'org' => $org,
                'state' => $state,
                'secret_type' => $secret_type,
                'resolution' => $resolution,
                'sort' => $sort,
                'direction' => $direction,
                'page' => $page,
                'per_page' => $per_page,
                'before' => $before,
                'after' => $after,
                'validity' => $validity,
            ]
        );
    }

    /**
     * List secret scanning alerts for a repository.
     *
     * @link https://docs.github.com/rest/secret-scanning/secret-scanning#list-secret-scanning-alerts-for-a-repository
     */
    public function listSecretScanningAlertsForARepository(
        string $owner,
        string $repo,
        string $state = null,
        string $secret_type = null,
        string $resolution = null,
        string $sort = null,
        string $direction = null,
        int $page = null,
        int $per_page = 100,
        string $before = null,
        string $after = null,
        string $validity = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/secret-scanning/alerts',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'state' => $state,
                'secret_type' => $secret_type,
                'resolution' => $resolution,
                'sort' => $sort,
                'direction' => $direction,
                'page' => $page,
                'per_page' => $per_page,
                'before' => $before,
                'after' => $after,
                'validity' => $validity,
            ]
        );
    }

    /**
     * Get a secret scanning alert.
     *
     * @link https://docs.github.com/rest/secret-scanning/secret-scanning#get-a-secret-scanning-alert
     */
    public function getASecretScanningAlert(string $owner, string $repo, int $alert_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}',
            replace: ['owner' => $owner, 'repo' => $repo, 'alert_number' => $alert_number]
        );
    }

    /**
     * Update a secret scanning alert.
     *
     * @link https://docs.github.com/rest/secret-scanning/secret-scanning#update-a-secret-scanning-alert
     */
    public function updateASecretScanningAlert(
        string $owner,
        string $repo,
        int $alert_number,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'alert_number' => $alert_number]
        );
    }

    /**
     * List locations for a secret scanning alert.
     *
     * @link https://docs.github.com/rest/secret-scanning/secret-scanning#list-locations-for-a-secret-scanning-alert
     */
    public function listLocationsForASecretScanningAlert(
        string $owner,
        string $repo,
        int $alert_number,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'alert_number' => $alert_number,
                'page' => $page,
                'per_page' => $per_page,
            ]
        );
    }
}

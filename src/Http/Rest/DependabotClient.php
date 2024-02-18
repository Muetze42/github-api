<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class DependabotClient extends AbstractClient
{
    /**
     * List Dependabot alerts for an enterprise.
     *
     * @link https://docs.github.com/rest/dependabot/alerts#list-dependabot-alerts-for-an-enterprise
     */
    public function listDependabotAlertsForAnEnterprise(
        string $enterprise,
        string $state = null,
        string $severity = null,
        string $ecosystem = null,
        string $package = null,
        string $scope = null,
        string $sort = null,
        string $direction = null,
        string $before = null,
        string $after = null,
        int $first = null,
        int $last = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/enterprises/{enterprise}/dependabot/alerts',
            replace: [
                'enterprise' => $enterprise,
                'state' => $state,
                'severity' => $severity,
                'ecosystem' => $ecosystem,
                'package' => $package,
                'scope' => $scope,
                'sort' => $sort,
                'direction' => $direction,
                'before' => $before,
                'after' => $after,
                'first' => $first,
                'last' => $last,
                'per_page' => $per_page,
            ]
        );
    }

    /**
     * List Dependabot alerts for an organization.
     *
     * @link https://docs.github.com/rest/dependabot/alerts#list-dependabot-alerts-for-an-organization
     */
    public function listDependabotAlertsForAnOrganization(
        string $org,
        string $state = null,
        string $severity = null,
        string $ecosystem = null,
        string $package = null,
        string $scope = null,
        string $sort = null,
        string $direction = null,
        string $before = null,
        string $after = null,
        int $first = null,
        int $last = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/orgs/{org}/dependabot/alerts',
            replace: [
                'org' => $org,
                'state' => $state,
                'severity' => $severity,
                'ecosystem' => $ecosystem,
                'package' => $package,
                'scope' => $scope,
                'sort' => $sort,
                'direction' => $direction,
                'before' => $before,
                'after' => $after,
                'first' => $first,
                'last' => $last,
                'per_page' => $per_page,
            ]
        );
    }

    /**
     * List organization secrets.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#list-organization-secrets
     */
    public function listOrganizationSecrets(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/dependabot/secrets',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get an organization public key.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#get-an-organization-public-key
     */
    public function getAnOrganizationPublicKey(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/dependabot/secrets/public-key',
            replace: ['org' => $org]
        );
    }

    /**
     * Get an organization secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#get-an-organization-secret
     */
    public function getAnOrganizationSecret(string $org, string $secret_name): Response
    {
        return $this->get(
            route: '/orgs/{org}/dependabot/secrets/{secret_name}',
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Create or update an organization secret.
     *
     * @link https://docs.github.com/rest/reference/dependabot#create-or-update-an-organization-secret
     */
    public function createOrUpdateAnOrganizationSecret(string $org, string $secret_name, array $requestBody): Response
    {
        return $this->put(
            route: '/orgs/{org}/dependabot/secrets/{secret_name}',
            data: $requestBody,
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Delete an organization secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#delete-an-organization-secret
     */
    public function deleteAnOrganizationSecret(string $org, string $secret_name): Response
    {
        return $this->delete(
            route: '/orgs/{org}/dependabot/secrets/{secret_name}',
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * List selected repositories for an organization secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#list-selected-repositories-for-an-organization-secret
     */
    public function listSelectedRepositoriesForAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/orgs/{org}/dependabot/secrets/{secret_name}/repositories',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Set selected repositories for an organization secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#set-selected-repositories-for-an-organization-secret
     */
    public function setSelectedRepositoriesForAnOrganizationSecret(
        string $org,
        string $secret_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/dependabot/secrets/{secret_name}/repositories',
            data: $requestBody,
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Add selected repository to an organization secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#add-selected-repository-to-an-organization-secret
     */
    public function addSelectedRepositoryToAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $repository_id
    ): Response {
        return $this->put(
            route: '/orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * Remove selected repository from an organization secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#remove-selected-repository-from-an-organization-secret
     */
    public function removeSelectedRepositoryFromAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $repository_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * List Dependabot alerts for a repository.
     *
     * @link https://docs.github.com/rest/dependabot/alerts#list-dependabot-alerts-for-a-repository
     */
    public function listDependabotAlertsForARepository(
        string $owner,
        string $repo,
        string $state = null,
        string $severity = null,
        string $ecosystem = null,
        string $package = null,
        string $manifest = null,
        string $scope = null,
        string $sort = null,
        string $direction = null,
        int $page = null,
        int $per_page = 100,
        string $before = null,
        string $after = null,
        int $first = null,
        int $last = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/dependabot/alerts',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'state' => $state,
                'severity' => $severity,
                'ecosystem' => $ecosystem,
                'package' => $package,
                'manifest' => $manifest,
                'scope' => $scope,
                'sort' => $sort,
                'direction' => $direction,
                'page' => $page,
                'per_page' => $per_page,
                'before' => $before,
                'after' => $after,
                'first' => $first,
                'last' => $last,
            ]
        );
    }

    /**
     * Get a Dependabot alert.
     *
     * @link https://docs.github.com/rest/dependabot/alerts#get-a-dependabot-alert
     */
    public function getADependabotAlert(string $owner, string $repo, int $alert_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/dependabot/alerts/{alert_number}',
            replace: ['owner' => $owner, 'repo' => $repo, 'alert_number' => $alert_number]
        );
    }

    /**
     * Update a Dependabot alert.
     *
     * @link https://docs.github.com/rest/dependabot/alerts#update-a-dependabot-alert
     */
    public function updateADependabotAlert(string $owner, string $repo, int $alert_number, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/dependabot/alerts/{alert_number}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'alert_number' => $alert_number]
        );
    }

    /**
     * List repository secrets.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#list-repository-secrets
     */
    public function listRepositorySecrets(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/dependabot/secrets',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a repository public key.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#get-a-repository-public-key
     */
    public function getARepositoryPublicKey(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/dependabot/secrets/public-key',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a repository secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#get-a-repository-secret
     */
    public function getARepositorySecret(string $owner, string $repo, string $secret_name): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * Create or update a repository secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#create-or-update-a-repository-secret
     */
    public function createOrUpdateARepositorySecret(
        string $owner,
        string $repo,
        string $secret_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * Delete a repository secret.
     *
     * @link https://docs.github.com/rest/dependabot/secrets#delete-a-repository-secret
     */
    public function deleteARepositorySecret(string $owner, string $repo, string $secret_name): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class CodeScanningClient extends AbstractClient
{
    /**
     * List code scanning alerts for an organization.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#list-code-scanning-alerts-for-an-organization
     */
    public function listCodeScanningAlertsForAnOrganization(
        string $org,
        string $tool_name = null,
        string $tool_guid = null,
        string $before = null,
        string $after = null,
        int $page = null,
        int $per_page = 100,
        string $direction = null,
        string $state = null,
        string $sort = null,
        string $severity = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/code-scanning/alerts',
            replace: [
                'org' => $org,
                'tool_name' => $tool_name,
                'tool_guid' => $tool_guid,
                'before' => $before,
                'after' => $after,
                'page' => $page,
                'per_page' => $per_page,
                'direction' => $direction,
                'state' => $state,
                'sort' => $sort,
                'severity' => $severity,
            ]
        );
    }

    /**
     * List code scanning alerts for a repository.
     *
     * @link https://docs.github.com/rest/reference/code-scanning#list-code-scanning-alerts-for-a-repository
     */
    public function listCodeScanningAlertsForARepository(
        string $owner,
        string $repo,
        string $tool_name = null,
        string $tool_guid = null,
        int $page = null,
        int $per_page = 100,
        string $ref = null,
        string $direction = null,
        string $sort = null,
        string $state = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/alerts',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'tool_name' => $tool_name,
                'tool_guid' => $tool_guid,
                'page' => $page,
                'per_page' => $per_page,
                'ref' => $ref,
                'direction' => $direction,
                'sort' => $sort,
                'state' => $state,
            ]
        );
    }

    /**
     * Get a code scanning alert.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#get-a-code-scanning-alert
     */
    public function getACodeScanningAlert(string $owner, string $repo, int $alert_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/alerts/{alert_number}',
            replace: ['owner' => $owner, 'repo' => $repo, 'alert_number' => $alert_number]
        );
    }

    /**
     * Update a code scanning alert.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#update-a-code-scanning-alert
     */
    public function updateACodeScanningAlert(
        string $owner,
        string $repo,
        int $alert_number,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/code-scanning/alerts/{alert_number}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'alert_number' => $alert_number]
        );
    }

    /**
     * List instances of a code scanning alert.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#list-instances-of-a-code-scanning-alert
     */
    public function listInstancesOfACodeScanningAlert(
        string $owner,
        string $repo,
        int $alert_number,
        int $page = null,
        int $per_page = 100,
        string $ref = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'alert_number' => $alert_number,
                'page' => $page,
                'per_page' => $per_page,
                'ref' => $ref,
            ]
        );
    }

    /**
     * List code scanning analyses for a repository.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#list-code-scanning-analyses-for-a-repository
     */
    public function listCodeScanningAnalysesForARepository(
        string $owner,
        string $repo,
        string $tool_name = null,
        string $tool_guid = null,
        int $page = null,
        int $per_page = 100,
        string $ref = null,
        string $sarif_id = null,
        string $direction = null,
        string $sort = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/analyses',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'tool_name' => $tool_name,
                'tool_guid' => $tool_guid,
                'page' => $page,
                'per_page' => $per_page,
                'ref' => $ref,
                'sarif_id' => $sarif_id,
                'direction' => $direction,
                'sort' => $sort,
            ]
        );
    }

    /**
     * Get a code scanning analysis for a repository.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#get-a-code-scanning-analysis-for-a-repository
     */
    public function getACodeScanningAnalysisForARepository(string $owner, string $repo, int $analysis_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'analysis_id' => $analysis_id]
        );
    }

    /**
     * Delete a code scanning analysis from a repository.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#delete-a-code-scanning-analysis-from-a-repository
     */
    public function deleteACodeScanningAnalysisFromARepository(
        string $owner,
        string $repo,
        int $analysis_id,
        string $confirm_delete = null
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'analysis_id' => $analysis_id,
                'confirm_delete' => $confirm_delete,
            ]
        );
    }

    /**
     * List CodeQL databases for a repository.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#list-codeql-databases-for-a-repository
     */
    public function listCodeQLDatabasesForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/codeql/databases',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a CodeQL database for a repository.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#get-a-codeql-database-for-a-repository
     */
    public function getACodeQLDatabaseForARepository(string $owner, string $repo, string $language): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/codeql/databases/{language}',
            replace: ['owner' => $owner, 'repo' => $repo, 'language' => $language]
        );
    }

    /**
     * Get a code scanning default setup configuration.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#get-a-code-scanning-default-setup-configuration
     */
    public function getACodeScanningDefaultSetupConfiguration(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/default-setup',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Update a code scanning default setup configuration.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#update-a-code-scanning-default-setup-configuration
     */
    public function updateACodeScanningDefaultSetupConfiguration(
        string $owner,
        string $repo,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/code-scanning/default-setup',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Upload an analysis as SARIF data.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#upload-an-analysis-as-sarif-data
     */
    public function uploadAnAnalysisAsSARIFData(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/code-scanning/sarifs',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get information about a SARIF upload.
     *
     * @link https://docs.github.com/rest/code-scanning/code-scanning#get-information-about-a-sarif-upload
     */
    public function getInformationAboutASARIFUpload(string $owner, string $repo, string $sarif_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'sarif_id' => $sarif_id]
        );
    }
}

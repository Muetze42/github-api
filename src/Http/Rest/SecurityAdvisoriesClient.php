<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class SecurityAdvisoriesClient extends AbstractClient
{
    /**
     * List global security advisories.
     *
     * @link https://docs.github.com/rest/security-advisories/global-advisories#list-global-security-advisories
     */
    public function listGlobalSecurityAdvisories(
        string $ghsa_id = null,
        string $type = null,
        string $cve_id = null,
        string $ecosystem = null,
        string $severity = null,
        string|array $cwes = null,
        bool $is_withdrawn = null,
        string|array $affects = null,
        string $published = null,
        string $updated = null,
        string $modified = null,
        string $before = null,
        string $after = null,
        string $direction = null,
        int $per_page = 100,
        string $sort = null
    ): Response {
        return $this->get(
            route: '/advisories',
            replace: [
                'ghsa_id' => $ghsa_id,
                'type' => $type,
                'cve_id' => $cve_id,
                'ecosystem' => $ecosystem,
                'severity' => $severity,
                'cwes' => $cwes,
                'is_withdrawn' => $is_withdrawn,
                'affects' => $affects,
                'published' => $published,
                'updated' => $updated,
                'modified' => $modified,
                'before' => $before,
                'after' => $after,
                'direction' => $direction,
                'per_page' => $per_page,
                'sort' => $sort,
            ]
        );
    }

    /**
     * Get a global security advisory.
     *
     * @link https://docs.github.com/rest/security-advisories/global-advisories#get-a-global-security-advisory
     */
    public function getAGlobalSecurityAdvisory(string $ghsa_id): Response
    {
        return $this->get(
            route: '/advisories/{ghsa_id}',
            replace: ['ghsa_id' => $ghsa_id]
        );
    }

    /**
     * List repository security advisories for an organization.
     *
     * @link https://docs.github.com/rest/security-advisories/repository-advisories#list-repository-security-advisories-for-an-organization
     */
    public function listRepositorySecurityAdvisoriesForAnOrganization(
        string $org,
        string $direction = null,
        string $sort = null,
        string $before = null,
        string $after = null,
        int $per_page = 100,
        string $state = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/security-advisories',
            replace: [
                'org' => $org,
                'direction' => $direction,
                'sort' => $sort,
                'before' => $before,
                'after' => $after,
                'per_page' => $per_page,
                'state' => $state,
            ]
        );
    }

    /**
     * List repository security advisories.
     *
     * @link https://docs.github.com/rest/security-advisories/repository-advisories#list-repository-security-advisories
     */
    public function listRepositorySecurityAdvisories(
        string $owner,
        string $repo,
        string $direction = null,
        string $sort = null,
        string $before = null,
        string $after = null,
        int $per_page = 100,
        string $state = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/security-advisories',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'direction' => $direction,
                'sort' => $sort,
                'before' => $before,
                'after' => $after,
                'per_page' => $per_page,
                'state' => $state,
            ]
        );
    }

    /**
     * Create a repository security advisory.
     *
     * @link https://docs.github.com/rest/security-advisories/repository-advisories#create-a-repository-security-advisory
     */
    public function createARepositorySecurityAdvisory(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/security-advisories',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Privately report a security vulnerability.
     *
     * @link https://docs.github.com/rest/security-advisories/repository-advisories#privately-report-a-security-vulnerability
     */
    public function privatelyReportASecurityVulnerability(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/security-advisories/reports',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a repository security advisory.
     *
     * @link https://docs.github.com/rest/security-advisories/repository-advisories#get-a-repository-security-advisory
     */
    public function getARepositorySecurityAdvisory(string $owner, string $repo, string $ghsa_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/security-advisories/{ghsa_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'ghsa_id' => $ghsa_id]
        );
    }

    /**
     * Update a repository security advisory.
     *
     * @link https://docs.github.com/rest/security-advisories/repository-advisories#update-a-repository-security-advisory
     */
    public function updateARepositorySecurityAdvisory(
        string $owner,
        string $repo,
        string $ghsa_id,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/security-advisories/{ghsa_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'ghsa_id' => $ghsa_id]
        );
    }

    /**
     * Request a CVE for a repository security advisory.
     *
     * @link https://docs.github.com/rest/security-advisories/repository-advisories#request-a-cve-for-a-repository-security-advisory
     */
    public function requestACVEForARepositorySecurityAdvisory(string $owner, string $repo, string $ghsa_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/security-advisories/{ghsa_id}/cve',
            replace: ['owner' => $owner, 'repo' => $repo, 'ghsa_id' => $ghsa_id]
        );
    }
}

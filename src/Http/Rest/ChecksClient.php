<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class ChecksClient extends AbstractClient
{
    /**
     * Create a check run.
     *
     * @link https://docs.github.com/rest/reference/checks#create-a-check-run
     */
    public function createACheckRun(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/check-runs',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a check run.
     *
     * @link https://docs.github.com/rest/checks/runs#get-a-check-run
     */
    public function getACheckRun(string $owner, string $repo, int $check_run_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/check-runs/{check_run_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'check_run_id' => $check_run_id]
        );
    }

    /**
     * Update a check run.
     *
     * @link https://docs.github.com/rest/checks/runs#update-a-check-run
     */
    public function updateACheckRun(string $owner, string $repo, int $check_run_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/check-runs/{check_run_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'check_run_id' => $check_run_id]
        );
    }

    /**
     * List check run annotations.
     *
     * @link https://docs.github.com/rest/checks/runs#list-check-run-annotations
     */
    public function listCheckRunAnnotations(
        string $owner,
        string $repo,
        int $check_run_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/check-runs/{check_run_id}/annotations',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'check_run_id' => $check_run_id,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Rerequest a check run.
     *
     * @link https://docs.github.com/rest/checks/runs#rerequest-a-check-run
     */
    public function rerequestACheckRun(string $owner, string $repo, int $check_run_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest',
            replace: ['owner' => $owner, 'repo' => $repo, 'check_run_id' => $check_run_id]
        );
    }

    /**
     * Create a check suite.
     *
     * @link https://docs.github.com/rest/checks/suites#create-a-check-suite
     */
    public function createACheckSuite(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/check-suites',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Update repository preferences for check suites.
     *
     * @link https://docs.github.com/rest/checks/suites#update-repository-preferences-for-check-suites
     */
    public function updateRepositoryPreferencesForCheckSuites(string $owner, string $repo, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/check-suites/preferences',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a check suite.
     *
     * @link https://docs.github.com/rest/checks/suites#get-a-check-suite
     */
    public function getACheckSuite(string $owner, string $repo, int $check_suite_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/check-suites/{check_suite_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'check_suite_id' => $check_suite_id]
        );
    }

    /**
     * List check runs in a check suite.
     *
     * @link https://docs.github.com/rest/checks/runs#list-check-runs-in-a-check-suite
     */
    public function listCheckRunsInACheckSuite(
        string $owner,
        string $repo,
        int $check_suite_id,
        string $check_name = null,
        string $status = null,
        string $filter = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'check_suite_id' => $check_suite_id,
                'check_name' => $check_name,
                'status' => $status,
                'filter' => $filter,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Rerequest a check suite.
     *
     * @link https://docs.github.com/rest/checks/suites#rerequest-a-check-suite
     */
    public function rerequestACheckSuite(string $owner, string $repo, int $check_suite_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest',
            replace: ['owner' => $owner, 'repo' => $repo, 'check_suite_id' => $check_suite_id]
        );
    }

    /**
     * List check runs for a Git reference.
     *
     * @link https://docs.github.com/rest/checks/runs#list-check-runs-for-a-git-reference
     */
    public function listCheckRunsForAGitReference(
        string $owner,
        string $repo,
        string $ref,
        string $check_name = null,
        string $status = null,
        string $filter = null,
        int $per_page = 100,
        int $page = null,
        int $app_id = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{ref}/check-runs',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'ref' => $ref,
                'check_name' => $check_name,
                'status' => $status,
                'filter' => $filter,
                'per_page' => $per_page,
                'page' => $page,
                'app_id' => $app_id,
            ]
        );
    }

    /**
     * List check suites for a Git reference.
     *
     * @link https://docs.github.com/rest/checks/suites#list-check-suites-for-a-git-reference
     */
    public function listCheckSuitesForAGitReference(
        string $owner,
        string $repo,
        string $ref,
        int $app_id = null,
        string $check_name = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{ref}/check-suites',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'ref' => $ref,
                'app_id' => $app_id,
                'check_name' => $check_name,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }
}

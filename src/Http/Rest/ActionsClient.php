<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class ActionsClient extends AbstractClient
{
    /**
     * Get GitHub Actions cache usage for an organization.
     *
     * @link https://docs.github.com/rest/actions/cache#get-github-actions-cache-usage-for-an-organization
     */
    public function getGitHubActionsCacheUsageForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/cache/usage',
            replace: ['org' => $org]
        );
    }

    /**
     * List repositories with GitHub Actions cache usage for an organization.
     *
     * @link https://docs.github.com/rest/actions/cache#list-repositories-with-github-actions-cache-usage-for-an-organization
     */
    public function listRepositoriesWithGitHubActionsCacheUsageForAnOrganization(
        string $org,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/actions/cache/usage-by-repository',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get GitHub Actions permissions for an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#get-github-actions-permissions-for-an-organization
     */
    public function getGitHubActionsPermissionsForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/permissions',
            replace: ['org' => $org]
        );
    }

    /**
     * Set GitHub Actions permissions for an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-github-actions-permissions-for-an-organization
     */
    public function setGitHubActionsPermissionsForAnOrganization(string $org, array $requestBody): Response
    {
        return $this->put(
            route: '/orgs/{org}/actions/permissions',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * List selected repositories enabled for GitHub Actions in an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#list-selected-repositories-enabled-for-github-actions-in-an-organization
     */
    public function listSelectedRepositoriesEnabledForGitHubActionsInAnOrganization(
        string $org,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/actions/permissions/repositories',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Set selected repositories enabled for GitHub Actions in an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-selected-repositories-enabled-for-github-actions-in-an-organization
     */
    public function setSelectedRepositoriesEnabledForGitHubActionsInAnOrganization(
        string $org,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/permissions/repositories',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Enable a selected repository for GitHub Actions in an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#enable-a-selected-repository-for-github-actions-in-an-organization
     */
    public function enableASelectedRepositoryForGitHubActionsInAnOrganization(string $org, int $repository_id): Response
    {
        return $this->put(
            route: '/orgs/{org}/actions/permissions/repositories/{repository_id}',
            replace: ['org' => $org, 'repository_id' => $repository_id]
        );
    }

    /**
     * Disable a selected repository for GitHub Actions in an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#disable-a-selected-repository-for-github-actions-in-an-organization
     */
    public function disableASelectedRepositoryForGitHubActionsInAnOrganization(
        string $org,
        int $repository_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/actions/permissions/repositories/{repository_id}',
            replace: ['org' => $org, 'repository_id' => $repository_id]
        );
    }

    /**
     * Get allowed actions and reusable workflows for an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#get-allowed-actions-and-reusable-workflows-for-an-organization
     */
    public function getAllowedActionsAndReusableWorkflowsForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/permissions/selected-actions',
            replace: ['org' => $org]
        );
    }

    /**
     * Set allowed actions and reusable workflows for an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-allowed-actions-and-reusable-workflows-for-an-organization
     */
    public function setAllowedActionsAndReusableWorkflowsForAnOrganization(
        string $org,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/permissions/selected-actions',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get default workflow permissions for an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#get-default-workflow-permissions-for-an-organization
     */
    public function getDefaultWorkflowPermissionsForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/permissions/workflow',
            replace: ['org' => $org]
        );
    }

    /**
     * Set default workflow permissions for an organization.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-default-workflow-permissions-for-an-organization
     */
    public function setDefaultWorkflowPermissionsForAnOrganization(string $org, array $requestBody = []): Response
    {
        return $this->put(
            route: '/orgs/{org}/actions/permissions/workflow',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * List self-hosted runners for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#list-self-hosted-runners-for-an-organization
     */
    public function listSelfHostedRunnersForAnOrganization(
        string $org,
        string $name = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/actions/runners',
            replace: ['name' => $name, 'org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List runner applications for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#list-runner-applications-for-an-organization
     */
    public function listRunnerApplicationsForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/runners/downloads',
            replace: ['org' => $org]
        );
    }

    /**
     * Create configuration for a just-in-time runner for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#create-configuration-for-a-just-in-time-runner-for-an-organization
     */
    public function createConfigurationForAJustInTimeRunnerForAnOrganization(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/actions/runners/generate-jitconfig',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Create a registration token for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#create-a-registration-token-for-an-organization
     */
    public function createARegistrationTokenForAnOrganization(string $org): Response
    {
        return $this->post(
            route: '/orgs/{org}/actions/runners/registration-token',
            replace: ['org' => $org]
        );
    }

    /**
     * Create a remove token for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#create-a-remove-token-for-an-organization
     */
    public function createARemoveTokenForAnOrganization(string $org): Response
    {
        return $this->post(
            route: '/orgs/{org}/actions/runners/remove-token',
            replace: ['org' => $org]
        );
    }

    /**
     * Get a self-hosted runner for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#get-a-self-hosted-runner-for-an-organization
     */
    public function getASelfHostedRunnerForAnOrganization(string $org, int $runner_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/runners/{runner_id}',
            replace: ['org' => $org, 'runner_id' => $runner_id]
        );
    }

    /**
     * Delete a self-hosted runner from an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#delete-a-self-hosted-runner-from-an-organization
     */
    public function deleteASelfHostedRunnerFromAnOrganization(string $org, int $runner_id): Response
    {
        return $this->delete(
            route: '/orgs/{org}/actions/runners/{runner_id}',
            replace: ['org' => $org, 'runner_id' => $runner_id]
        );
    }

    /**
     * List labels for a self-hosted runner for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#list-labels-for-a-self-hosted-runner-for-an-organization
     */
    public function listLabelsForASelfHostedRunnerForAnOrganization(string $org, int $runner_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/runners/{runner_id}/labels',
            replace: ['org' => $org, 'runner_id' => $runner_id]
        );
    }

    /**
     * Add custom labels to a self-hosted runner for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#add-custom-labels-to-a-self-hosted-runner-for-an-organization
     */
    public function addCustomLabelsToASelfHostedRunnerForAnOrganization(
        string $org,
        int $runner_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/actions/runners/{runner_id}/labels',
            data: $requestBody,
            replace: ['org' => $org, 'runner_id' => $runner_id]
        );
    }

    /**
     * Set custom labels for a self-hosted runner for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#set-custom-labels-for-a-self-hosted-runner-for-an-organization
     */
    public function setCustomLabelsForASelfHostedRunnerForAnOrganization(
        string $org,
        int $runner_id,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/runners/{runner_id}/labels',
            data: $requestBody,
            replace: ['org' => $org, 'runner_id' => $runner_id]
        );
    }

    /**
     * Remove all custom labels from a self-hosted runner for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#remove-all-custom-labels-from-a-self-hosted-runner-for-an-organization
     */
    public function removeAllCustomLabelsFromASelfHostedRunnerForAnOrganization(string $org, int $runner_id): Response
    {
        return $this->delete(
            route: '/orgs/{org}/actions/runners/{runner_id}/labels',
            replace: ['org' => $org, 'runner_id' => $runner_id]
        );
    }

    /**
     * Remove a custom label from a self-hosted runner for an organization.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#remove-a-custom-label-from-a-self-hosted-runner-for-an-organization
     */
    public function removeACustomLabelFromASelfHostedRunnerForAnOrganization(
        string $org,
        int $runner_id,
        string $name
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/actions/runners/{runner_id}/labels/{name}',
            replace: ['org' => $org, 'runner_id' => $runner_id, 'name' => $name]
        );
    }

    /**
     * List organization secrets.
     *
     * @link https://docs.github.com/rest/actions/secrets#list-organization-secrets
     */
    public function listOrganizationSecrets(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/secrets',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get an organization public key.
     *
     * @link https://docs.github.com/rest/actions/secrets#get-an-organization-public-key
     */
    public function getAnOrganizationPublicKey(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/secrets/public-key',
            replace: ['org' => $org]
        );
    }

    /**
     * Get an organization secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#get-an-organization-secret
     */
    public function getAnOrganizationSecret(string $org, string $secret_name): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/secrets/{secret_name}',
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Create or update an organization secret.
     *
     * @link https://docs.github.com/rest/reference/actions#create-or-update-an-organization-secret
     */
    public function createOrUpdateAnOrganizationSecret(string $org, string $secret_name, array $requestBody): Response
    {
        return $this->put(
            route: '/orgs/{org}/actions/secrets/{secret_name}',
            data: $requestBody,
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Delete an organization secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#delete-an-organization-secret
     */
    public function deleteAnOrganizationSecret(string $org, string $secret_name): Response
    {
        return $this->delete(
            route: '/orgs/{org}/actions/secrets/{secret_name}',
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * List selected repositories for an organization secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#list-selected-repositories-for-an-organization-secret
     */
    public function listSelectedRepositoriesForAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/orgs/{org}/actions/secrets/{secret_name}/repositories',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Set selected repositories for an organization secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#set-selected-repositories-for-an-organization-secret
     */
    public function setSelectedRepositoriesForAnOrganizationSecret(
        string $org,
        string $secret_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/secrets/{secret_name}/repositories',
            data: $requestBody,
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Add selected repository to an organization secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#add-selected-repository-to-an-organization-secret
     */
    public function addSelectedRepositoryToAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $repository_id
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * Remove selected repository from an organization secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#remove-selected-repository-from-an-organization-secret
     */
    public function removeSelectedRepositoryFromAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $repository_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * List organization variables.
     *
     * @link https://docs.github.com/rest/actions/variables#list-organization-variables
     */
    public function listOrganizationVariables(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/variables',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#create-an-organization-variable
     */
    public function createAnOrganizationVariable(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/actions/variables',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#get-an-organization-variable
     */
    public function getAnOrganizationVariable(string $org, string $name): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/variables/{name}',
            replace: ['org' => $org, 'name' => $name]
        );
    }

    /**
     * Update an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#update-an-organization-variable
     */
    public function updateAnOrganizationVariable(string $org, string $name, array $requestBody): Response
    {
        return $this->patch(
            route: '/orgs/{org}/actions/variables/{name}',
            data: $requestBody,
            replace: ['org' => $org, 'name' => $name]
        );
    }

    /**
     * Delete an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#delete-an-organization-variable
     */
    public function deleteAnOrganizationVariable(string $org, string $name): Response
    {
        return $this->delete(
            route: '/orgs/{org}/actions/variables/{name}',
            replace: ['org' => $org, 'name' => $name]
        );
    }

    /**
     * List selected repositories for an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#list-selected-repositories-for-an-organization-variable
     */
    public function listSelectedRepositoriesForAnOrganizationVariable(
        string $org,
        string $name,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/orgs/{org}/actions/variables/{name}/repositories',
            replace: ['org' => $org, 'name' => $name, 'page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Set selected repositories for an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#set-selected-repositories-for-an-organization-variable
     */
    public function setSelectedRepositoriesForAnOrganizationVariable(
        string $org,
        string $name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/variables/{name}/repositories',
            data: $requestBody,
            replace: ['org' => $org, 'name' => $name]
        );
    }

    /**
     * Add selected repository to an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#add-selected-repository-to-an-organization-variable
     */
    public function addSelectedRepositoryToAnOrganizationVariable(
        string $org,
        string $name,
        int $repository_id
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/variables/{name}/repositories/{repository_id}',
            replace: ['org' => $org, 'name' => $name, 'repository_id' => $repository_id]
        );
    }

    /**
     * Remove selected repository from an organization variable.
     *
     * @link https://docs.github.com/rest/actions/variables#remove-selected-repository-from-an-organization-variable
     */
    public function removeSelectedRepositoryFromAnOrganizationVariable(
        string $org,
        string $name,
        int $repository_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/actions/variables/{name}/repositories/{repository_id}',
            replace: ['org' => $org, 'name' => $name, 'repository_id' => $repository_id]
        );
    }

    /**
     * List artifacts for a repository.
     *
     * @link https://docs.github.com/rest/actions/artifacts#list-artifacts-for-a-repository
     */
    public function listArtifactsForARepository(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null,
        string $name = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/artifacts',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page, 'name' => $name]
        );
    }

    /**
     * Get an artifact.
     *
     * @link https://docs.github.com/rest/actions/artifacts#get-an-artifact
     */
    public function getAnArtifact(string $owner, string $repo, int $artifact_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'artifact_id' => $artifact_id]
        );
    }

    /**
     * Delete an artifact.
     *
     * @link https://docs.github.com/rest/actions/artifacts#delete-an-artifact
     */
    public function deleteAnArtifact(string $owner, string $repo, int $artifact_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'artifact_id' => $artifact_id]
        );
    }

    /**
     * Download an artifact.
     *
     * @link https://docs.github.com/rest/actions/artifacts#download-an-artifact
     */
    public function downloadAnArtifact(string $owner, string $repo, int $artifact_id, string $archive_format): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'artifact_id' => $artifact_id,
                'archive_format' => $archive_format,
            ]
        );
    }

    /**
     * Get GitHub Actions cache usage for a repository.
     *
     * @link https://docs.github.com/rest/actions/cache#get-github-actions-cache-usage-for-a-repository
     */
    public function getGitHubActionsCacheUsageForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/cache/usage',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List GitHub Actions caches for a repository.
     *
     * @link https://docs.github.com/rest/actions/cache#list-github-actions-caches-for-a-repository
     */
    public function listGitHubActionsCachesForARepository(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null,
        string $ref = null,
        string $key = null,
        string $sort = null,
        string $direction = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/caches',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'per_page' => $per_page,
                'page' => $page,
                'ref' => $ref,
                'key' => $key,
                'sort' => $sort,
                'direction' => $direction,
            ]
        );
    }

    /**
     * Delete GitHub Actions caches for a repository (using a cache key).
     *
     * @link https://docs.github.com/rest/actions/cache#delete-github-actions-caches-for-a-repository-using-a-cache-key
     */
    public function deleteGitHubActionsCachesForARepositoryUsingACacheKey(
        string $owner,
        string $repo,
        string $key,
        string $ref = null
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/caches',
            replace: ['owner' => $owner, 'repo' => $repo, 'key' => $key, 'ref' => $ref]
        );
    }

    /**
     * Delete a GitHub Actions cache for a repository (using a cache ID).
     *
     * @link https://docs.github.com/rest/actions/cache#delete-a-github-actions-cache-for-a-repository-using-a-cache-id
     */
    public function deleteAGitHubActionsCacheForARepositoryUsingACacheID(
        string $owner,
        string $repo,
        int $cache_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/caches/{cache_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'cache_id' => $cache_id]
        );
    }

    /**
     * Get a job for a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-jobs#get-a-job-for-a-workflow-run
     */
    public function getAJobForAWorkflowRun(string $owner, string $repo, int $job_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/jobs/{job_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'job_id' => $job_id]
        );
    }

    /**
     * Download job logs for a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-jobs#download-job-logs-for-a-workflow-run
     */
    public function downloadJobLogsForAWorkflowRun(string $owner, string $repo, int $job_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/jobs/{job_id}/logs',
            replace: ['owner' => $owner, 'repo' => $repo, 'job_id' => $job_id]
        );
    }

    /**
     * Re-run a job from a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#re-run-a-job-from-a-workflow-run
     */
    public function reRunAJobFromAWorkflowRun(
        string $owner,
        string $repo,
        int $job_id,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/jobs/{job_id}/rerun',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'job_id' => $job_id]
        );
    }

    /**
     * Get the customization template for an OIDC subject claim for a repository.
     *
     * @link https://docs.github.com/rest/actions/oidc#get-the-customization-template-for-an-oidc-subject-claim-for-a-repository
     */
    public function getTheCustomizationTemplateForAnOIDCSubjectClaimForARepository(
        string $owner,
        string $repo
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/oidc/customization/sub',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Set the customization template for an OIDC subject claim for a repository.
     *
     * @link https://docs.github.com/rest/actions/oidc#set-the-customization-template-for-an-oidc-subject-claim-for-a-repository
     */
    public function setTheCustomizationTemplateForAnOIDCSubjectClaimForARepository(
        string $owner,
        string $repo,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/oidc/customization/sub',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List repository organization secrets.
     *
     * @link https://docs.github.com/rest/actions/secrets#list-repository-organization-secrets
     */
    public function listRepositoryOrganizationSecrets(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/organization-secrets',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List repository organization variables.
     *
     * @link https://docs.github.com/rest/actions/variables#list-repository-organization-variables
     */
    public function listRepositoryOrganizationVariables(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/organization-variables',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get GitHub Actions permissions for a repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#get-github-actions-permissions-for-a-repository
     */
    public function getGitHubActionsPermissionsForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/permissions',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Set GitHub Actions permissions for a repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-github-actions-permissions-for-a-repository
     */
    public function setGitHubActionsPermissionsForARepository(string $owner, string $repo, array $requestBody): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/permissions',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get the level of access for workflows outside of the repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#get-the-level-of-access-for-workflows-outside-of-the-repository
     */
    public function getTheLevelOfAccessForWorkflowsOutsideOfTheRepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/permissions/access',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Set the level of access for workflows outside of the repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-the-level-of-access-for-workflows-outside-of-the-repository
     */
    public function setTheLevelOfAccessForWorkflowsOutsideOfTheRepository(
        string $owner,
        string $repo,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/permissions/access',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get allowed actions and reusable workflows for a repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#get-allowed-actions-and-reusable-workflows-for-a-repository
     */
    public function getAllowedActionsAndReusableWorkflowsForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/permissions/selected-actions',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Set allowed actions and reusable workflows for a repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-allowed-actions-and-reusable-workflows-for-a-repository
     */
    public function setAllowedActionsAndReusableWorkflowsForARepository(
        string $owner,
        string $repo,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/permissions/selected-actions',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get default workflow permissions for a repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#get-default-workflow-permissions-for-a-repository
     */
    public function getDefaultWorkflowPermissionsForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/permissions/workflow',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Set default workflow permissions for a repository.
     *
     * @link https://docs.github.com/rest/actions/permissions#set-default-workflow-permissions-for-a-repository
     */
    public function setDefaultWorkflowPermissionsForARepository(
        string $owner,
        string $repo,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/permissions/workflow',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List self-hosted runners for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#list-self-hosted-runners-for-a-repository
     */
    public function listSelfHostedRunnersForARepository(
        string $owner,
        string $repo,
        string $name = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runners',
            replace: ['name' => $name, 'owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List runner applications for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#list-runner-applications-for-a-repository
     */
    public function listRunnerApplicationsForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runners/downloads',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create configuration for a just-in-time runner for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#create-configuration-for-a-just-in-time-runner-for-a-repository
     */
    public function createConfigurationForAJustInTimeRunnerForARepository(
        string $owner,
        string $repo,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runners/generate-jitconfig',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a registration token for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#create-a-registration-token-for-a-repository
     */
    public function createARegistrationTokenForARepository(string $owner, string $repo): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runners/registration-token',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a remove token for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#create-a-remove-token-for-a-repository
     */
    public function createARemoveTokenForARepository(string $owner, string $repo): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runners/remove-token',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a self-hosted runner for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#get-a-self-hosted-runner-for-a-repository
     */
    public function getASelfHostedRunnerForARepository(string $owner, string $repo, int $runner_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runners/{runner_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'runner_id' => $runner_id]
        );
    }

    /**
     * Delete a self-hosted runner from a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#delete-a-self-hosted-runner-from-a-repository
     */
    public function deleteASelfHostedRunnerFromARepository(string $owner, string $repo, int $runner_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/runners/{runner_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'runner_id' => $runner_id]
        );
    }

    /**
     * List labels for a self-hosted runner for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#list-labels-for-a-self-hosted-runner-for-a-repository
     */
    public function listLabelsForASelfHostedRunnerForARepository(string $owner, string $repo, int $runner_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runners/{runner_id}/labels',
            replace: ['owner' => $owner, 'repo' => $repo, 'runner_id' => $runner_id]
        );
    }

    /**
     * Add custom labels to a self-hosted runner for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#add-custom-labels-to-a-self-hosted-runner-for-a-repository
     */
    public function addCustomLabelsToASelfHostedRunnerForARepository(
        string $owner,
        string $repo,
        int $runner_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runners/{runner_id}/labels',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'runner_id' => $runner_id]
        );
    }

    /**
     * Set custom labels for a self-hosted runner for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#set-custom-labels-for-a-self-hosted-runner-for-a-repository
     */
    public function setCustomLabelsForASelfHostedRunnerForARepository(
        string $owner,
        string $repo,
        int $runner_id,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/runners/{runner_id}/labels',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'runner_id' => $runner_id]
        );
    }

    /**
     * Remove all custom labels from a self-hosted runner for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#remove-all-custom-labels-from-a-self-hosted-runner-for-a-repository
     */
    public function removeAllCustomLabelsFromASelfHostedRunnerForARepository(
        string $owner,
        string $repo,
        int $runner_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/runners/{runner_id}/labels',
            replace: ['owner' => $owner, 'repo' => $repo, 'runner_id' => $runner_id]
        );
    }

    /**
     * Remove a custom label from a self-hosted runner for a repository.
     *
     * @link https://docs.github.com/rest/actions/self-hosted-runners#remove-a-custom-label-from-a-self-hosted-runner-for-a-repository
     */
    public function removeACustomLabelFromASelfHostedRunnerForARepository(
        string $owner,
        string $repo,
        int $runner_id,
        string $name
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/runners/{runner_id}/labels/{name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'runner_id' => $runner_id, 'name' => $name]
        );
    }

    /**
     * List workflow runs for a repository.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#list-workflow-runs-for-a-repository
     */
    public function listWorkflowRunsForARepository(
        string $owner,
        string $repo,
        string $actor = null,
        string $branch = null,
        string $event = null,
        string $status = null,
        int $per_page = 100,
        int $page = null,
        string $created = null,
        bool $exclude_pull_requests = null,
        int $check_suite_id = null,
        string $head_sha = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'actor' => $actor,
                'branch' => $branch,
                'event' => $event,
                'status' => $status,
                'per_page' => $per_page,
                'page' => $page,
                'created' => $created,
                'exclude_pull_requests' => $exclude_pull_requests,
                'check_suite_id' => $check_suite_id,
                'head_sha' => $head_sha,
            ]
        );
    }

    /**
     * Get a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#get-a-workflow-run
     */
    public function getAWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
        bool $exclude_pull_requests = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'run_id' => $run_id,
                'exclude_pull_requests' => $exclude_pull_requests,
            ]
        );
    }

    /**
     * Delete a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#delete-a-workflow-run
     */
    public function deleteAWorkflowRun(string $owner, string $repo, int $run_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Get the review history for a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#get-the-review-history-for-a-workflow-run
     */
    public function getTheReviewHistoryForAWorkflowRun(string $owner, string $repo, int $run_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/approvals',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Approve a workflow run for a fork pull request.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#approve-a-workflow-run-for-a-fork-pull-request
     */
    public function approveAWorkflowRunForAForkPullRequest(string $owner, string $repo, int $run_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/approve',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * List workflow run artifacts.
     *
     * @link https://docs.github.com/rest/actions/artifacts#list-workflow-run-artifacts
     */
    public function listWorkflowRunArtifacts(
        string $owner,
        string $repo,
        int $run_id,
        int $per_page = 100,
        int $page = null,
        string $name = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/artifacts',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'run_id' => $run_id,
                'per_page' => $per_page,
                'page' => $page,
                'name' => $name,
            ]
        );
    }

    /**
     * Get a workflow run attempt.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#get-a-workflow-run-attempt
     */
    public function getAWorkflowRunAttempt(
        string $owner,
        string $repo,
        int $run_id,
        int $attempt_number,
        bool $exclude_pull_requests = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'run_id' => $run_id,
                'attempt_number' => $attempt_number,
                'exclude_pull_requests' => $exclude_pull_requests,
            ]
        );
    }

    /**
     * List jobs for a workflow run attempt.
     *
     * @link https://docs.github.com/rest/actions/workflow-jobs#list-jobs-for-a-workflow-run-attempt
     */
    public function listJobsForAWorkflowRunAttempt(
        string $owner,
        string $repo,
        int $run_id,
        int $attempt_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'run_id' => $run_id,
                'attempt_number' => $attempt_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Download workflow run attempt logs.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#download-workflow-run-attempt-logs
     */
    public function downloadWorkflowRunAttemptLogs(
        string $owner,
        string $repo,
        int $run_id,
        int $attempt_number
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id, 'attempt_number' => $attempt_number]
        );
    }

    /**
     * Cancel a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#cancel-a-workflow-run
     */
    public function cancelAWorkflowRun(string $owner, string $repo, int $run_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/cancel',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Review custom deployment protection rules for a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#review-custom-deployment-protection-rules-for-a-workflow-run
     */
    public function reviewCustomDeploymentProtectionRulesForAWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/deployment_protection_rule',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Force cancel a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#force-cancel-a-workflow-run
     */
    public function forceCancelAWorkflowRun(string $owner, string $repo, int $run_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/force-cancel',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * List jobs for a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-jobs#list-jobs-for-a-workflow-run
     */
    public function listJobsForAWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
        string $filter = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/jobs',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'run_id' => $run_id,
                'filter' => $filter,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Download workflow run logs.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#download-workflow-run-logs
     */
    public function downloadWorkflowRunLogs(string $owner, string $repo, int $run_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/logs',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Delete workflow run logs.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#delete-workflow-run-logs
     */
    public function deleteWorkflowRunLogs(string $owner, string $repo, int $run_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/logs',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Get pending deployments for a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#get-pending-deployments-for-a-workflow-run
     */
    public function getPendingDeploymentsForAWorkflowRun(string $owner, string $repo, int $run_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Review pending deployments for a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#review-pending-deployments-for-a-workflow-run
     */
    public function reviewPendingDeploymentsForAWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Re-run a workflow.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#re-run-a-workflow
     */
    public function reRunAWorkflow(string $owner, string $repo, int $run_id, array $requestBody = []): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/rerun',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Re-run failed jobs from a workflow run.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#re-run-failed-jobs-from-a-workflow-run
     */
    public function reRunFailedJobsFromAWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/rerun-failed-jobs',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * Get workflow run usage.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#get-workflow-run-usage
     */
    public function getWorkflowRunUsage(string $owner, string $repo, int $run_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/runs/{run_id}/timing',
            replace: ['owner' => $owner, 'repo' => $repo, 'run_id' => $run_id]
        );
    }

    /**
     * List repository secrets.
     *
     * @link https://docs.github.com/rest/actions/secrets#list-repository-secrets
     */
    public function listRepositorySecrets(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/secrets',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a repository public key.
     *
     * @link https://docs.github.com/rest/actions/secrets#get-a-repository-public-key
     */
    public function getARepositoryPublicKey(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/secrets/public-key',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a repository secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#get-a-repository-secret
     */
    public function getARepositorySecret(string $owner, string $repo, string $secret_name): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/secrets/{secret_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * Create or update a repository secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#create-or-update-a-repository-secret
     */
    public function createOrUpdateARepositorySecret(
        string $owner,
        string $repo,
        string $secret_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/secrets/{secret_name}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * Delete a repository secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#delete-a-repository-secret
     */
    public function deleteARepositorySecret(string $owner, string $repo, string $secret_name): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/secrets/{secret_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * List repository variables.
     *
     * @link https://docs.github.com/rest/actions/variables#list-repository-variables
     */
    public function listRepositoryVariables(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/variables',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a repository variable.
     *
     * @link https://docs.github.com/rest/actions/variables#create-a-repository-variable
     */
    public function createARepositoryVariable(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/variables',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a repository variable.
     *
     * @link https://docs.github.com/rest/actions/variables#get-a-repository-variable
     */
    public function getARepositoryVariable(string $owner, string $repo, string $name): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/variables/{name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'name' => $name]
        );
    }

    /**
     * Update a repository variable.
     *
     * @link https://docs.github.com/rest/actions/variables#update-a-repository-variable
     */
    public function updateARepositoryVariable(string $owner, string $repo, string $name, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/actions/variables/{name}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'name' => $name]
        );
    }

    /**
     * Delete a repository variable.
     *
     * @link https://docs.github.com/rest/actions/variables#delete-a-repository-variable
     */
    public function deleteARepositoryVariable(string $owner, string $repo, string $name): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/actions/variables/{name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'name' => $name]
        );
    }

    /**
     * List repository workflows.
     *
     * @link https://docs.github.com/rest/actions/workflows#list-repository-workflows
     */
    public function listRepositoryWorkflows(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/workflows',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a workflow.
     *
     * @link https://docs.github.com/rest/actions/workflows#get-a-workflow
     */
    public function getAWorkflow(string $owner, string $repo, int|string $workflow_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/workflows/{workflow_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'workflow_id' => $workflow_id]
        );
    }

    /**
     * Disable a workflow.
     *
     * @link https://docs.github.com/rest/actions/workflows#disable-a-workflow
     */
    public function disableAWorkflow(string $owner, string $repo, int|string $workflow_id): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable',
            replace: ['owner' => $owner, 'repo' => $repo, 'workflow_id' => $workflow_id]
        );
    }

    /**
     * Create a workflow dispatch event.
     *
     * @link https://docs.github.com/rest/actions/workflows#create-a-workflow-dispatch-event
     */
    public function createAWorkflowDispatchEvent(
        string $owner,
        string $repo,
        int|string $workflow_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'workflow_id' => $workflow_id]
        );
    }

    /**
     * Enable a workflow.
     *
     * @link https://docs.github.com/rest/actions/workflows#enable-a-workflow
     */
    public function enableAWorkflow(string $owner, string $repo, int|string $workflow_id): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable',
            replace: ['owner' => $owner, 'repo' => $repo, 'workflow_id' => $workflow_id]
        );
    }

    /**
     * List workflow runs for a workflow.
     *
     * @link https://docs.github.com/rest/actions/workflow-runs#list-workflow-runs-for-a-workflow
     */
    public function listWorkflowRunsForAWorkflow(
        string $owner,
        string $repo,
        int|string $workflow_id,
        string $actor = null,
        string $branch = null,
        string $event = null,
        string $status = null,
        int $per_page = 100,
        int $page = null,
        string $created = null,
        bool $exclude_pull_requests = null,
        int $check_suite_id = null,
        string $head_sha = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'workflow_id' => $workflow_id,
                'actor' => $actor,
                'branch' => $branch,
                'event' => $event,
                'status' => $status,
                'per_page' => $per_page,
                'page' => $page,
                'created' => $created,
                'exclude_pull_requests' => $exclude_pull_requests,
                'check_suite_id' => $check_suite_id,
                'head_sha' => $head_sha,
            ]
        );
    }

    /**
     * Get workflow usage.
     *
     * @link https://docs.github.com/rest/actions/workflows#get-workflow-usage
     */
    public function getWorkflowUsage(string $owner, string $repo, int|string $workflow_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing',
            replace: ['owner' => $owner, 'repo' => $repo, 'workflow_id' => $workflow_id]
        );
    }

    /**
     * List environment secrets.
     *
     * @link https://docs.github.com/rest/actions/secrets#list-environment-secrets
     */
    public function listEnvironmentSecrets(
        int $repository_id,
        string $environment_name,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repositories/{repository_id}/environments/{environment_name}/secrets',
            replace: [
                'repository_id' => $repository_id,
                'environment_name' => $environment_name,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get an environment public key.
     *
     * @link https://docs.github.com/rest/actions/secrets#get-an-environment-public-key
     */
    public function getAnEnvironmentPublicKey(int $repository_id, string $environment_name): Response
    {
        return $this->get(
            route: '/repositories/{repository_id}/environments/{environment_name}/secrets/public-key',
            replace: ['repository_id' => $repository_id, 'environment_name' => $environment_name]
        );
    }

    /**
     * Get an environment secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#get-an-environment-secret
     */
    public function getAnEnvironmentSecret(int $repository_id, string $environment_name, string $secret_name): Response
    {
        return $this->get(
            route: '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}',
            replace: [
                'repository_id' => $repository_id,
                'environment_name' => $environment_name,
                'secret_name' => $secret_name,
            ]
        );
    }

    /**
     * Create or update an environment secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#create-or-update-an-environment-secret
     */
    public function createOrUpdateAnEnvironmentSecret(
        int $repository_id,
        string $environment_name,
        string $secret_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}',
            data: $requestBody,
            replace: [
                'repository_id' => $repository_id,
                'environment_name' => $environment_name,
                'secret_name' => $secret_name,
            ]
        );
    }

    /**
     * Delete an environment secret.
     *
     * @link https://docs.github.com/rest/actions/secrets#delete-an-environment-secret
     */
    public function deleteAnEnvironmentSecret(
        int $repository_id,
        string $environment_name,
        string $secret_name
    ): Response {
        return $this->delete(
            route: '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}',
            replace: [
                'repository_id' => $repository_id,
                'environment_name' => $environment_name,
                'secret_name' => $secret_name,
            ]
        );
    }

    /**
     * List environment variables.
     *
     * @link https://docs.github.com/rest/actions/variables#list-environment-variables
     */
    public function listEnvironmentVariables(
        int $repository_id,
        string $environment_name,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repositories/{repository_id}/environments/{environment_name}/variables',
            replace: [
                'repository_id' => $repository_id,
                'environment_name' => $environment_name,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create an environment variable.
     *
     * @link https://docs.github.com/rest/actions/variables#create-an-environment-variable
     */
    public function createAnEnvironmentVariable(
        int $repository_id,
        string $environment_name,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repositories/{repository_id}/environments/{environment_name}/variables',
            data: $requestBody,
            replace: ['repository_id' => $repository_id, 'environment_name' => $environment_name]
        );
    }

    /**
     * Get an environment variable.
     *
     * @link https://docs.github.com/rest/actions/variables#get-an-environment-variable
     */
    public function getAnEnvironmentVariable(int $repository_id, string $environment_name, string $name): Response
    {
        return $this->get(
            route: '/repositories/{repository_id}/environments/{environment_name}/variables/{name}',
            replace: ['repository_id' => $repository_id, 'environment_name' => $environment_name, 'name' => $name]
        );
    }

    /**
     * Update an environment variable.
     *
     * @link https://docs.github.com/rest/actions/variables#update-an-environment-variable
     */
    public function updateAnEnvironmentVariable(
        int $repository_id,
        string $name,
        string $environment_name,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/repositories/{repository_id}/environments/{environment_name}/variables/{name}',
            data: $requestBody,
            replace: ['repository_id' => $repository_id, 'name' => $name, 'environment_name' => $environment_name]
        );
    }

    /**
     * Delete an environment variable.
     *
     * @link https://docs.github.com/rest/actions/variables#delete-an-environment-variable
     */
    public function deleteAnEnvironmentVariable(int $repository_id, string $name, string $environment_name): Response
    {
        return $this->delete(
            route: '/repositories/{repository_id}/environments/{environment_name}/variables/{name}',
            replace: ['repository_id' => $repository_id, 'name' => $name, 'environment_name' => $environment_name]
        );
    }
}

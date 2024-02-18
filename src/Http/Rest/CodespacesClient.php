<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class CodespacesClient extends AbstractClient
{
    /**
     * List codespaces for the organization.
     *
     * @link https://docs.github.com/rest/codespaces/organizations#list-codespaces-for-the-organization
     */
    public function listCodespacesForTheOrganization(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/codespaces',
            replace: ['per_page' => $per_page, 'page' => $page, 'org' => $org]
        );
    }

    /**
     * Manage access control for organization codespaces.
     *
     * @link https://docs.github.com/rest/codespaces/organizations#manage-access-control-for-organization-codespaces
     */
    public function manageAccessControlForOrganizationCodespaces(string $org, array $requestBody): Response
    {
        return $this->put(
            route: '/orgs/{org}/codespaces/access',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Add users to Codespaces access for an organization.
     *
     * @link https://docs.github.com/rest/codespaces/organizations#add-users-to-codespaces-access-for-an-organization
     */
    public function addUsersToCodespacesAccessForAnOrganization(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/codespaces/access/selected_users',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Remove users from Codespaces access for an organization.
     *
     * @link https://docs.github.com/rest/codespaces/organizations#remove-users-from-codespaces-access-for-an-organization
     */
    public function removeUsersFromCodespacesAccessForAnOrganization(string $org, array $requestBody): Response
    {
        return $this->delete(
            route: '/orgs/{org}/codespaces/access/selected_users',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * List organization secrets.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#list-organization-secrets
     */
    public function listOrganizationSecrets(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/codespaces/secrets',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get an organization public key.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#get-an-organization-public-key
     */
    public function getAnOrganizationPublicKey(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/codespaces/secrets/public-key',
            replace: ['org' => $org]
        );
    }

    /**
     * Get an organization secret.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#get-an-organization-secret
     */
    public function getAnOrganizationSecret(string $org, string $secret_name): Response
    {
        return $this->get(
            route: '/orgs/{org}/codespaces/secrets/{secret_name}',
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Create or update an organization secret.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#create-or-update-an-organization-secret
     */
    public function createOrUpdateAnOrganizationSecret(string $org, string $secret_name, array $requestBody): Response
    {
        return $this->put(
            route: '/orgs/{org}/codespaces/secrets/{secret_name}',
            data: $requestBody,
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Delete an organization secret.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#delete-an-organization-secret
     */
    public function deleteAnOrganizationSecret(string $org, string $secret_name): Response
    {
        return $this->delete(
            route: '/orgs/{org}/codespaces/secrets/{secret_name}',
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * List selected repositories for an organization secret.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#list-selected-repositories-for-an-organization-secret
     */
    public function listSelectedRepositoriesForAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/orgs/{org}/codespaces/secrets/{secret_name}/repositories',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Set selected repositories for an organization secret.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#set-selected-repositories-for-an-organization-secret
     */
    public function setSelectedRepositoriesForAnOrganizationSecret(
        string $org,
        string $secret_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/codespaces/secrets/{secret_name}/repositories',
            data: $requestBody,
            replace: ['org' => $org, 'secret_name' => $secret_name]
        );
    }

    /**
     * Add selected repository to an organization secret.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#add-selected-repository-to-an-organization-secret
     */
    public function addSelectedRepositoryToAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $repository_id
    ): Response {
        return $this->put(
            route: '/orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * Remove selected repository from an organization secret.
     *
     * @link https://docs.github.com/rest/codespaces/organization-secrets#remove-selected-repository-from-an-organization-secret
     */
    public function removeSelectedRepositoryFromAnOrganizationSecret(
        string $org,
        string $secret_name,
        int $repository_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['org' => $org, 'secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * List codespaces for a user in organization.
     *
     * @link https://docs.github.com/rest/codespaces/organizations#list-codespaces-for-a-user-in-organization
     */
    public function listCodespacesForAUserInOrganization(
        string $org,
        string $username,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/members/{username}/codespaces',
            replace: ['per_page' => $per_page, 'page' => $page, 'org' => $org, 'username' => $username]
        );
    }

    /**
     * Delete a codespace from the organization.
     *
     * @link https://docs.github.com/rest/codespaces/organizations#delete-a-codespace-from-the-organization
     */
    public function deleteACodespaceFromTheOrganization(string $org, string $username, string $codespace_name): Response
    {
        return $this->delete(
            route: '/orgs/{org}/members/{username}/codespaces/{codespace_name}',
            replace: ['org' => $org, 'username' => $username, 'codespace_name' => $codespace_name]
        );
    }

    /**
     * Stop a codespace for an organization user.
     *
     * @link https://docs.github.com/rest/codespaces/organizations#stop-a-codespace-for-an-organization-user
     */
    public function stopACodespaceForAnOrganizationUser(string $org, string $username, string $codespace_name): Response
    {
        return $this->post(
            route: '/orgs/{org}/members/{username}/codespaces/{codespace_name}/stop',
            replace: ['org' => $org, 'username' => $username, 'codespace_name' => $codespace_name]
        );
    }

    /**
     * List codespaces in a repository for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#list-codespaces-in-a-repository-for-the-authenticated-user
     */
    public function listCodespacesInARepositoryForTheAuthenticatedUser(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces',
            replace: ['per_page' => $per_page, 'page' => $page, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a codespace in a repository.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#create-a-codespace-in-a-repository
     */
    public function createACodespaceInARepository(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/codespaces',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List devcontainer configurations in a repository for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#list-devcontainer-configurations-in-a-repository-for-the-authenticated-user
     */
    public function listDevcontainerConfigurationsInARepositoryForTheAuthenticatedUser(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces/devcontainers',
            replace: ['per_page' => $per_page, 'page' => $page, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List available machine types for a repository.
     *
     * @link https://docs.github.com/rest/codespaces/machines#list-available-machine-types-for-a-repository
     */
    public function listAvailableMachineTypesForARepository(
        string $owner,
        string $repo,
        string $location = null,
        string $client_ip = null,
        string $ref = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces/machines',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'location' => $location,
                'client_ip' => $client_ip,
                'ref' => $ref,
            ]
        );
    }

    /**
     * Get default attributes for a codespace.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#get-default-attributes-for-a-codespace
     */
    public function getDefaultAttributesForACodespace(
        string $owner,
        string $repo,
        string $ref = null,
        string $client_ip = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces/new',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref, 'client_ip' => $client_ip]
        );
    }

    /**
     * Check if permissions defined by a devcontainer have been accepted by the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#check-if-permissions-defined-by-a-devcontainer-have-been-accepted-by-the-authenticated-user
     */
    public function checkIfPermissionsDefinedByADevcontainerHaveBeenAcceptedByTheAuthenticatedUser(
        string $owner,
        string $repo,
        string $ref,
        string $devcontainer_path
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces/permissions_check',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref, 'devcontainer_path' => $devcontainer_path]
        );
    }

    /**
     * List repository secrets.
     *
     * @link https://docs.github.com/rest/codespaces/repository-secrets#list-repository-secrets
     */
    public function listRepositorySecrets(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces/secrets',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a repository public key.
     *
     * @link https://docs.github.com/rest/codespaces/repository-secrets#get-a-repository-public-key
     */
    public function getARepositoryPublicKey(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces/secrets/public-key',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a repository secret.
     *
     * @link https://docs.github.com/rest/codespaces/repository-secrets#get-a-repository-secret
     */
    public function getARepositorySecret(string $owner, string $repo, string $secret_name): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * Create or update a repository secret.
     *
     * @link https://docs.github.com/rest/codespaces/repository-secrets#create-or-update-a-repository-secret
     */
    public function createOrUpdateARepositorySecret(
        string $owner,
        string $repo,
        string $secret_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * Delete a repository secret.
     *
     * @link https://docs.github.com/rest/codespaces/repository-secrets#delete-a-repository-secret
     */
    public function deleteARepositorySecret(string $owner, string $repo, string $secret_name): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'secret_name' => $secret_name]
        );
    }

    /**
     * Create a codespace from a pull request.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#create-a-codespace-from-a-pull-request
     */
    public function createACodespaceFromAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/codespaces',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * List codespaces for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#list-codespaces-for-the-authenticated-user
     */
    public function listCodespacesForTheAuthenticatedUser(
        int $per_page = 100,
        int $page = null,
        int $repository_id = null
    ): Response {
        return $this->get(
            route: '/user/codespaces',
            replace: ['per_page' => $per_page, 'page' => $page, 'repository_id' => $repository_id]
        );
    }

    /**
     * Create a codespace for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#create-a-codespace-for-the-authenticated-user
     */
    public function createACodespaceForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->post(
            route: '/user/codespaces',
            data: $requestBody
        );
    }

    /**
     * List secrets for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#list-secrets-for-the-authenticated-user
     */
    public function listSecretsForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/codespaces/secrets',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get public key for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#get-public-key-for-the-authenticated-user
     */
    public function getPublicKeyForTheAuthenticatedUser(): Response
    {
        return $this->get(
            route: '/user/codespaces/secrets/public-key'
        );
    }

    /**
     * Get a secret for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#get-a-secret-for-the-authenticated-user
     */
    public function getASecretForTheAuthenticatedUser(string $secret_name): Response
    {
        return $this->get(
            route: '/user/codespaces/secrets/{secret_name}',
            replace: ['secret_name' => $secret_name]
        );
    }

    /**
     * Create or update a secret for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#create-or-update-a-secret-for-the-authenticated-user
     */
    public function createOrUpdateASecretForTheAuthenticatedUser(string $secret_name, array $requestBody): Response
    {
        return $this->put(
            route: '/user/codespaces/secrets/{secret_name}',
            data: $requestBody,
            replace: ['secret_name' => $secret_name]
        );
    }

    /**
     * Delete a secret for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#delete-a-secret-for-the-authenticated-user
     */
    public function deleteASecretForTheAuthenticatedUser(string $secret_name): Response
    {
        return $this->delete(
            route: '/user/codespaces/secrets/{secret_name}',
            replace: ['secret_name' => $secret_name]
        );
    }

    /**
     * List selected repositories for a user secret.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#list-selected-repositories-for-a-user-secret
     */
    public function listSelectedRepositoriesForAUserSecret(string $secret_name): Response
    {
        return $this->get(
            route: '/user/codespaces/secrets/{secret_name}/repositories',
            replace: ['secret_name' => $secret_name]
        );
    }

    /**
     * Set selected repositories for a user secret.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#set-selected-repositories-for-a-user-secret
     */
    public function setSelectedRepositoriesForAUserSecret(string $secret_name, array $requestBody): Response
    {
        return $this->put(
            route: '/user/codespaces/secrets/{secret_name}/repositories',
            data: $requestBody,
            replace: ['secret_name' => $secret_name]
        );
    }

    /**
     * Add a selected repository to a user secret.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#add-a-selected-repository-to-a-user-secret
     */
    public function addASelectedRepositoryToAUserSecret(string $secret_name, int $repository_id): Response
    {
        return $this->put(
            route: '/user/codespaces/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * Remove a selected repository from a user secret.
     *
     * @link https://docs.github.com/rest/codespaces/secrets#remove-a-selected-repository-from-a-user-secret
     */
    public function removeASelectedRepositoryFromAUserSecret(string $secret_name, int $repository_id): Response
    {
        return $this->delete(
            route: '/user/codespaces/secrets/{secret_name}/repositories/{repository_id}',
            replace: ['secret_name' => $secret_name, 'repository_id' => $repository_id]
        );
    }

    /**
     * Get a codespace for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#get-a-codespace-for-the-authenticated-user
     */
    public function getACodespaceForTheAuthenticatedUser(string $codespace_name): Response
    {
        return $this->get(
            route: '/user/codespaces/{codespace_name}',
            replace: ['codespace_name' => $codespace_name]
        );
    }

    /**
     * Update a codespace for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#update-a-codespace-for-the-authenticated-user
     */
    public function updateACodespaceForTheAuthenticatedUser(string $codespace_name, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/user/codespaces/{codespace_name}',
            data: $requestBody,
            replace: ['codespace_name' => $codespace_name]
        );
    }

    /**
     * Delete a codespace for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#delete-a-codespace-for-the-authenticated-user
     */
    public function deleteACodespaceForTheAuthenticatedUser(string $codespace_name): Response
    {
        return $this->delete(
            route: '/user/codespaces/{codespace_name}',
            replace: ['codespace_name' => $codespace_name]
        );
    }

    /**
     * Export a codespace for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#export-a-codespace-for-the-authenticated-user
     */
    public function exportACodespaceForTheAuthenticatedUser(string $codespace_name): Response
    {
        return $this->post(
            route: '/user/codespaces/{codespace_name}/exports',
            replace: ['codespace_name' => $codespace_name]
        );
    }

    /**
     * Get details about a codespace export.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#get-details-about-a-codespace-export
     */
    public function getDetailsAboutACodespaceExport(string $codespace_name, string $export_id): Response
    {
        return $this->get(
            route: '/user/codespaces/{codespace_name}/exports/{export_id}',
            replace: ['codespace_name' => $codespace_name, 'export_id' => $export_id]
        );
    }

    /**
     * List machine types for a codespace.
     *
     * @link https://docs.github.com/rest/codespaces/machines#list-machine-types-for-a-codespace
     */
    public function listMachineTypesForACodespace(string $codespace_name): Response
    {
        return $this->get(
            route: '/user/codespaces/{codespace_name}/machines',
            replace: ['codespace_name' => $codespace_name]
        );
    }

    /**
     * Create a repository from an unpublished codespace.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#create-a-repository-from-an-unpublished-codespace
     */
    public function createARepositoryFromAnUnpublishedCodespace(string $codespace_name, array $requestBody): Response
    {
        return $this->post(
            route: '/user/codespaces/{codespace_name}/publish',
            data: $requestBody,
            replace: ['codespace_name' => $codespace_name]
        );
    }

    /**
     * Start a codespace for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#start-a-codespace-for-the-authenticated-user
     */
    public function startACodespaceForTheAuthenticatedUser(string $codespace_name): Response
    {
        return $this->post(
            route: '/user/codespaces/{codespace_name}/start',
            replace: ['codespace_name' => $codespace_name]
        );
    }

    /**
     * Stop a codespace for the authenticated user.
     *
     * @link https://docs.github.com/rest/codespaces/codespaces#stop-a-codespace-for-the-authenticated-user
     */
    public function stopACodespaceForTheAuthenticatedUser(string $codespace_name): Response
    {
        return $this->post(
            route: '/user/codespaces/{codespace_name}/stop',
            replace: ['codespace_name' => $codespace_name]
        );
    }
}

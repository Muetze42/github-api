<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class MigrationsClient extends AbstractClient
{
    /**
     * List organization migrations.
     *
     * @link https://docs.github.com/rest/migrations/orgs#list-organization-migrations
     */
    public function listOrganizationMigrations(
        string $org,
        int $per_page = 100,
        int $page = null,
        array $exclude = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/migrations',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page, 'exclude' => $exclude]
        );
    }

    /**
     * Start an organization migration.
     *
     * @link https://docs.github.com/rest/migrations/orgs#start-an-organization-migration
     */
    public function startAnOrganizationMigration(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/migrations',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get an organization migration status.
     *
     * @link https://docs.github.com/rest/migrations/orgs#get-an-organization-migration-status
     */
    public function getAnOrganizationMigrationStatus(string $org, int $migration_id, array $exclude = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/migrations/{migration_id}',
            replace: ['org' => $org, 'migration_id' => $migration_id, 'exclude' => $exclude]
        );
    }

    /**
     * Download an organization migration archive.
     *
     * @link https://docs.github.com/rest/migrations/orgs#download-an-organization-migration-archive
     */
    public function downloadAnOrganizationMigrationArchive(string $org, int $migration_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/migrations/{migration_id}/archive',
            replace: ['org' => $org, 'migration_id' => $migration_id]
        );
    }

    /**
     * Delete an organization migration archive.
     *
     * @link https://docs.github.com/rest/migrations/orgs#delete-an-organization-migration-archive
     */
    public function deleteAnOrganizationMigrationArchive(string $org, int $migration_id): Response
    {
        return $this->delete(
            route: '/orgs/{org}/migrations/{migration_id}/archive',
            replace: ['org' => $org, 'migration_id' => $migration_id]
        );
    }

    /**
     * Unlock an organization repository.
     *
     * @link https://docs.github.com/rest/migrations/orgs#unlock-an-organization-repository
     */
    public function unlockAnOrganizationRepository(string $org, int $migration_id, string $repo_name): Response
    {
        return $this->delete(
            route: '/orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock',
            replace: ['org' => $org, 'migration_id' => $migration_id, 'repo_name' => $repo_name]
        );
    }

    /**
     * List repositories in an organization migration.
     *
     * @link https://docs.github.com/rest/migrations/orgs#list-repositories-in-an-organization-migration
     */
    public function listRepositoriesInAnOrganizationMigration(
        string $org,
        int $migration_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/migrations/{migration_id}/repositories',
            replace: ['org' => $org, 'migration_id' => $migration_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get an import status.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#get-an-import-status
     */
    public function getAnImportStatus(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/import',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Start an import.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#start-an-import
     */
    public function startAnImport(string $owner, string $repo, array $requestBody): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/import',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Update an import.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#update-an-import
     */
    public function updateAnImport(string $owner, string $repo, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/import',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Cancel an import.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#cancel-an-import
     */
    public function cancelAnImport(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/import',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get commit authors.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#get-commit-authors
     */
    public function getCommitAuthors(string $owner, string $repo, int $since = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/import/authors',
            replace: ['owner' => $owner, 'repo' => $repo, 'since' => $since]
        );
    }

    /**
     * Map a commit author.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#map-a-commit-author
     */
    public function mapACommitAuthor(string $owner, string $repo, int $author_id, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/import/authors/{author_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'author_id' => $author_id]
        );
    }

    /**
     * Get large files.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#get-large-files
     */
    public function getLargeFiles(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/import/large_files',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Update Git LFS preference.
     *
     * @link https://docs.github.com/rest/migrations/source-imports#update-git-lfs-preference
     */
    public function updateGitLFSPreference(string $owner, string $repo, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/import/lfs',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List user migrations.
     *
     * @link https://docs.github.com/rest/migrations/users#list-user-migrations
     */
    public function listUserMigrations(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/migrations',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Start a user migration.
     *
     * @link https://docs.github.com/rest/migrations/users#start-a-user-migration
     */
    public function startAUserMigration(array $requestBody): Response
    {
        return $this->post(
            route: '/user/migrations',
            data: $requestBody
        );
    }

    /**
     * Get a user migration status.
     *
     * @link https://docs.github.com/rest/migrations/users#get-a-user-migration-status
     */
    public function getAUserMigrationStatus(int $migration_id, array $exclude = null): Response
    {
        return $this->get(
            route: '/user/migrations/{migration_id}',
            replace: ['migration_id' => $migration_id, 'exclude' => $exclude]
        );
    }

    /**
     * Download a user migration archive.
     *
     * @link https://docs.github.com/rest/migrations/users#download-a-user-migration-archive
     */
    public function downloadAUserMigrationArchive(int $migration_id): Response
    {
        return $this->get(
            route: '/user/migrations/{migration_id}/archive',
            replace: ['migration_id' => $migration_id]
        );
    }

    /**
     * Delete a user migration archive.
     *
     * @link https://docs.github.com/rest/migrations/users#delete-a-user-migration-archive
     */
    public function deleteAUserMigrationArchive(int $migration_id): Response
    {
        return $this->delete(
            route: '/user/migrations/{migration_id}/archive',
            replace: ['migration_id' => $migration_id]
        );
    }

    /**
     * Unlock a user repository.
     *
     * @link https://docs.github.com/rest/migrations/users#unlock-a-user-repository
     */
    public function unlockAUserRepository(int $migration_id, string $repo_name): Response
    {
        return $this->delete(
            route: '/user/migrations/{migration_id}/repos/{repo_name}/lock',
            replace: ['migration_id' => $migration_id, 'repo_name' => $repo_name]
        );
    }

    /**
     * List repositories for a user migration.
     *
     * @link https://docs.github.com/rest/migrations/users#list-repositories-for-a-user-migration
     */
    public function listRepositoriesForAUserMigration(
        int $migration_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/user/migrations/{migration_id}/repositories',
            replace: ['migration_id' => $migration_id, 'per_page' => $per_page, 'page' => $page]
        );
    }
}

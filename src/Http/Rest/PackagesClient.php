<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class PackagesClient extends AbstractClient
{
    /**
     * Get list of conflicting packages during Docker migration for organization.
     *
     * @link https://docs.github.com/rest/packages/packages#get-list-of-conflicting-packages-during-docker-migration-for-organization
     */
    public function getListOfConflictingPackagesDuringDockerMigrationForOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/docker/conflicts',
            replace: ['org' => $org]
        );
    }

    /**
     * List packages for an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#list-packages-for-an-organization
     */
    public function listPackagesForAnOrganization(
        string $package_type,
        string $org,
        string $visibility = null,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/orgs/{org}/packages',
            replace: [
                'package_type' => $package_type,
                'org' => $org,
                'visibility' => $visibility,
                'page' => $page,
                'per_page' => $per_page,
            ]
        );
    }

    /**
     * Get a package for an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#get-a-package-for-an-organization
     */
    public function getAPackageForAnOrganization(string $package_type, string $package_name, string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/packages/{package_type}/{package_name}',
            replace: ['package_type' => $package_type, 'package_name' => $package_name, 'org' => $org]
        );
    }

    /**
     * Delete a package for an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#delete-a-package-for-an-organization
     */
    public function deleteAPackageForAnOrganization(string $package_type, string $package_name, string $org): Response
    {
        return $this->delete(
            route: '/orgs/{org}/packages/{package_type}/{package_name}',
            replace: ['package_type' => $package_type, 'package_name' => $package_name, 'org' => $org]
        );
    }

    /**
     * Restore a package for an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#restore-a-package-for-an-organization
     */
    public function restoreAPackageForAnOrganization(
        string $package_type,
        string $package_name,
        string $org,
        string $token = null
    ): Response {
        return $this->post(
            route: '/orgs/{org}/packages/{package_type}/{package_name}/restore',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'org' => $org,
                'token' => $token,
            ]
        );
    }

    /**
     * List package versions for a package owned by an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#list-package-versions-for-a-package-owned-by-an-organization
     */
    public function listPackageVersionsForAPackageOwnedByAnOrganization(
        string $package_type,
        string $package_name,
        string $org,
        int $page = null,
        int $per_page = 100,
        string $state = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/packages/{package_type}/{package_name}/versions',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'org' => $org,
                'page' => $page,
                'per_page' => $per_page,
                'state' => $state,
            ]
        );
    }

    /**
     * Get a package version for an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#get-a-package-version-for-an-organization
     */
    public function getAPackageVersionForAnOrganization(
        string $package_type,
        string $package_name,
        string $org,
        int $package_version_id
    ): Response {
        return $this->get(
            route: '/orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'org' => $org,
                'package_version_id' => $package_version_id,
            ]
        );
    }

    /**
     * Delete package version for an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#delete-package-version-for-an-organization
     */
    public function deletePackageVersionForAnOrganization(
        string $package_type,
        string $package_name,
        string $org,
        int $package_version_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'org' => $org,
                'package_version_id' => $package_version_id,
            ]
        );
    }

    /**
     * Restore package version for an organization.
     *
     * @link https://docs.github.com/rest/packages/packages#restore-package-version-for-an-organization
     */
    public function restorePackageVersionForAnOrganization(
        string $package_type,
        string $package_name,
        string $org,
        int $package_version_id
    ): Response {
        return $this->post(
            route: '/orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'org' => $org,
                'package_version_id' => $package_version_id,
            ]
        );
    }

    /**
     * Get list of conflicting packages during Docker migration for authenticated-user.
     *
     * @link https://docs.github.com/rest/packages/packages#get-list-of-conflicting-packages-during-docker-migration-for-authenticated-user
     */
    public function getListOfConflictingPackagesDuringDockerMigrationForAuthenticatedUser(): Response
    {
        return $this->get(
            route: '/user/docker/conflicts'
        );
    }

    /**
     * List packages for the authenticated user's namespace.
     *
     * @link https://docs.github.com/rest/packages/packages#list-packages-for-the-authenticated-users-namespace
     */
    public function listPackagesForTheAuthenticatedUserSNamespace(
        string $package_type,
        string $visibility = null,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/user/packages',
            replace: [
                'package_type' => $package_type,
                'visibility' => $visibility,
                'page' => $page,
                'per_page' => $per_page,
            ]
        );
    }

    /**
     * Get a package for the authenticated user.
     *
     * @link https://docs.github.com/rest/packages/packages#get-a-package-for-the-authenticated-user
     */
    public function getAPackageForTheAuthenticatedUser(string $package_type, string $package_name): Response
    {
        return $this->get(
            route: '/user/packages/{package_type}/{package_name}',
            replace: ['package_type' => $package_type, 'package_name' => $package_name]
        );
    }

    /**
     * Delete a package for the authenticated user.
     *
     * @link https://docs.github.com/rest/packages/packages#delete-a-package-for-the-authenticated-user
     */
    public function deleteAPackageForTheAuthenticatedUser(string $package_type, string $package_name): Response
    {
        return $this->delete(
            route: '/user/packages/{package_type}/{package_name}',
            replace: ['package_type' => $package_type, 'package_name' => $package_name]
        );
    }

    /**
     * Restore a package for the authenticated user.
     *
     * @link https://docs.github.com/rest/packages/packages#restore-a-package-for-the-authenticated-user
     */
    public function restoreAPackageForTheAuthenticatedUser(
        string $package_type,
        string $package_name,
        string $token = null
    ): Response {
        return $this->post(
            route: '/user/packages/{package_type}/{package_name}/restore',
            replace: ['package_type' => $package_type, 'package_name' => $package_name, 'token' => $token]
        );
    }

    /**
     * List package versions for a package owned by the authenticated user.
     *
     * @link https://docs.github.com/rest/packages/packages#list-package-versions-for-a-package-owned-by-the-authenticated-user
     */
    public function listPackageVersionsForAPackageOwnedByTheAuthenticatedUser(
        string $package_type,
        string $package_name,
        int $page = null,
        int $per_page = 100,
        string $state = null
    ): Response {
        return $this->get(
            route: '/user/packages/{package_type}/{package_name}/versions',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'page' => $page,
                'per_page' => $per_page,
                'state' => $state,
            ]
        );
    }

    /**
     * Get a package version for the authenticated user.
     *
     * @link https://docs.github.com/rest/packages/packages#get-a-package-version-for-the-authenticated-user
     */
    public function getAPackageVersionForTheAuthenticatedUser(
        string $package_type,
        string $package_name,
        int $package_version_id
    ): Response {
        return $this->get(
            route: '/user/packages/{package_type}/{package_name}/versions/{package_version_id}',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'package_version_id' => $package_version_id,
            ]
        );
    }

    /**
     * Delete a package version for the authenticated user.
     *
     * @link https://docs.github.com/rest/packages/packages#delete-a-package-version-for-the-authenticated-user
     */
    public function deleteAPackageVersionForTheAuthenticatedUser(
        string $package_type,
        string $package_name,
        int $package_version_id
    ): Response {
        return $this->delete(
            route: '/user/packages/{package_type}/{package_name}/versions/{package_version_id}',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'package_version_id' => $package_version_id,
            ]
        );
    }

    /**
     * Restore a package version for the authenticated user.
     *
     * @link https://docs.github.com/rest/packages/packages#restore-a-package-version-for-the-authenticated-user
     */
    public function restoreAPackageVersionForTheAuthenticatedUser(
        string $package_type,
        string $package_name,
        int $package_version_id
    ): Response {
        return $this->post(
            route: '/user/packages/{package_type}/{package_name}/versions/{package_version_id}/restore',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'package_version_id' => $package_version_id,
            ]
        );
    }

    /**
     * Get list of conflicting packages during Docker migration for user.
     *
     * @link https://docs.github.com/rest/packages/packages#get-list-of-conflicting-packages-during-docker-migration-for-user
     */
    public function getListOfConflictingPackagesDuringDockerMigrationForUser(string $username): Response
    {
        return $this->get(
            route: '/users/{username}/docker/conflicts',
            replace: ['username' => $username]
        );
    }

    /**
     * List packages for a user.
     *
     * @link https://docs.github.com/rest/packages/packages#list-packages-for-a-user
     */
    public function listPackagesForAUser(
        string $package_type,
        string $username,
        string $visibility = null,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/users/{username}/packages',
            replace: [
                'package_type' => $package_type,
                'visibility' => $visibility,
                'username' => $username,
                'page' => $page,
                'per_page' => $per_page,
            ]
        );
    }

    /**
     * Get a package for a user.
     *
     * @link https://docs.github.com/rest/packages/packages#get-a-package-for-a-user
     */
    public function getAPackageForAUser(string $package_type, string $package_name, string $username): Response
    {
        return $this->get(
            route: '/users/{username}/packages/{package_type}/{package_name}',
            replace: ['package_type' => $package_type, 'package_name' => $package_name, 'username' => $username]
        );
    }

    /**
     * Delete a package for a user.
     *
     * @link https://docs.github.com/rest/packages/packages#delete-a-package-for-a-user
     */
    public function deleteAPackageForAUser(string $package_type, string $package_name, string $username): Response
    {
        return $this->delete(
            route: '/users/{username}/packages/{package_type}/{package_name}',
            replace: ['package_type' => $package_type, 'package_name' => $package_name, 'username' => $username]
        );
    }

    /**
     * Restore a package for a user.
     *
     * @link https://docs.github.com/rest/packages/packages#restore-a-package-for-a-user
     */
    public function restoreAPackageForAUser(
        string $package_type,
        string $package_name,
        string $username,
        string $token = null
    ): Response {
        return $this->post(
            route: '/users/{username}/packages/{package_type}/{package_name}/restore',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'username' => $username,
                'token' => $token,
            ]
        );
    }

    /**
     * List package versions for a package owned by a user.
     *
     * @link https://docs.github.com/rest/packages/packages#list-package-versions-for-a-package-owned-by-a-user
     */
    public function listPackageVersionsForAPackageOwnedByAUser(
        string $package_type,
        string $package_name,
        string $username
    ): Response {
        return $this->get(
            route: '/users/{username}/packages/{package_type}/{package_name}/versions',
            replace: ['package_type' => $package_type, 'package_name' => $package_name, 'username' => $username]
        );
    }

    /**
     * Get a package version for a user.
     *
     * @link https://docs.github.com/rest/packages/packages#get-a-package-version-for-a-user
     */
    public function getAPackageVersionForAUser(
        string $package_type,
        string $package_name,
        int $package_version_id,
        string $username
    ): Response {
        return $this->get(
            route: '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'package_version_id' => $package_version_id,
                'username' => $username,
            ]
        );
    }

    /**
     * Delete package version for a user.
     *
     * @link https://docs.github.com/rest/packages/packages#delete-package-version-for-a-user
     */
    public function deletePackageVersionForAUser(
        string $package_type,
        string $package_name,
        string $username,
        int $package_version_id
    ): Response {
        return $this->delete(
            route: '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'username' => $username,
                'package_version_id' => $package_version_id,
            ]
        );
    }

    /**
     * Restore package version for a user.
     *
     * @link https://docs.github.com/rest/packages/packages#restore-package-version-for-a-user
     */
    public function restorePackageVersionForAUser(
        string $package_type,
        string $package_name,
        string $username,
        int $package_version_id
    ): Response {
        return $this->post(
            route: '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore',
            replace: [
                'package_type' => $package_type,
                'package_name' => $package_name,
                'username' => $username,
                'package_version_id' => $package_version_id,
            ]
        );
    }
}

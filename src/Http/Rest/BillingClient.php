<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class BillingClient extends AbstractClient
{
    /**
     * Get GitHub Actions billing for an organization.
     *
     * @link https://docs.github.com/rest/billing/billing#get-github-actions-billing-for-an-organization
     */
    public function getGitHubActionsBillingForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/settings/billing/actions',
            replace: ['org' => $org]
        );
    }

    /**
     * Get GitHub Packages billing for an organization.
     *
     * @link https://docs.github.com/rest/billing/billing#get-github-packages-billing-for-an-organization
     */
    public function getGitHubPackagesBillingForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/settings/billing/packages',
            replace: ['org' => $org]
        );
    }

    /**
     * Get shared storage billing for an organization.
     *
     * @link https://docs.github.com/rest/billing/billing#get-shared-storage-billing-for-an-organization
     */
    public function getSharedStorageBillingForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/settings/billing/shared-storage',
            replace: ['org' => $org]
        );
    }

    /**
     * Get GitHub Actions billing for a user.
     *
     * @link https://docs.github.com/rest/billing/billing#get-github-actions-billing-for-a-user
     */
    public function getGitHubActionsBillingForAUser(string $username): Response
    {
        return $this->get(
            route: '/users/{username}/settings/billing/actions',
            replace: ['username' => $username]
        );
    }

    /**
     * Get GitHub Packages billing for a user.
     *
     * @link https://docs.github.com/rest/billing/billing#get-github-packages-billing-for-a-user
     */
    public function getGitHubPackagesBillingForAUser(string $username): Response
    {
        return $this->get(
            route: '/users/{username}/settings/billing/packages',
            replace: ['username' => $username]
        );
    }

    /**
     * Get shared storage billing for a user.
     *
     * @link https://docs.github.com/rest/billing/billing#get-shared-storage-billing-for-a-user
     */
    public function getSharedStorageBillingForAUser(string $username): Response
    {
        return $this->get(
            route: '/users/{username}/settings/billing/shared-storage',
            replace: ['username' => $username]
        );
    }
}

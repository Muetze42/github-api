<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class InteractionsClient extends AbstractClient
{
    /**
     * Get interaction restrictions for an organization.
     *
     * @link https://docs.github.com/rest/interactions/orgs#get-interaction-restrictions-for-an-organization
     */
    public function getInteractionRestrictionsForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/interaction-limits',
            replace: ['org' => $org]
        );
    }

    /**
     * Set interaction restrictions for an organization.
     *
     * @link https://docs.github.com/rest/interactions/orgs#set-interaction-restrictions-for-an-organization
     */
    public function setInteractionRestrictionsForAnOrganization(string $org, array $requestBody): Response
    {
        return $this->put(
            route: '/orgs/{org}/interaction-limits',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Remove interaction restrictions for an organization.
     *
     * @link https://docs.github.com/rest/interactions/orgs#remove-interaction-restrictions-for-an-organization
     */
    public function removeInteractionRestrictionsForAnOrganization(string $org): Response
    {
        return $this->delete(
            route: '/orgs/{org}/interaction-limits',
            replace: ['org' => $org]
        );
    }

    /**
     * Get interaction restrictions for a repository.
     *
     * @link https://docs.github.com/rest/interactions/repos#get-interaction-restrictions-for-a-repository
     */
    public function getInteractionRestrictionsForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/interaction-limits',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Set interaction restrictions for a repository.
     *
     * @link https://docs.github.com/rest/interactions/repos#set-interaction-restrictions-for-a-repository
     */
    public function setInteractionRestrictionsForARepository(string $owner, string $repo, array $requestBody): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/interaction-limits',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Remove interaction restrictions for a repository.
     *
     * @link https://docs.github.com/rest/interactions/repos#remove-interaction-restrictions-for-a-repository
     */
    public function removeInteractionRestrictionsForARepository(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/interaction-limits',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get interaction restrictions for your public repositories.
     *
     * @link https://docs.github.com/rest/interactions/user#get-interaction-restrictions-for-your-public-repositories
     */
    public function getInteractionRestrictionsForYourPublicRepositories(): Response
    {
        return $this->get(
            route: '/user/interaction-limits'
        );
    }

    /**
     * Set interaction restrictions for your public repositories.
     *
     * @link https://docs.github.com/rest/interactions/user#set-interaction-restrictions-for-your-public-repositories
     */
    public function setInteractionRestrictionsForYourPublicRepositories(array $requestBody): Response
    {
        return $this->put(
            route: '/user/interaction-limits',
            data: $requestBody
        );
    }

    /**
     * Remove interaction restrictions from your public repositories.
     *
     * @link https://docs.github.com/rest/interactions/user#remove-interaction-restrictions-from-your-public-repositories
     */
    public function removeInteractionRestrictionsFromYourPublicRepositories(): Response
    {
        return $this->delete(
            route: '/user/interaction-limits'
        );
    }
}

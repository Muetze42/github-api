<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class MetaClient extends AbstractClient
{
    /**
     * GitHub API Root.
     *
     * @link https://docs.github.com/rest/meta/meta#github-api-root
     */
    public function gitHubAPIRoot(): Response
    {
        return $this->get(
            route: '/'
        );
    }

    /**
     * Get GitHub meta information.
     *
     * @link https://docs.github.com/rest/meta/meta#get-apiname-meta-information
     */
    public function getGitHubMetaInformation(): Response
    {
        return $this->get(
            route: '/meta'
        );
    }

    /**
     * Get Octocat.
     *
     * @link https://docs.github.com/rest/meta/meta#get-octocat
     */
    public function getOctocat(string $s = null): Response
    {
        return $this->get(
            route: '/octocat',
            replace: ['s' => $s]
        );
    }

    /**
     * Get all API versions.
     *
     * @link https://docs.github.com/rest/meta/meta#get-all-api-versions
     */
    public function getAllAPIVersions(): Response
    {
        return $this->get(
            route: '/versions'
        );
    }

    /**
     * Get the Zen of GitHub.
     *
     * @link https://docs.github.com/rest/meta/meta#get-the-zen-of-github
     */
    public function getTheZenOfGitHub(): Response
    {
        return $this->get(
            route: '/zen'
        );
    }
}

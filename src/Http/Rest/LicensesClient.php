<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class LicensesClient extends AbstractClient
{
    /**
     * Get all commonly used licenses.
     *
     * @link https://docs.github.com/rest/licenses/licenses#get-all-commonly-used-licenses
     */
    public function getAllCommonlyUsedLicenses(bool $featured = null, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/licenses',
            replace: ['featured' => $featured, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a license.
     *
     * @link https://docs.github.com/rest/licenses/licenses#get-a-license
     */
    public function getALicense(string $license): Response
    {
        return $this->get(
            route: '/licenses/{license}',
            replace: ['license' => $license]
        );
    }

    /**
     * Get the license for a repository.
     *
     * @link https://docs.github.com/rest/licenses/licenses#get-the-license-for-a-repository
     */
    public function getTheLicenseForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/license',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class CodesOfConductClient extends AbstractClient
{
    /**
     * Get all codes of conduct.
     *
     * @link https://docs.github.com/rest/codes-of-conduct/codes-of-conduct#get-all-codes-of-conduct
     */
    public function getAllCodesOfConduct(): Response
    {
        return $this->get(
            route: '/codes_of_conduct'
        );
    }

    /**
     * Get a code of conduct.
     *
     * @link https://docs.github.com/rest/codes-of-conduct/codes-of-conduct#get-a-code-of-conduct
     */
    public function getACodeOfConduct(string $key): Response
    {
        return $this->get(
            route: '/codes_of_conduct/{key}',
            replace: ['key' => $key]
        );
    }
}

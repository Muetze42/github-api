<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class RateLimitClient extends AbstractClient
{
    /**
     * Get rate limit status for the authenticated user.
     *
     * @link https://docs.github.com/rest/rate-limit/rate-limit#get-rate-limit-status-for-the-authenticated-user
     */
    public function getRateLimitStatusForTheAuthenticatedUser(): Response
    {
        return $this->get(
            route: '/rate_limit'
        );
    }
}

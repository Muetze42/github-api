<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class EmojisClient extends AbstractClient
{
    /**
     * Get emojis.
     *
     * @link https://docs.github.com/rest/emojis/emojis#get-emojis
     */
    public function getEmojis(): Response
    {
        return $this->get(
            route: '/emojis'
        );
    }
}

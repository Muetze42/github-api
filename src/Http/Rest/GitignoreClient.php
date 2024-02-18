<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class GitignoreClient extends AbstractClient
{
    /**
     * Get all gitignore templates.
     *
     * @link https://docs.github.com/rest/gitignore/gitignore#get-all-gitignore-templates
     */
    public function getAllGitignoreTemplates(): Response
    {
        return $this->get(
            route: '/gitignore/templates'
        );
    }

    /**
     * Get a gitignore template.
     *
     * @link https://docs.github.com/rest/gitignore/gitignore#get-a-gitignore-template
     */
    public function getAGitignoreTemplate(string $name): Response
    {
        return $this->get(
            route: '/gitignore/templates/{name}',
            replace: ['name' => $name]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class GistsClient extends AbstractClient
{
    /**
     * List gists for the authenticated user.
     *
     * @link https://docs.github.com/rest/gists/gists#list-gists-for-the-authenticated-user
     */
    public function listGistsForTheAuthenticatedUser(
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/gists',
            replace: ['since' => $since, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a gist.
     *
     * @link https://docs.github.com/rest/gists/gists#create-a-gist
     */
    public function createAGist(array $requestBody): Response
    {
        return $this->post(
            route: '/gists',
            data: $requestBody
        );
    }

    /**
     * List public gists.
     *
     * @link https://docs.github.com/rest/gists/gists#list-public-gists
     */
    public function listPublicGists(string $since = null, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/gists/public',
            replace: ['since' => $since, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List starred gists.
     *
     * @link https://docs.github.com/rest/gists/gists#list-starred-gists
     */
    public function listStarredGists(string $since = null, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/gists/starred',
            replace: ['since' => $since, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a gist.
     *
     * @link https://docs.github.com/rest/gists/gists#get-a-gist
     */
    public function getAGist(string $gist_id): Response
    {
        return $this->get(
            route: '/gists/{gist_id}',
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * Update a gist.
     *
     * @link https://docs.github.com/rest/reference/gists/#update-a-gist
     */
    public function updateAGist(string $gist_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/gists/{gist_id}',
            data: $requestBody,
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * Delete a gist.
     *
     * @link https://docs.github.com/rest/gists/gists#delete-a-gist
     */
    public function deleteAGist(string $gist_id): Response
    {
        return $this->delete(
            route: '/gists/{gist_id}',
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * List gist comments.
     *
     * @link https://docs.github.com/rest/gists/comments#list-gist-comments
     */
    public function listGistComments(string $gist_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/gists/{gist_id}/comments',
            replace: ['gist_id' => $gist_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a gist comment.
     *
     * @link https://docs.github.com/rest/gists/comments#create-a-gist-comment
     */
    public function createAGistComment(string $gist_id, array $requestBody): Response
    {
        return $this->post(
            route: '/gists/{gist_id}/comments',
            data: $requestBody,
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * Get a gist comment.
     *
     * @link https://docs.github.com/rest/gists/comments#get-a-gist-comment
     */
    public function getAGistComment(string $gist_id, int $comment_id): Response
    {
        return $this->get(
            route: '/gists/{gist_id}/comments/{comment_id}',
            replace: ['gist_id' => $gist_id, 'comment_id' => $comment_id]
        );
    }

    /**
     * Update a gist comment.
     *
     * @link https://docs.github.com/rest/gists/comments#update-a-gist-comment
     */
    public function updateAGistComment(string $gist_id, int $comment_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/gists/{gist_id}/comments/{comment_id}',
            data: $requestBody,
            replace: ['gist_id' => $gist_id, 'comment_id' => $comment_id]
        );
    }

    /**
     * Delete a gist comment.
     *
     * @link https://docs.github.com/rest/gists/comments#delete-a-gist-comment
     */
    public function deleteAGistComment(string $gist_id, int $comment_id): Response
    {
        return $this->delete(
            route: '/gists/{gist_id}/comments/{comment_id}',
            replace: ['gist_id' => $gist_id, 'comment_id' => $comment_id]
        );
    }

    /**
     * List gist commits.
     *
     * @link https://docs.github.com/rest/gists/gists#list-gist-commits
     */
    public function listGistCommits(string $gist_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/gists/{gist_id}/commits',
            replace: ['gist_id' => $gist_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List gist forks.
     *
     * @link https://docs.github.com/rest/gists/gists#list-gist-forks
     */
    public function listGistForks(string $gist_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/gists/{gist_id}/forks',
            replace: ['gist_id' => $gist_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Fork a gist.
     *
     * @link https://docs.github.com/rest/gists/gists#fork-a-gist
     */
    public function forkAGist(string $gist_id): Response
    {
        return $this->post(
            route: '/gists/{gist_id}/forks',
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * Check if a gist is starred.
     *
     * @link https://docs.github.com/rest/gists/gists#check-if-a-gist-is-starred
     */
    public function checkIfAGistIsStarred(string $gist_id): Response
    {
        return $this->get(
            route: '/gists/{gist_id}/star',
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * Star a gist.
     *
     * @link https://docs.github.com/rest/gists/gists#star-a-gist
     */
    public function starAGist(string $gist_id): Response
    {
        return $this->put(
            route: '/gists/{gist_id}/star',
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * Unstar a gist.
     *
     * @link https://docs.github.com/rest/gists/gists#unstar-a-gist
     */
    public function unstarAGist(string $gist_id): Response
    {
        return $this->delete(
            route: '/gists/{gist_id}/star',
            replace: ['gist_id' => $gist_id]
        );
    }

    /**
     * Get a gist revision.
     *
     * @link https://docs.github.com/rest/gists/gists#get-a-gist-revision
     */
    public function getAGistRevision(string $gist_id, string $sha): Response
    {
        return $this->get(
            route: '/gists/{gist_id}/{sha}',
            replace: ['gist_id' => $gist_id, 'sha' => $sha]
        );
    }

    /**
     * List gists for a user.
     *
     * @link https://docs.github.com/rest/gists/gists#list-gists-for-a-user
     */
    public function listGistsForAUser(
        string $username,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/users/{username}/gists',
            replace: ['username' => $username, 'since' => $since, 'per_page' => $per_page, 'page' => $page]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class SearchClient extends AbstractClient
{
    /**
     * Search code.
     *
     * @link https://docs.github.com/rest/search/search#search-code
     */
    public function searchCode(
        string $q,
        string $sort = null,
        string $order = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/search/code',
            replace: ['q' => $q, 'sort' => $sort, 'order' => $order, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Search commits.
     *
     * @link https://docs.github.com/rest/search/search#search-commits
     */
    public function searchCommits(
        string $q,
        string $sort = null,
        string $order = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/search/commits',
            replace: ['q' => $q, 'sort' => $sort, 'order' => $order, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Search issues and pull requests.
     *
     * @link https://docs.github.com/rest/search/search#search-issues-and-pull-requests
     */
    public function searchIssuesAndPullRequests(
        string $q,
        string $sort = null,
        string $order = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/search/issues',
            replace: ['q' => $q, 'sort' => $sort, 'order' => $order, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Search labels.
     *
     * @link https://docs.github.com/rest/search/search#search-labels
     */
    public function searchLabels(
        int $repository_id,
        string $q,
        string $sort = null,
        string $order = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/search/labels',
            replace: [
                'repository_id' => $repository_id,
                'q' => $q,
                'sort' => $sort,
                'order' => $order,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Search repositories.
     *
     * @link https://docs.github.com/rest/search/search#search-repositories
     */
    public function searchRepositories(
        string $q,
        string $sort = null,
        string $order = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/search/repositories',
            replace: ['q' => $q, 'sort' => $sort, 'order' => $order, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Search topics.
     *
     * @link https://docs.github.com/rest/search/search#search-topics
     */
    public function searchTopics(string $q, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/search/topics',
            replace: ['q' => $q, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Search users.
     *
     * @link https://docs.github.com/rest/search/search#search-users
     */
    public function searchUsers(
        string $q,
        string $sort = null,
        string $order = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/search/users',
            replace: ['q' => $q, 'sort' => $sort, 'order' => $order, 'per_page' => $per_page, 'page' => $page]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class ActivityClient extends AbstractClient
{
    /**
     * List public events.
     *
     * @link https://docs.github.com/rest/activity/events#list-public-events
     */
    public function listPublicEvents(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/events',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get feeds.
     *
     * @link https://docs.github.com/rest/activity/feeds#get-feeds
     */
    public function getFeeds(): Response
    {
        return $this->get(
            route: '/feeds'
        );
    }

    /**
     * List public events for a network of repositories.
     *
     * @link https://docs.github.com/rest/activity/events#list-public-events-for-a-network-of-repositories
     */
    public function listPublicEventsForANetworkOfRepositories(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/networks/{owner}/{repo}/events',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List notifications for the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/notifications#list-notifications-for-the-authenticated-user
     */
    public function listNotificationsForTheAuthenticatedUser(
        bool $all = null,
        bool $participating = null,
        string $since = null,
        string $before = null,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/notifications',
            replace: [
                'all' => $all,
                'participating' => $participating,
                'since' => $since,
                'before' => $before,
                'page' => $page,
                'per_page' => $per_page,
            ]
        );
    }

    /**
     * Mark notifications as read.
     *
     * @link https://docs.github.com/rest/activity/notifications#mark-notifications-as-read
     */
    public function markNotificationsAsRead(array $requestBody = []): Response
    {
        return $this->put(
            route: '/notifications',
            data: $requestBody
        );
    }

    /**
     * Get a thread.
     *
     * @link https://docs.github.com/rest/activity/notifications#get-a-thread
     */
    public function getAThread(int $thread_id): Response
    {
        return $this->get(
            route: '/notifications/threads/{thread_id}',
            replace: ['thread_id' => $thread_id]
        );
    }

    /**
     * Mark a thread as read.
     *
     * @link https://docs.github.com/rest/activity/notifications#mark-a-thread-as-read
     */
    public function markAThreadAsRead(int $thread_id): Response
    {
        return $this->patch(
            route: '/notifications/threads/{thread_id}',
            replace: ['thread_id' => $thread_id]
        );
    }

    /**
     * Get a thread subscription for the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/notifications#get-a-thread-subscription-for-the-authenticated-user
     */
    public function getAThreadSubscriptionForTheAuthenticatedUser(int $thread_id): Response
    {
        return $this->get(
            route: '/notifications/threads/{thread_id}/subscription',
            replace: ['thread_id' => $thread_id]
        );
    }

    /**
     * Set a thread subscription.
     *
     * @link https://docs.github.com/rest/activity/notifications#set-a-thread-subscription
     */
    public function setAThreadSubscription(int $thread_id, array $requestBody = []): Response
    {
        return $this->put(
            route: '/notifications/threads/{thread_id}/subscription',
            data: $requestBody,
            replace: ['thread_id' => $thread_id]
        );
    }

    /**
     * Delete a thread subscription.
     *
     * @link https://docs.github.com/rest/activity/notifications#delete-a-thread-subscription
     */
    public function deleteAThreadSubscription(int $thread_id): Response
    {
        return $this->delete(
            route: '/notifications/threads/{thread_id}/subscription',
            replace: ['thread_id' => $thread_id]
        );
    }

    /**
     * List public organization events.
     *
     * @link https://docs.github.com/rest/activity/events#list-public-organization-events
     */
    public function listPublicOrganizationEvents(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/events',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List repository events.
     *
     * @link https://docs.github.com/rest/activity/events#list-repository-events
     */
    public function listRepositoryEvents(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/events',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List repository notifications for the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/notifications#list-repository-notifications-for-the-authenticated-user
     */
    public function listRepositoryNotificationsForTheAuthenticatedUser(
        string $owner,
        string $repo,
        bool $all = null,
        bool $participating = null,
        string $since = null,
        string $before = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/notifications',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'all' => $all,
                'participating' => $participating,
                'since' => $since,
                'before' => $before,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Mark repository notifications as read.
     *
     * @link https://docs.github.com/rest/activity/notifications#mark-repository-notifications-as-read
     */
    public function markRepositoryNotificationsAsRead(string $owner, string $repo, array $requestBody = []): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/notifications',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List stargazers.
     *
     * @link https://docs.github.com/rest/activity/starring#list-stargazers
     */
    public function listStargazers(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/stargazers',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List watchers.
     *
     * @link https://docs.github.com/rest/activity/watching#list-watchers
     */
    public function listWatchers(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/subscribers',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a repository subscription.
     *
     * @link https://docs.github.com/rest/activity/watching#get-a-repository-subscription
     */
    public function getARepositorySubscription(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/subscription',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Set a repository subscription.
     *
     * @link https://docs.github.com/rest/activity/watching#set-a-repository-subscription
     */
    public function setARepositorySubscription(string $owner, string $repo, array $requestBody = []): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/subscription',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Delete a repository subscription.
     *
     * @link https://docs.github.com/rest/activity/watching#delete-a-repository-subscription
     */
    public function deleteARepositorySubscription(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/subscription',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List repositories starred by the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/starring#list-repositories-starred-by-the-authenticated-user
     */
    public function listRepositoriesStarredByTheAuthenticatedUser(
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/user/starred',
            replace: ['sort' => $sort, 'direction' => $direction, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check if a repository is starred by the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/starring#check-if-a-repository-is-starred-by-the-authenticated-user
     */
    public function checkIfARepositoryIsStarredByTheAuthenticatedUser(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/user/starred/{owner}/{repo}',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Star a repository for the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/starring#star-a-repository-for-the-authenticated-user
     */
    public function starARepositoryForTheAuthenticatedUser(string $owner, string $repo): Response
    {
        return $this->put(
            route: '/user/starred/{owner}/{repo}',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Unstar a repository for the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/starring#unstar-a-repository-for-the-authenticated-user
     */
    public function unstarARepositoryForTheAuthenticatedUser(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/user/starred/{owner}/{repo}',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List repositories watched by the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/watching#list-repositories-watched-by-the-authenticated-user
     */
    public function listRepositoriesWatchedByTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/subscriptions',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List events for the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/events#list-events-for-the-authenticated-user
     */
    public function listEventsForTheAuthenticatedUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/events',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List organization events for the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/events#list-organization-events-for-the-authenticated-user
     */
    public function listOrganizationEventsForTheAuthenticatedUser(
        string $username,
        string $org,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/users/{username}/events/orgs/{org}',
            replace: ['username' => $username, 'org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List public events for a user.
     *
     * @link https://docs.github.com/rest/activity/events#list-public-events-for-a-user
     */
    public function listPublicEventsForAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/events/public',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List events received by the authenticated user.
     *
     * @link https://docs.github.com/rest/activity/events#list-events-received-by-the-authenticated-user
     */
    public function listEventsReceivedByTheAuthenticatedUser(
        string $username,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/users/{username}/received_events',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List public events received by a user.
     *
     * @link https://docs.github.com/rest/activity/events#list-public-events-received-by-a-user
     */
    public function listPublicEventsReceivedByAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/received_events/public',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List repositories starred by a user.
     *
     * @link https://docs.github.com/rest/activity/starring#list-repositories-starred-by-a-user
     */
    public function listRepositoriesStarredByAUser(
        string $username,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/users/{username}/starred',
            replace: [
                'username' => $username,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List repositories watched by a user.
     *
     * @link https://docs.github.com/rest/activity/watching#list-repositories-watched-by-a-user
     */
    public function listRepositoriesWatchedByAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/subscriptions',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }
}

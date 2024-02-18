<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class IssuesClient extends AbstractClient
{
    /**
     * List issues assigned to the authenticated user.
     *
     * @link https://docs.github.com/rest/issues/issues#list-issues-assigned-to-the-authenticated-user
     */
    public function listIssuesAssignedToTheAuthenticatedUser(
        string $filter = null,
        string $state = null,
        string $labels = null,
        string $sort = null,
        string $direction = null,
        string $since = null,
        bool $collab = null,
        bool $orgs = null,
        bool $owned = null,
        bool $pulls = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/issues',
            replace: [
                'filter' => $filter,
                'state' => $state,
                'labels' => $labels,
                'sort' => $sort,
                'direction' => $direction,
                'since' => $since,
                'collab' => $collab,
                'orgs' => $orgs,
                'owned' => $owned,
                'pulls' => $pulls,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List organization issues assigned to the authenticated user.
     *
     * @link https://docs.github.com/rest/issues/issues#list-organization-issues-assigned-to-the-authenticated-user
     */
    public function listOrganizationIssuesAssignedToTheAuthenticatedUser(
        string $org,
        string $filter = null,
        string $state = null,
        string $labels = null,
        string $sort = null,
        string $direction = null,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/issues',
            replace: [
                'org' => $org,
                'filter' => $filter,
                'state' => $state,
                'labels' => $labels,
                'sort' => $sort,
                'direction' => $direction,
                'since' => $since,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List assignees.
     *
     * @link https://docs.github.com/rest/issues/assignees#list-assignees
     */
    public function listAssignees(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/assignees',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check if a user can be assigned.
     *
     * @link https://docs.github.com/rest/issues/assignees#check-if-a-user-can-be-assigned
     */
    public function checkIfAUserCanBeAssigned(string $owner, string $repo, string $assignee): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/assignees/{assignee}',
            replace: ['owner' => $owner, 'repo' => $repo, 'assignee' => $assignee]
        );
    }

    /**
     * List repository issues.
     *
     * @link https://docs.github.com/rest/issues/issues#list-repository-issues
     */
    public function listRepositoryIssues(
        string $owner,
        string $repo,
        string $milestone = null,
        string $state = null,
        string $assignee = null,
        string $creator = null,
        string $mentioned = null,
        string $labels = null,
        string $sort = null,
        string $direction = null,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'milestone' => $milestone,
                'state' => $state,
                'assignee' => $assignee,
                'creator' => $creator,
                'mentioned' => $mentioned,
                'labels' => $labels,
                'sort' => $sort,
                'direction' => $direction,
                'since' => $since,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create an issue.
     *
     * @link https://docs.github.com/rest/issues/issues#create-an-issue
     */
    public function createAnIssue(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/issues',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List issue comments for a repository.
     *
     * @link https://docs.github.com/rest/issues/comments#list-issue-comments-for-a-repository
     */
    public function listIssueCommentsForARepository(
        string $owner,
        string $repo,
        string $sort = null,
        string $direction = null,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/comments',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'sort' => $sort,
                'direction' => $direction,
                'since' => $since,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get an issue comment.
     *
     * @link https://docs.github.com/rest/issues/comments#get-an-issue-comment
     */
    public function getAnIssueComment(string $owner, string $repo, int $comment_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/comments/{comment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Update an issue comment.
     *
     * @link https://docs.github.com/rest/issues/comments#update-an-issue-comment
     */
    public function updateAnIssueComment(string $owner, string $repo, int $comment_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/issues/comments/{comment_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Delete an issue comment.
     *
     * @link https://docs.github.com/rest/issues/comments#delete-an-issue-comment
     */
    public function deleteAnIssueComment(string $owner, string $repo, int $comment_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/issues/comments/{comment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * List issue events for a repository.
     *
     * @link https://docs.github.com/rest/issues/events#list-issue-events-for-a-repository
     */
    public function listIssueEventsForARepository(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/events',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get an issue event.
     *
     * @link https://docs.github.com/rest/issues/events#get-an-issue-event
     */
    public function getAnIssueEvent(string $owner, string $repo, int $event_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/events/{event_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'event_id' => $event_id]
        );
    }

    /**
     * Get an issue.
     *
     * @link https://docs.github.com/rest/issues/issues#get-an-issue
     */
    public function getAnIssue(string $owner, string $repo, int $issue_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/{issue_number}',
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Update an issue.
     *
     * @link https://docs.github.com/rest/issues/issues#update-an-issue
     */
    public function updateAnIssue(string $owner, string $repo, int $issue_number, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/issues/{issue_number}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Add assignees to an issue.
     *
     * @link https://docs.github.com/rest/issues/assignees#add-assignees-to-an-issue
     */
    public function addAssigneesToAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/assignees',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Remove assignees from an issue.
     *
     * @link https://docs.github.com/rest/reference/issues#remove-assignees-from-an-issue
     */
    public function removeAssigneesFromAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        array $requestBody
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/assignees',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Check if a user can be assigned to a issue.
     *
     * @link https://docs.github.com/rest/issues/assignees#check-if-a-user-can-be-assigned-to-a-issue
     */
    public function checkIfAUserCanBeAssignedToAIssue(
        string $owner,
        string $repo,
        int $issue_number,
        string $assignee
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}',
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number, 'assignee' => $assignee]
        );
    }

    /**
     * List issue comments.
     *
     * @link https://docs.github.com/rest/issues/comments#list-issue-comments
     */
    public function listIssueComments(
        string $owner,
        string $repo,
        int $issue_number,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/comments',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'issue_number' => $issue_number,
                'since' => $since,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create an issue comment.
     *
     * @link https://docs.github.com/rest/issues/comments#create-an-issue-comment
     */
    public function createAnIssueComment(string $owner, string $repo, int $issue_number, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/comments',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * List issue events.
     *
     * @link https://docs.github.com/rest/issues/events#list-issue-events
     */
    public function listIssueEvents(
        string $owner,
        string $repo,
        int $issue_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/events',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'issue_number' => $issue_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List labels for an issue.
     *
     * @link https://docs.github.com/rest/issues/labels#list-labels-for-an-issue
     */
    public function listLabelsForAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/labels',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'issue_number' => $issue_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Add labels to an issue.
     *
     * @link https://docs.github.com/rest/issues/labels#add-labels-to-an-issue
     */
    public function addLabelsToAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/labels',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Set labels for an issue.
     *
     * @link https://docs.github.com/rest/issues/labels#set-labels-for-an-issue
     */
    public function setLabelsForAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/labels',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Remove all labels from an issue.
     *
     * @link https://docs.github.com/rest/issues/labels#remove-all-labels-from-an-issue
     */
    public function removeAllLabelsFromAnIssue(string $owner, string $repo, int $issue_number): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/labels',
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Remove a label from an issue.
     *
     * @link https://docs.github.com/rest/issues/labels#remove-a-label-from-an-issue
     */
    public function removeALabelFromAnIssue(string $owner, string $repo, int $issue_number, string $name): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/labels/{name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number, 'name' => $name]
        );
    }

    /**
     * Lock an issue.
     *
     * @link https://docs.github.com/rest/issues/issues#lock-an-issue
     */
    public function lockAnIssue(string $owner, string $repo, int $issue_number, array $requestBody = []): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/lock',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Unlock an issue.
     *
     * @link https://docs.github.com/rest/issues/issues#unlock-an-issue
     */
    public function unlockAnIssue(string $owner, string $repo, int $issue_number): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/lock',
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * List timeline events for an issue.
     *
     * @link https://docs.github.com/rest/issues/timeline#list-timeline-events-for-an-issue
     */
    public function listTimelineEventsForAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/timeline',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'issue_number' => $issue_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List labels for a repository.
     *
     * @link https://docs.github.com/rest/issues/labels#list-labels-for-a-repository
     */
    public function listLabelsForARepository(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/labels',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a label.
     *
     * @link https://docs.github.com/rest/issues/labels#create-a-label
     */
    public function createALabel(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/labels',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a label.
     *
     * @link https://docs.github.com/rest/issues/labels#get-a-label
     */
    public function getALabel(string $owner, string $repo, string $name): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/labels/{name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'name' => $name]
        );
    }

    /**
     * Update a label.
     *
     * @link https://docs.github.com/rest/issues/labels#update-a-label
     */
    public function updateALabel(string $owner, string $repo, string $name, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/labels/{name}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'name' => $name]
        );
    }

    /**
     * Delete a label.
     *
     * @link https://docs.github.com/rest/issues/labels#delete-a-label
     */
    public function deleteALabel(string $owner, string $repo, string $name): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/labels/{name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'name' => $name]
        );
    }

    /**
     * List milestones.
     *
     * @link https://docs.github.com/rest/issues/milestones#list-milestones
     */
    public function listMilestones(
        string $owner,
        string $repo,
        string $state = null,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/milestones',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'state' => $state,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a milestone.
     *
     * @link https://docs.github.com/rest/issues/milestones#create-a-milestone
     */
    public function createAMilestone(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/milestones',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a milestone.
     *
     * @link https://docs.github.com/rest/issues/milestones#get-a-milestone
     */
    public function getAMilestone(string $owner, string $repo, int $milestone_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/milestones/{milestone_number}',
            replace: ['owner' => $owner, 'repo' => $repo, 'milestone_number' => $milestone_number]
        );
    }

    /**
     * Update a milestone.
     *
     * @link https://docs.github.com/rest/issues/milestones#update-a-milestone
     */
    public function updateAMilestone(
        string $owner,
        string $repo,
        int $milestone_number,
        array $requestBody = []
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/milestones/{milestone_number}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'milestone_number' => $milestone_number]
        );
    }

    /**
     * Delete a milestone.
     *
     * @link https://docs.github.com/rest/issues/milestones#delete-a-milestone
     */
    public function deleteAMilestone(string $owner, string $repo, int $milestone_number): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/milestones/{milestone_number}',
            replace: ['owner' => $owner, 'repo' => $repo, 'milestone_number' => $milestone_number]
        );
    }

    /**
     * List labels for issues in a milestone.
     *
     * @link https://docs.github.com/rest/issues/labels#list-labels-for-issues-in-a-milestone
     */
    public function listLabelsForIssuesInAMilestone(
        string $owner,
        string $repo,
        int $milestone_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/milestones/{milestone_number}/labels',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'milestone_number' => $milestone_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List user account issues assigned to the authenticated user.
     *
     * @link https://docs.github.com/rest/issues/issues#list-user-account-issues-assigned-to-the-authenticated-user
     */
    public function listUserAccountIssuesAssignedToTheAuthenticatedUser(
        string $filter = null,
        string $state = null,
        string $labels = null,
        string $sort = null,
        string $direction = null,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/user/issues',
            replace: [
                'filter' => $filter,
                'state' => $state,
                'labels' => $labels,
                'sort' => $sort,
                'direction' => $direction,
                'since' => $since,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }
}

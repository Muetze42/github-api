<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class TeamsClient extends AbstractClient
{
    /**
     * List teams.
     *
     * @link https://docs.github.com/rest/teams/teams#list-teams
     */
    public function listTeams(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/teams',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a team.
     *
     * @link https://docs.github.com/rest/teams/teams#create-a-team
     */
    public function createATeam(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/teams',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get a team by name.
     *
     * @link https://docs.github.com/rest/teams/teams#get-a-team-by-name
     */
    public function getATeamByName(string $org, string $team_slug): Response
    {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}',
            replace: ['org' => $org, 'team_slug' => $team_slug]
        );
    }

    /**
     * Update a team.
     *
     * @link https://docs.github.com/rest/teams/teams#update-a-team
     */
    public function updateATeam(string $org, string $team_slug, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/orgs/{org}/teams/{team_slug}',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug]
        );
    }

    /**
     * Delete a team.
     *
     * @link https://docs.github.com/rest/teams/teams#delete-a-team
     */
    public function deleteATeam(string $org, string $team_slug): Response
    {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}',
            replace: ['org' => $org, 'team_slug' => $team_slug]
        );
    }

    /**
     * List discussions.
     *
     * @link https://docs.github.com/rest/teams/discussions#list-discussions
     */
    public function listDiscussions(
        string $org,
        string $team_slug,
        string $direction = null,
        int $per_page = 100,
        int $page = null,
        string $pinned = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/discussions',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
                'pinned' => $pinned,
            ]
        );
    }

    /**
     * Create a discussion.
     *
     * @link https://docs.github.com/rest/teams/discussions#create-a-discussion
     */
    public function createADiscussion(string $org, string $team_slug, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/teams/{team_slug}/discussions',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug]
        );
    }

    /**
     * Get a discussion.
     *
     * @link https://docs.github.com/rest/teams/discussions#get-a-discussion
     */
    public function getADiscussion(string $org, string $team_slug, int $discussion_number): Response
    {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * Update a discussion.
     *
     * @link https://docs.github.com/rest/teams/discussions#update-a-discussion
     */
    public function updateADiscussion(
        string $org,
        string $team_slug,
        int $discussion_number,
        array $requestBody = []
    ): Response {
        return $this->patch(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * Delete a discussion.
     *
     * @link https://docs.github.com/rest/teams/discussions#delete-a-discussion
     */
    public function deleteADiscussion(string $org, string $team_slug, int $discussion_number): Response
    {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * List discussion comments.
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#list-discussion-comments
     */
    public function listDiscussionComments(
        string $org,
        string $team_slug,
        int $discussion_number,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a discussion comment.
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#create-a-discussion-comment
     */
    public function createADiscussionComment(
        string $org,
        string $team_slug,
        int $discussion_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * Get a discussion comment.
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#get-a-discussion-comment
     */
    public function getADiscussionComment(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
            ]
        );
    }

    /**
     * Update a discussion comment.
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#update-a-discussion-comment
     */
    public function updateADiscussionComment(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}',
            data: $requestBody,
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
            ]
        );
    }

    /**
     * Delete a discussion comment.
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#delete-a-discussion-comment
     */
    public function deleteADiscussionComment(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
            ]
        );
    }

    /**
     * List pending team invitations.
     *
     * @link https://docs.github.com/rest/teams/members#list-pending-team-invitations
     */
    public function listPendingTeamInvitations(
        string $org,
        string $team_slug,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/invitations',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List team members.
     *
     * @link https://docs.github.com/rest/teams/members#list-team-members
     */
    public function listTeamMembers(
        string $org,
        string $team_slug,
        string $role = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/members',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'role' => $role,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get team membership for a user.
     *
     * @link https://docs.github.com/rest/teams/members#get-team-membership-for-a-user
     */
    public function getTeamMembershipForAUser(string $org, string $team_slug, string $username): Response
    {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/memberships/{username}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'username' => $username]
        );
    }

    /**
     * Add or update team membership for a user.
     *
     * @link https://docs.github.com/rest/teams/members#add-or-update-team-membership-for-a-user
     */
    public function addOrUpdateTeamMembershipForAUser(
        string $org,
        string $team_slug,
        string $username,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/orgs/{org}/teams/{team_slug}/memberships/{username}',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug, 'username' => $username]
        );
    }

    /**
     * Remove team membership for a user.
     *
     * @link https://docs.github.com/rest/teams/members#remove-team-membership-for-a-user
     */
    public function removeTeamMembershipForAUser(string $org, string $team_slug, string $username): Response
    {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}/memberships/{username}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'username' => $username]
        );
    }

    /**
     * List team projects.
     *
     * @link https://docs.github.com/rest/teams/teams#list-team-projects
     */
    public function listTeamProjects(string $org, string $team_slug, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/projects',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check team permissions for a project.
     *
     * @link https://docs.github.com/rest/teams/teams#check-team-permissions-for-a-project
     */
    public function checkTeamPermissionsForAProject(string $org, string $team_slug, int $project_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/projects/{project_id}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'project_id' => $project_id]
        );
    }

    /**
     * Add or update team project permissions.
     *
     * @link https://docs.github.com/rest/teams/teams#add-or-update-team-project-permissions
     */
    public function addOrUpdateTeamProjectPermissions(
        string $org,
        string $team_slug,
        int $project_id,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/orgs/{org}/teams/{team_slug}/projects/{project_id}',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug, 'project_id' => $project_id]
        );
    }

    /**
     * Remove a project from a team.
     *
     * @link https://docs.github.com/rest/teams/teams#remove-a-project-from-a-team
     */
    public function removeAProjectFromATeam(string $org, string $team_slug, int $project_id): Response
    {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}/projects/{project_id}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'project_id' => $project_id]
        );
    }

    /**
     * List team repositories.
     *
     * @link https://docs.github.com/rest/teams/teams#list-team-repositories
     */
    public function listTeamRepositories(
        string $org,
        string $team_slug,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/repos',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check team permissions for a repository.
     *
     * @link https://docs.github.com/rest/teams/teams#check-team-permissions-for-a-repository
     */
    public function checkTeamPermissionsForARepository(
        string $org,
        string $team_slug,
        string $owner,
        string $repo
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Add or update team repository permissions.
     *
     * @link https://docs.github.com/rest/teams/teams#add-or-update-team-repository-permissions
     */
    public function addOrUpdateTeamRepositoryPermissions(
        string $org,
        string $team_slug,
        string $owner,
        string $repo,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Remove a repository from a team.
     *
     * @link https://docs.github.com/rest/teams/teams#remove-a-repository-from-a-team
     */
    public function removeARepositoryFromATeam(string $org, string $team_slug, string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List child teams.
     *
     * @link https://docs.github.com/rest/teams/teams#list-child-teams
     */
    public function listChildTeams(string $org, string $team_slug, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/teams',
            replace: ['org' => $org, 'team_slug' => $team_slug, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a team (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#get-a-team-legacy
     */
    public function getATeamLegacy(int $team_id): Response
    {
        return $this->get(
            route: '/teams/{team_id}',
            replace: ['team_id' => $team_id]
        );
    }

    /**
     * Update a team (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#update-a-team-legacy
     */
    public function updateATeamLegacy(int $team_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/teams/{team_id}',
            data: $requestBody,
            replace: ['team_id' => $team_id]
        );
    }

    /**
     * Delete a team (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#delete-a-team-legacy
     */
    public function deleteATeamLegacy(int $team_id): Response
    {
        return $this->delete(
            route: '/teams/{team_id}',
            replace: ['team_id' => $team_id]
        );
    }

    /**
     * List discussions (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussions#list-discussions-legacy
     */
    public function listDiscussionsLegacy(
        int $team_id,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/teams/{team_id}/discussions',
            replace: ['team_id' => $team_id, 'direction' => $direction, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a discussion (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussions#create-a-discussion-legacy
     */
    public function createADiscussionLegacy(int $team_id, array $requestBody): Response
    {
        return $this->post(
            route: '/teams/{team_id}/discussions',
            data: $requestBody,
            replace: ['team_id' => $team_id]
        );
    }

    /**
     * Get a discussion (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussions#get-a-discussion-legacy
     */
    public function getADiscussionLegacy(int $team_id, int $discussion_number): Response
    {
        return $this->get(
            route: '/teams/{team_id}/discussions/{discussion_number}',
            replace: ['team_id' => $team_id, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * Update a discussion (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussions#update-a-discussion-legacy
     */
    public function updateADiscussionLegacy(int $team_id, int $discussion_number, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/teams/{team_id}/discussions/{discussion_number}',
            data: $requestBody,
            replace: ['team_id' => $team_id, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * Delete a discussion (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussions#delete-a-discussion-legacy
     */
    public function deleteADiscussionLegacy(int $team_id, int $discussion_number): Response
    {
        return $this->delete(
            route: '/teams/{team_id}/discussions/{discussion_number}',
            replace: ['team_id' => $team_id, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * List discussion comments (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#list-discussion-comments-legacy
     */
    public function listDiscussionCommentsLegacy(
        int $team_id,
        int $discussion_number,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/teams/{team_id}/discussions/{discussion_number}/comments',
            replace: [
                'team_id' => $team_id,
                'discussion_number' => $discussion_number,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a discussion comment (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#create-a-discussion-comment-legacy
     */
    public function createADiscussionCommentLegacy(int $team_id, int $discussion_number, array $requestBody): Response
    {
        return $this->post(
            route: '/teams/{team_id}/discussions/{discussion_number}/comments',
            data: $requestBody,
            replace: ['team_id' => $team_id, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * Get a discussion comment (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#get-a-discussion-comment-legacy
     */
    public function getADiscussionCommentLegacy(int $team_id, int $discussion_number, int $comment_number): Response
    {
        return $this->get(
            route: '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}',
            replace: [
                'team_id' => $team_id,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
            ]
        );
    }

    /**
     * Update a discussion comment (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#update-a-discussion-comment-legacy
     */
    public function updateADiscussionCommentLegacy(
        int $team_id,
        int $discussion_number,
        int $comment_number,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}',
            data: $requestBody,
            replace: [
                'team_id' => $team_id,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
            ]
        );
    }

    /**
     * Delete a discussion comment (Legacy).
     *
     * @link https://docs.github.com/rest/teams/discussion-comments#delete-a-discussion-comment-legacy
     */
    public function deleteADiscussionCommentLegacy(int $team_id, int $discussion_number, int $comment_number): Response
    {
        return $this->delete(
            route: '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}',
            replace: [
                'team_id' => $team_id,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
            ]
        );
    }

    /**
     * List pending team invitations (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#list-pending-team-invitations-legacy
     */
    public function listPendingTeamInvitationsLegacy(int $team_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/teams/{team_id}/invitations',
            replace: ['team_id' => $team_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List team members (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#list-team-members-legacy
     */
    public function listTeamMembersLegacy(
        int $team_id,
        string $role = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/teams/{team_id}/members',
            replace: ['team_id' => $team_id, 'role' => $role, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get team member (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#get-team-member-legacy
     */
    public function getTeamMemberLegacy(int $team_id, string $username): Response
    {
        return $this->get(
            route: '/teams/{team_id}/members/{username}',
            replace: ['team_id' => $team_id, 'username' => $username]
        );
    }

    /**
     * Add team member (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#add-team-member-legacy
     */
    public function addTeamMemberLegacy(int $team_id, string $username): Response
    {
        return $this->put(
            route: '/teams/{team_id}/members/{username}',
            replace: ['team_id' => $team_id, 'username' => $username]
        );
    }

    /**
     * Remove team member (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#remove-team-member-legacy
     */
    public function removeTeamMemberLegacy(int $team_id, string $username): Response
    {
        return $this->delete(
            route: '/teams/{team_id}/members/{username}',
            replace: ['team_id' => $team_id, 'username' => $username]
        );
    }

    /**
     * Get team membership for a user (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#get-team-membership-for-a-user-legacy
     */
    public function getTeamMembershipForAUserLegacy(int $team_id, string $username): Response
    {
        return $this->get(
            route: '/teams/{team_id}/memberships/{username}',
            replace: ['team_id' => $team_id, 'username' => $username]
        );
    }

    /**
     * Add or update team membership for a user (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#add-or-update-team-membership-for-a-user-legacy
     */
    public function addOrUpdateTeamMembershipForAUserLegacy(
        int $team_id,
        string $username,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/teams/{team_id}/memberships/{username}',
            data: $requestBody,
            replace: ['team_id' => $team_id, 'username' => $username]
        );
    }

    /**
     * Remove team membership for a user (Legacy).
     *
     * @link https://docs.github.com/rest/teams/members#remove-team-membership-for-a-user-legacy
     */
    public function removeTeamMembershipForAUserLegacy(int $team_id, string $username): Response
    {
        return $this->delete(
            route: '/teams/{team_id}/memberships/{username}',
            replace: ['team_id' => $team_id, 'username' => $username]
        );
    }

    /**
     * List team projects (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#list-team-projects-legacy
     */
    public function listTeamProjectsLegacy(int $team_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/teams/{team_id}/projects',
            replace: ['team_id' => $team_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check team permissions for a project (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#check-team-permissions-for-a-project-legacy
     */
    public function checkTeamPermissionsForAProjectLegacy(int $team_id, int $project_id): Response
    {
        return $this->get(
            route: '/teams/{team_id}/projects/{project_id}',
            replace: ['team_id' => $team_id, 'project_id' => $project_id]
        );
    }

    /**
     * Add or update team project permissions (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#add-or-update-team-project-permissions-legacy
     */
    public function addOrUpdateTeamProjectPermissionsLegacy(
        int $team_id,
        int $project_id,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/teams/{team_id}/projects/{project_id}',
            data: $requestBody,
            replace: ['team_id' => $team_id, 'project_id' => $project_id]
        );
    }

    /**
     * Remove a project from a team (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#remove-a-project-from-a-team-legacy
     */
    public function removeAProjectFromATeamLegacy(int $team_id, int $project_id): Response
    {
        return $this->delete(
            route: '/teams/{team_id}/projects/{project_id}',
            replace: ['team_id' => $team_id, 'project_id' => $project_id]
        );
    }

    /**
     * List team repositories (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#list-team-repositories-legacy
     */
    public function listTeamRepositoriesLegacy(int $team_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/teams/{team_id}/repos',
            replace: ['team_id' => $team_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check team permissions for a repository (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#check-team-permissions-for-a-repository-legacy
     */
    public function checkTeamPermissionsForARepositoryLegacy(int $team_id, string $owner, string $repo): Response
    {
        return $this->get(
            route: '/teams/{team_id}/repos/{owner}/{repo}',
            replace: ['team_id' => $team_id, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Add or update team repository permissions (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#add-or-update-team-repository-permissions-legacy
     */
    public function addOrUpdateTeamRepositoryPermissionsLegacy(
        int $team_id,
        string $owner,
        string $repo,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/teams/{team_id}/repos/{owner}/{repo}',
            data: $requestBody,
            replace: ['team_id' => $team_id, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Remove a repository from a team (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#remove-a-repository-from-a-team-legacy
     */
    public function removeARepositoryFromATeamLegacy(int $team_id, string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/teams/{team_id}/repos/{owner}/{repo}',
            replace: ['team_id' => $team_id, 'owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List child teams (Legacy).
     *
     * @link https://docs.github.com/rest/teams/teams#list-child-teams-legacy
     */
    public function listChildTeamsLegacy(int $team_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/teams/{team_id}/teams',
            replace: ['team_id' => $team_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List teams for the authenticated user.
     *
     * @link https://docs.github.com/rest/teams/teams#list-teams-for-the-authenticated-user
     */
    public function listTeamsForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/teams',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }
}

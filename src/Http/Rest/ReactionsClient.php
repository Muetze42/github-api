<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class ReactionsClient extends AbstractClient
{
    /**
     * List reactions for a team discussion comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-a-team-discussion-comment
     */
    public function listReactionsForATeamDiscussionComment(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for a team discussion comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-a-team-discussion-comment
     */
    public function createReactionForATeamDiscussionComment(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions',
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
     * Delete team discussion comment reaction.
     *
     * @link https://docs.github.com/rest/reactions/reactions#delete-team-discussion-comment-reaction
     */
    public function deleteTeamDiscussionCommentReaction(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
        int $reaction_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
                'reaction_id' => $reaction_id,
            ]
        );
    }

    /**
     * List reactions for a team discussion.
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-a-team-discussion
     */
    public function listReactionsForATeamDiscussion(
        string $org,
        string $team_slug,
        int $discussion_number,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for a team discussion.
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-a-team-discussion
     */
    public function createReactionForATeamDiscussion(
        string $org,
        string $team_slug,
        int $discussion_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions',
            data: $requestBody,
            replace: ['org' => $org, 'team_slug' => $team_slug, 'discussion_number' => $discussion_number]
        );
    }

    /**
     * Delete team discussion reaction.
     *
     * @link https://docs.github.com/rest/reactions/reactions#delete-team-discussion-reaction
     */
    public function deleteTeamDiscussionReaction(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $reaction_id
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}',
            replace: [
                'org' => $org,
                'team_slug' => $team_slug,
                'discussion_number' => $discussion_number,
                'reaction_id' => $reaction_id,
            ]
        );
    }

    /**
     * List reactions for a commit comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-a-commit-comment
     */
    public function listReactionsForACommitComment(
        string $owner,
        string $repo,
        int $comment_id,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/comments/{comment_id}/reactions',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'comment_id' => $comment_id,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for a commit comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-a-commit-comment
     */
    public function createReactionForACommitComment(
        string $owner,
        string $repo,
        int $comment_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/comments/{comment_id}/reactions',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Delete a commit comment reaction.
     *
     * @link https://docs.github.com/rest/reactions/reactions#delete-a-commit-comment-reaction
     */
    public function deleteACommitCommentReaction(
        string $owner,
        string $repo,
        int $comment_id,
        int $reaction_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id, 'reaction_id' => $reaction_id]
        );
    }

    /**
     * List reactions for an issue comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-an-issue-comment
     */
    public function listReactionsForAnIssueComment(
        string $owner,
        string $repo,
        int $comment_id,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/comments/{comment_id}/reactions',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'comment_id' => $comment_id,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for an issue comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-an-issue-comment
     */
    public function createReactionForAnIssueComment(
        string $owner,
        string $repo,
        int $comment_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/issues/comments/{comment_id}/reactions',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Delete an issue comment reaction.
     *
     * @link https://docs.github.com/rest/reactions/reactions#delete-an-issue-comment-reaction
     */
    public function deleteAnIssueCommentReaction(
        string $owner,
        string $repo,
        int $comment_id,
        int $reaction_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id, 'reaction_id' => $reaction_id]
        );
    }

    /**
     * List reactions for an issue.
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-an-issue
     */
    public function listReactionsForAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/reactions',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'issue_number' => $issue_number,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for an issue.
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-an-issue
     */
    public function createReactionForAnIssue(
        string $owner,
        string $repo,
        int $issue_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/reactions',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'issue_number' => $issue_number]
        );
    }

    /**
     * Delete an issue reaction.
     *
     * @link https://docs.github.com/rest/reactions/reactions#delete-an-issue-reaction
     */
    public function deleteAnIssueReaction(string $owner, string $repo, int $issue_number, int $reaction_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'issue_number' => $issue_number,
                'reaction_id' => $reaction_id,
            ]
        );
    }

    /**
     * List reactions for a pull request review comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-a-pull-request-review-comment
     */
    public function listReactionsForAPullRequestReviewComment(
        string $owner,
        string $repo,
        int $comment_id,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'comment_id' => $comment_id,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for a pull request review comment.
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-a-pull-request-review-comment
     */
    public function createReactionForAPullRequestReviewComment(
        string $owner,
        string $repo,
        int $comment_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Delete a pull request comment reaction.
     *
     * @link https://docs.github.com/rest/reactions/reactions#delete-a-pull-request-comment-reaction
     */
    public function deleteAPullRequestCommentReaction(
        string $owner,
        string $repo,
        int $comment_id,
        int $reaction_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id, 'reaction_id' => $reaction_id]
        );
    }

    /**
     * List reactions for a release.
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-a-release
     */
    public function listReactionsForARelease(
        string $owner,
        string $repo,
        int $release_id,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/releases/{release_id}/reactions',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'release_id' => $release_id,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for a release.
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-a-release
     */
    public function createReactionForARelease(
        string $owner,
        string $repo,
        int $release_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/releases/{release_id}/reactions',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'release_id' => $release_id]
        );
    }

    /**
     * Delete a release reaction.
     *
     * @link https://docs.github.com/rest/reactions/reactions#delete-a-release-reaction
     */
    public function deleteAReleaseReaction(string $owner, string $repo, int $release_id, int $reaction_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'release_id' => $release_id, 'reaction_id' => $reaction_id]
        );
    }

    /**
     * List reactions for a team discussion comment (Legacy).
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-a-team-discussion-comment-legacy
     */
    public function listReactionsForATeamDiscussionCommentLegacy(
        int $team_id,
        int $discussion_number,
        int $comment_number,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions',
            replace: [
                'team_id' => $team_id,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for a team discussion comment (Legacy).
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-a-team-discussion-comment-legacy
     */
    public function createReactionForATeamDiscussionCommentLegacy(
        int $team_id,
        int $discussion_number,
        int $comment_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions',
            data: $requestBody,
            replace: [
                'team_id' => $team_id,
                'discussion_number' => $discussion_number,
                'comment_number' => $comment_number,
            ]
        );
    }

    /**
     * List reactions for a team discussion (Legacy).
     *
     * @link https://docs.github.com/rest/reactions/reactions#list-reactions-for-a-team-discussion-legacy
     */
    public function listReactionsForATeamDiscussionLegacy(
        int $team_id,
        int $discussion_number,
        string $content = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/teams/{team_id}/discussions/{discussion_number}/reactions',
            replace: [
                'team_id' => $team_id,
                'discussion_number' => $discussion_number,
                'content' => $content,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create reaction for a team discussion (Legacy).
     *
     * @link https://docs.github.com/rest/reactions/reactions#create-reaction-for-a-team-discussion-legacy
     */
    public function createReactionForATeamDiscussionLegacy(
        int $team_id,
        int $discussion_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/teams/{team_id}/discussions/{discussion_number}/reactions',
            data: $requestBody,
            replace: ['team_id' => $team_id, 'discussion_number' => $discussion_number]
        );
    }
}

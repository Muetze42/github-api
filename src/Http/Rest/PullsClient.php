<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class PullsClient extends AbstractClient
{
    /**
     * List pull requests.
     *
     * @link https://docs.github.com/rest/pulls/pulls#list-pull-requests
     */
    public function listPullRequests(
        string $owner,
        string $repo,
        string $state = null,
        string $head = null,
        string $base = null,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'state' => $state,
                'head' => $head,
                'base' => $base,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a pull request.
     *
     * @link https://docs.github.com/rest/pulls/pulls#create-a-pull-request
     */
    public function createAPullRequest(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List review comments in a repository.
     *
     * @link https://docs.github.com/rest/pulls/comments#list-review-comments-in-a-repository
     */
    public function listReviewCommentsInARepository(
        string $owner,
        string $repo,
        string $sort = null,
        string $direction = null,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/comments',
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
     * Get a review comment for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/comments#get-a-review-comment-for-a-pull-request
     */
    public function getAReviewCommentForAPullRequest(string $owner, string $repo, int $comment_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/comments/{comment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Update a review comment for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/comments#update-a-review-comment-for-a-pull-request
     */
    public function updateAReviewCommentForAPullRequest(
        string $owner,
        string $repo,
        int $comment_id,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/pulls/comments/{comment_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Delete a review comment for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/comments#delete-a-review-comment-for-a-pull-request
     */
    public function deleteAReviewCommentForAPullRequest(string $owner, string $repo, int $comment_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/pulls/comments/{comment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Get a pull request.
     *
     * @link https://docs.github.com/rest/pulls/pulls#get-a-pull-request
     */
    public function getAPullRequest(string $owner, string $repo, int $pull_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}',
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * Update a pull request.
     *
     * @link https://docs.github.com/rest/pulls/pulls#update-a-pull-request
     */
    public function updateAPullRequest(string $owner, string $repo, int $pull_number, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * List review comments on a pull request.
     *
     * @link https://docs.github.com/rest/pulls/comments#list-review-comments-on-a-pull-request
     */
    public function listReviewCommentsOnAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        string $sort = null,
        string $direction = null,
        string $since = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/comments',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'pull_number' => $pull_number,
                'sort' => $sort,
                'direction' => $direction,
                'since' => $since,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a review comment for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/comments#create-a-review-comment-for-a-pull-request
     */
    public function createAReviewCommentForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/comments',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * Create a reply for a review comment.
     *
     * @link https://docs.github.com/rest/pulls/comments#create-a-reply-for-a-review-comment
     */
    public function createAReplyForAReviewComment(
        string $owner,
        string $repo,
        int $pull_number,
        int $comment_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number, 'comment_id' => $comment_id]
        );
    }

    /**
     * List commits on a pull request.
     *
     * @link https://docs.github.com/rest/pulls/pulls#list-commits-on-a-pull-request
     */
    public function listCommitsOnAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/commits',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'pull_number' => $pull_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List pull requests files.
     *
     * @link https://docs.github.com/rest/pulls/pulls#list-pull-requests-files
     */
    public function listPullRequestsFiles(
        string $owner,
        string $repo,
        int $pull_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/files',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'pull_number' => $pull_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Check if a pull request has been merged.
     *
     * @link https://docs.github.com/rest/pulls/pulls#check-if-a-pull-request-has-been-merged
     */
    public function checkIfAPullRequestHasBeenMerged(string $owner, string $repo, int $pull_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/merge',
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * Merge a pull request.
     *
     * @link https://docs.github.com/rest/pulls/pulls#merge-a-pull-request
     */
    public function mergeAPullRequest(string $owner, string $repo, int $pull_number, array $requestBody = []): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/merge',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * Get all requested reviewers for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/review-requests#get-all-requested-reviewers-for-a-pull-request
     */
    public function getAllRequestedReviewersForAPullRequest(string $owner, string $repo, int $pull_number): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers',
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * Request reviewers for a pull request.
     *
     * @link https://docs.github.com/rest/reference/pulls#request-reviewers-for-a-pull-request
     */
    public function requestReviewersForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * Remove requested reviewers from a pull request.
     *
     * @link https://docs.github.com/rest/pulls/review-requests#remove-requested-reviewers-from-a-pull-request
     */
    public function removeRequestedReviewersFromAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        array $requestBody
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * List reviews for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/reviews#list-reviews-for-a-pull-request
     */
    public function listReviewsForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'pull_number' => $pull_number,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a review for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/reviews#create-a-review-for-a-pull-request
     */
    public function createAReviewForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }

    /**
     * Get a review for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/reviews#get-a-review-for-a-pull-request
     */
    public function getAReviewForAPullRequest(string $owner, string $repo, int $pull_number, int $review_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number, 'review_id' => $review_id]
        );
    }

    /**
     * Update a review for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/reviews#update-a-review-for-a-pull-request
     */
    public function updateAReviewForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number, 'review_id' => $review_id]
        );
    }

    /**
     * Delete a pending review for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/reviews#delete-a-pending-review-for-a-pull-request
     */
    public function deleteAPendingReviewForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number, 'review_id' => $review_id]
        );
    }

    /**
     * List comments for a pull request review.
     *
     * @link https://docs.github.com/rest/pulls/reviews#list-comments-for-a-pull-request-review
     */
    public function listCommentsForAPullRequestReview(
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'pull_number' => $pull_number,
                'review_id' => $review_id,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Dismiss a review for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/reviews#dismiss-a-review-for-a-pull-request
     */
    public function dismissAReviewForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number, 'review_id' => $review_id]
        );
    }

    /**
     * Submit a review for a pull request.
     *
     * @link https://docs.github.com/rest/pulls/reviews#submit-a-review-for-a-pull-request
     */
    public function submitAReviewForAPullRequest(
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number, 'review_id' => $review_id]
        );
    }

    /**
     * Update a pull request branch.
     *
     * @link https://docs.github.com/rest/pulls/pulls#update-a-pull-request-branch
     */
    public function updateAPullRequestBranch(
        string $owner,
        string $repo,
        int $pull_number,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/pulls/{pull_number}/update-branch',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'pull_number' => $pull_number]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class GitClient extends AbstractClient
{
    /**
     * Create a blob.
     *
     * @link https://docs.github.com/rest/git/blobs#create-a-blob
     */
    public function createABlob(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/git/blobs',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a blob.
     *
     * @link https://docs.github.com/rest/git/blobs#get-a-blob
     */
    public function getABlob(string $owner, string $repo, string $file_sha): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/git/blobs/{file_sha}',
            replace: ['owner' => $owner, 'repo' => $repo, 'file_sha' => $file_sha]
        );
    }

    /**
     * Create a commit.
     *
     * @link https://docs.github.com/rest/git/commits#create-a-commit
     */
    public function createACommit(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/git/commits',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a commit object.
     *
     * @link https://docs.github.com/rest/git/commits#get-a-commit-object
     */
    public function getACommitObject(string $owner, string $repo, string $commit_sha): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/git/commits/{commit_sha}',
            replace: ['owner' => $owner, 'repo' => $repo, 'commit_sha' => $commit_sha]
        );
    }

    /**
     * List matching references.
     *
     * @link https://docs.github.com/rest/git/refs#list-matching-references
     */
    public function listMatchingReferences(string $owner, string $repo, string $ref): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/git/matching-refs/{ref}',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * Get a reference.
     *
     * @link https://docs.github.com/rest/git/refs#get-a-reference
     */
    public function getAReference(string $owner, string $repo, string $ref): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/git/ref/{ref}',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * Create a reference.
     *
     * @link https://docs.github.com/rest/git/refs#create-a-reference
     */
    public function createAReference(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/git/refs',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Update a reference.
     *
     * @link https://docs.github.com/rest/git/refs#update-a-reference
     */
    public function updateAReference(string $owner, string $repo, string $ref, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/git/refs/{ref}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * Delete a reference.
     *
     * @link https://docs.github.com/rest/git/refs#delete-a-reference
     */
    public function deleteAReference(string $owner, string $repo, string $ref): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/git/refs/{ref}',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * Create a tag object.
     *
     * @link https://docs.github.com/rest/git/tags#create-a-tag-object
     */
    public function createATagObject(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/git/tags',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a tag.
     *
     * @link https://docs.github.com/rest/git/tags#get-a-tag
     */
    public function getATag(string $owner, string $repo, string $tag_sha): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/git/tags/{tag_sha}',
            replace: ['owner' => $owner, 'repo' => $repo, 'tag_sha' => $tag_sha]
        );
    }

    /**
     * Create a tree.
     *
     * @link https://docs.github.com/rest/git/trees#create-a-tree
     */
    public function createATree(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/git/trees',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a tree.
     *
     * @link https://docs.github.com/rest/git/trees#get-a-tree
     */
    public function getATree(string $owner, string $repo, string $tree_sha, string $recursive = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/git/trees/{tree_sha}',
            replace: ['owner' => $owner, 'repo' => $repo, 'tree_sha' => $tree_sha, 'recursive' => $recursive]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class DependencyGraphClient extends AbstractClient
{
    /**
     * Get a diff of the dependencies between commits.
     *
     * @link https://docs.github.com/rest/dependency-graph/dependency-review#get-a-diff-of-the-dependencies-between-commits
     */
    public function getADiffOfTheDependenciesBetweenCommits(
        string $owner,
        string $repo,
        string $basehead,
        string $name = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/dependency-graph/compare/{basehead}',
            replace: ['owner' => $owner, 'repo' => $repo, 'basehead' => $basehead, 'name' => $name]
        );
    }

    /**
     * Export a software bill of materials (SBOM) for a repository.
     *
     * @link https://docs.github.com/rest/dependency-graph/sboms#export-a-software-bill-of-materials-sbom-for-a-repository
     */
    public function exportASoftwareBillOfMaterialsSBOMForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/dependency-graph/sbom',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a snapshot of dependencies for a repository.
     *
     * @link https://docs.github.com/rest/dependency-graph/dependency-submission#create-a-snapshot-of-dependencies-for-a-repository
     */
    public function createASnapshotOfDependenciesForARepository(
        string $owner,
        string $repo,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/dependency-graph/snapshots',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }
}

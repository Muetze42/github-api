<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class ProjectsClient extends AbstractClient
{
    /**
     * List organization projects.
     *
     * @link https://docs.github.com/rest/projects/projects#list-organization-projects
     */
    public function listOrganizationProjects(
        string $org,
        string $state = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/projects',
            replace: ['org' => $org, 'state' => $state, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create an organization project.
     *
     * @link https://docs.github.com/rest/projects/projects#create-an-organization-project
     */
    public function createAnOrganizationProject(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/projects',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get a project card.
     *
     * @link https://docs.github.com/rest/projects/cards#get-a-project-card
     */
    public function getAProjectCard(int $card_id): Response
    {
        return $this->get(
            route: '/projects/columns/cards/{card_id}',
            replace: ['card_id' => $card_id]
        );
    }

    /**
     * Update an existing project card.
     *
     * @link https://docs.github.com/rest/projects/cards#update-an-existing-project-card
     */
    public function updateAnExistingProjectCard(int $card_id, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/projects/columns/cards/{card_id}',
            data: $requestBody,
            replace: ['card_id' => $card_id]
        );
    }

    /**
     * Delete a project card.
     *
     * @link https://docs.github.com/rest/projects/cards#delete-a-project-card
     */
    public function deleteAProjectCard(int $card_id): Response
    {
        return $this->delete(
            route: '/projects/columns/cards/{card_id}',
            replace: ['card_id' => $card_id]
        );
    }

    /**
     * Move a project card.
     *
     * @link https://docs.github.com/rest/projects/cards#move-a-project-card
     */
    public function moveAProjectCard(int $card_id, array $requestBody): Response
    {
        return $this->post(
            route: '/projects/columns/cards/{card_id}/moves',
            data: $requestBody,
            replace: ['card_id' => $card_id]
        );
    }

    /**
     * Get a project column.
     *
     * @link https://docs.github.com/rest/projects/columns#get-a-project-column
     */
    public function getAProjectColumn(int $column_id): Response
    {
        return $this->get(
            route: '/projects/columns/{column_id}',
            replace: ['column_id' => $column_id]
        );
    }

    /**
     * Update an existing project column.
     *
     * @link https://docs.github.com/rest/projects/columns#update-an-existing-project-column
     */
    public function updateAnExistingProjectColumn(int $column_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/projects/columns/{column_id}',
            data: $requestBody,
            replace: ['column_id' => $column_id]
        );
    }

    /**
     * Delete a project column.
     *
     * @link https://docs.github.com/rest/projects/columns#delete-a-project-column
     */
    public function deleteAProjectColumn(int $column_id): Response
    {
        return $this->delete(
            route: '/projects/columns/{column_id}',
            replace: ['column_id' => $column_id]
        );
    }

    /**
     * List project cards.
     *
     * @link https://docs.github.com/rest/projects/cards#list-project-cards
     */
    public function listProjectCards(
        int $column_id,
        string $archived_state = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/projects/columns/{column_id}/cards',
            replace: [
                'column_id' => $column_id,
                'archived_state' => $archived_state,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a project card.
     *
     * @link https://docs.github.com/rest/projects/cards#create-a-project-card
     */
    public function createAProjectCard(int $column_id, array $requestBody): Response
    {
        return $this->post(
            route: '/projects/columns/{column_id}/cards',
            data: $requestBody,
            replace: ['column_id' => $column_id]
        );
    }

    /**
     * Move a project column.
     *
     * @link https://docs.github.com/rest/projects/columns#move-a-project-column
     */
    public function moveAProjectColumn(int $column_id, array $requestBody): Response
    {
        return $this->post(
            route: '/projects/columns/{column_id}/moves',
            data: $requestBody,
            replace: ['column_id' => $column_id]
        );
    }

    /**
     * Get a project.
     *
     * @link https://docs.github.com/rest/projects/projects#get-a-project
     */
    public function getAProject(int $project_id): Response
    {
        return $this->get(
            route: '/projects/{project_id}',
            replace: ['project_id' => $project_id]
        );
    }

    /**
     * Update a project.
     *
     * @link https://docs.github.com/rest/projects/projects#update-a-project
     */
    public function updateAProject(int $project_id, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/projects/{project_id}',
            data: $requestBody,
            replace: ['project_id' => $project_id]
        );
    }

    /**
     * Delete a project.
     *
     * @link https://docs.github.com/rest/projects/projects#delete-a-project
     */
    public function deleteAProject(int $project_id): Response
    {
        return $this->delete(
            route: '/projects/{project_id}',
            replace: ['project_id' => $project_id]
        );
    }

    /**
     * List project collaborators.
     *
     * @link https://docs.github.com/rest/projects/collaborators#list-project-collaborators
     */
    public function listProjectCollaborators(
        int $project_id,
        string $affiliation = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/projects/{project_id}/collaborators',
            replace: [
                'project_id' => $project_id,
                'affiliation' => $affiliation,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Add project collaborator.
     *
     * @link https://docs.github.com/rest/projects/collaborators#add-project-collaborator
     */
    public function addProjectCollaborator(int $project_id, string $username, array $requestBody = []): Response
    {
        return $this->put(
            route: '/projects/{project_id}/collaborators/{username}',
            data: $requestBody,
            replace: ['project_id' => $project_id, 'username' => $username]
        );
    }

    /**
     * Remove user as a collaborator.
     *
     * @link https://docs.github.com/rest/projects/collaborators#remove-user-as-a-collaborator
     */
    public function removeUserAsACollaborator(int $project_id, string $username): Response
    {
        return $this->delete(
            route: '/projects/{project_id}/collaborators/{username}',
            replace: ['project_id' => $project_id, 'username' => $username]
        );
    }

    /**
     * Get project permission for a user.
     *
     * @link https://docs.github.com/rest/projects/collaborators#get-project-permission-for-a-user
     */
    public function getProjectPermissionForAUser(int $project_id, string $username): Response
    {
        return $this->get(
            route: '/projects/{project_id}/collaborators/{username}/permission',
            replace: ['project_id' => $project_id, 'username' => $username]
        );
    }

    /**
     * List project columns.
     *
     * @link https://docs.github.com/rest/projects/columns#list-project-columns
     */
    public function listProjectColumns(int $project_id, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/projects/{project_id}/columns',
            replace: ['project_id' => $project_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a project column.
     *
     * @link https://docs.github.com/rest/projects/columns#create-a-project-column
     */
    public function createAProjectColumn(int $project_id, array $requestBody): Response
    {
        return $this->post(
            route: '/projects/{project_id}/columns',
            data: $requestBody,
            replace: ['project_id' => $project_id]
        );
    }

    /**
     * List repository projects.
     *
     * @link https://docs.github.com/rest/projects/projects#list-repository-projects
     */
    public function listRepositoryProjects(
        string $owner,
        string $repo,
        string $state = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/projects',
            replace: ['owner' => $owner, 'repo' => $repo, 'state' => $state, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a repository project.
     *
     * @link https://docs.github.com/rest/projects/projects#create-a-repository-project
     */
    public function createARepositoryProject(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/projects',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a user project.
     *
     * @link https://docs.github.com/rest/projects/projects#create-a-user-project
     */
    public function createAUserProject(array $requestBody): Response
    {
        return $this->post(
            route: '/user/projects',
            data: $requestBody
        );
    }

    /**
     * List user projects.
     *
     * @link https://docs.github.com/rest/projects/projects#list-user-projects
     */
    public function listUserProjects(
        string $username,
        string $state = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/users/{username}/projects',
            replace: ['username' => $username, 'state' => $state, 'per_page' => $per_page, 'page' => $page]
        );
    }
}

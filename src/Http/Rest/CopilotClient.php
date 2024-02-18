<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class CopilotClient extends AbstractClient
{
    /**
     * Get Copilot for Business seat information and settings for an organization.
     *
     * @link https://docs.github.com/rest/copilot/copilot-for-business#get-copilot-for-business-seat-information-and-settings-for-an-organization
     */
    public function getCopilotForBusinessSeatInformationAndSettingsForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/copilot/billing',
            replace: ['org' => $org]
        );
    }

    /**
     * List all Copilot for Business seat assignments for an organization.
     *
     * @link https://docs.github.com/rest/copilot/copilot-for-business#list-all-copilot-for-business-seat-assignments-for-an-organization
     */
    public function listAllCopilotForBusinessSeatAssignmentsForAnOrganization(
        string $org,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/orgs/{org}/copilot/billing/seats',
            replace: ['org' => $org, 'page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Add teams to the Copilot for Business subscription for an organization.
     *
     * @link https://docs.github.com/rest/copilot/copilot-for-business#add-teams-to-the-copilot-for-business-subscription-for-an-organization
     */
    public function addTeamsToTheCopilotForBusinessSubscriptionForAnOrganization(
        string $org,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/copilot/billing/selected_teams',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Remove teams from the Copilot for Business subscription for an organization.
     *
     * @link https://docs.github.com/rest/copilot/copilot-for-business#remove-teams-from-the-copilot-for-business-subscription-for-an-organization
     */
    public function removeTeamsFromTheCopilotForBusinessSubscriptionForAnOrganization(
        string $org,
        array $requestBody
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/copilot/billing/selected_teams',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Add users to the Copilot for Business subscription for an organization.
     *
     * @link https://docs.github.com/rest/copilot/copilot-for-business#add-users-to-the-copilot-for-business-subscription-for-an-organization
     */
    public function addUsersToTheCopilotForBusinessSubscriptionForAnOrganization(
        string $org,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/copilot/billing/selected_users',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Remove users from the Copilot for Business subscription for an organization.
     *
     * @link https://docs.github.com/rest/copilot/copilot-for-business#remove-users-from-the-copilot-for-business-subscription-for-an-organization
     */
    public function removeUsersFromTheCopilotForBusinessSubscriptionForAnOrganization(
        string $org,
        array $requestBody
    ): Response {
        return $this->delete(
            route: '/orgs/{org}/copilot/billing/selected_users',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get Copilot for Business seat assignment details for a user.
     *
     * @link https://docs.github.com/rest/copilot/copilot-for-business#get-copilot-for-business-seat-assignment-details-for-a-user
     */
    public function getCopilotForBusinessSeatAssignmentDetailsForAUser(string $org, string $username): Response
    {
        return $this->get(
            route: '/orgs/{org}/members/{username}/copilot',
            replace: ['org' => $org, 'username' => $username]
        );
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class OrgsClient extends AbstractClient
{
    /**
     * List organizations.
     *
     * @link https://docs.github.com/rest/orgs/orgs#list-organizations
     */
    public function listOrganizations(int $since = null, int $per_page = 100): Response
    {
        return $this->get(
            route: '/organizations',
            replace: ['since' => $since, 'per_page' => $per_page]
        );
    }

    /**
     * Get an organization.
     *
     * @link https://docs.github.com/rest/orgs/orgs#get-an-organization
     */
    public function getAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}',
            replace: ['org' => $org]
        );
    }

    /**
     * Update an organization.
     *
     * @link https://docs.github.com/rest/orgs/orgs#update-an-organization
     */
    public function updateAnOrganization(string $org, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/orgs/{org}',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Delete an organization.
     *
     * @link https://docs.github.com/rest/orgs/orgs#delete-an-organization
     */
    public function deleteAnOrganization(string $org): Response
    {
        return $this->delete(
            route: '/orgs/{org}',
            replace: ['org' => $org]
        );
    }

    /**
     * List users blocked by an organization.
     *
     * @link https://docs.github.com/rest/orgs/blocking#list-users-blocked-by-an-organization
     */
    public function listUsersBlockedByAnOrganization(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/blocks',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check if a user is blocked by an organization.
     *
     * @link https://docs.github.com/rest/orgs/blocking#check-if-a-user-is-blocked-by-an-organization
     */
    public function checkIfAUserIsBlockedByAnOrganization(string $org, string $username): Response
    {
        return $this->get(
            route: '/orgs/{org}/blocks/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Block a user from an organization.
     *
     * @link https://docs.github.com/rest/orgs/blocking#block-a-user-from-an-organization
     */
    public function blockAUserFromAnOrganization(string $org, string $username): Response
    {
        return $this->put(
            route: '/orgs/{org}/blocks/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Unblock a user from an organization.
     *
     * @link https://docs.github.com/rest/orgs/blocking#unblock-a-user-from-an-organization
     */
    public function unblockAUserFromAnOrganization(string $org, string $username): Response
    {
        return $this->delete(
            route: '/orgs/{org}/blocks/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * List failed organization invitations.
     *
     * @link https://docs.github.com/rest/orgs/members#list-failed-organization-invitations
     */
    public function listFailedOrganizationInvitations(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/failed_invitations',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List organization webhooks.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#list-organization-webhooks
     */
    public function listOrganizationWebhooks(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/hooks',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#create-an-organization-webhook
     */
    public function createAnOrganizationWebhook(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/hooks',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#get-an-organization-webhook
     */
    public function getAnOrganizationWebhook(string $org, int $hook_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/hooks/{hook_id}',
            replace: ['org' => $org, 'hook_id' => $hook_id]
        );
    }

    /**
     * Update an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#update-an-organization-webhook
     */
    public function updateAnOrganizationWebhook(string $org, int $hook_id, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/orgs/{org}/hooks/{hook_id}',
            data: $requestBody,
            replace: ['org' => $org, 'hook_id' => $hook_id]
        );
    }

    /**
     * Delete an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#delete-an-organization-webhook
     */
    public function deleteAnOrganizationWebhook(string $org, int $hook_id): Response
    {
        return $this->delete(
            route: '/orgs/{org}/hooks/{hook_id}',
            replace: ['org' => $org, 'hook_id' => $hook_id]
        );
    }

    /**
     * Get a webhook configuration for an organization.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#get-a-webhook-configuration-for-an-organization
     */
    public function getAWebhookConfigurationForAnOrganization(string $org, int $hook_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/hooks/{hook_id}/config',
            replace: ['org' => $org, 'hook_id' => $hook_id]
        );
    }

    /**
     * Update a webhook configuration for an organization.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#update-a-webhook-configuration-for-an-organization
     */
    public function updateAWebhookConfigurationForAnOrganization(
        string $org,
        int $hook_id,
        array $requestBody = []
    ): Response {
        return $this->patch(
            route: '/orgs/{org}/hooks/{hook_id}/config',
            data: $requestBody,
            replace: ['org' => $org, 'hook_id' => $hook_id]
        );
    }

    /**
     * List deliveries for an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#list-deliveries-for-an-organization-webhook
     */
    public function listDeliveriesForAnOrganizationWebhook(
        string $org,
        int $hook_id,
        int $per_page = 100,
        string $cursor = null,
        bool $redelivery = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/hooks/{hook_id}/deliveries',
            replace: [
                'org' => $org,
                'hook_id' => $hook_id,
                'per_page' => $per_page,
                'cursor' => $cursor,
                'redelivery' => $redelivery,
            ]
        );
    }

    /**
     * Get a webhook delivery for an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#get-a-webhook-delivery-for-an-organization-webhook
     */
    public function getAWebhookDeliveryForAnOrganizationWebhook(string $org, int $hook_id, int $delivery_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}',
            replace: ['org' => $org, 'hook_id' => $hook_id, 'delivery_id' => $delivery_id]
        );
    }

    /**
     * Redeliver a delivery for an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#redeliver-a-delivery-for-an-organization-webhook
     */
    public function redeliverADeliveryForAnOrganizationWebhook(string $org, int $hook_id, int $delivery_id): Response
    {
        return $this->post(
            route: '/orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts',
            replace: ['org' => $org, 'hook_id' => $hook_id, 'delivery_id' => $delivery_id]
        );
    }

    /**
     * Ping an organization webhook.
     *
     * @link https://docs.github.com/rest/orgs/webhooks#ping-an-organization-webhook
     */
    public function pingAnOrganizationWebhook(string $org, int $hook_id): Response
    {
        return $this->post(
            route: '/orgs/{org}/hooks/{hook_id}/pings',
            replace: ['org' => $org, 'hook_id' => $hook_id]
        );
    }

    /**
     * List app installations for an organization.
     *
     * @link https://docs.github.com/rest/orgs/orgs#list-app-installations-for-an-organization
     */
    public function listAppInstallationsForAnOrganization(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/installations',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List pending organization invitations.
     *
     * @link https://docs.github.com/rest/orgs/members#list-pending-organization-invitations
     */
    public function listPendingOrganizationInvitations(
        string $org,
        int $per_page = 100,
        int $page = null,
        string $role = null,
        string $invitation_source = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/invitations',
            replace: [
                'org' => $org,
                'per_page' => $per_page,
                'page' => $page,
                'role' => $role,
                'invitation_source' => $invitation_source,
            ]
        );
    }

    /**
     * Create an organization invitation.
     *
     * @link https://docs.github.com/rest/orgs/members#create-an-organization-invitation
     */
    public function createAnOrganizationInvitation(string $org, array $requestBody = []): Response
    {
        return $this->post(
            route: '/orgs/{org}/invitations',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Cancel an organization invitation.
     *
     * @link https://docs.github.com/rest/orgs/members#cancel-an-organization-invitation
     */
    public function cancelAnOrganizationInvitation(string $org, int $invitation_id): Response
    {
        return $this->delete(
            route: '/orgs/{org}/invitations/{invitation_id}',
            replace: ['org' => $org, 'invitation_id' => $invitation_id]
        );
    }

    /**
     * List organization invitation teams.
     *
     * @link https://docs.github.com/rest/orgs/members#list-organization-invitation-teams
     */
    public function listOrganizationInvitationTeams(
        string $org,
        int $invitation_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/invitations/{invitation_id}/teams',
            replace: ['org' => $org, 'invitation_id' => $invitation_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List organization members.
     *
     * @link https://docs.github.com/rest/orgs/members#list-organization-members
     */
    public function listOrganizationMembers(
        string $org,
        string $filter = null,
        string $role = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/members',
            replace: ['org' => $org, 'filter' => $filter, 'role' => $role, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check organization membership for a user.
     *
     * @link https://docs.github.com/rest/orgs/members#check-organization-membership-for-a-user
     */
    public function checkOrganizationMembershipForAUser(string $org, string $username): Response
    {
        return $this->get(
            route: '/orgs/{org}/members/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Remove an organization member.
     *
     * @link https://docs.github.com/rest/orgs/members#remove-an-organization-member
     */
    public function removeAnOrganizationMember(string $org, string $username): Response
    {
        return $this->delete(
            route: '/orgs/{org}/members/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Get organization membership for a user.
     *
     * @link https://docs.github.com/rest/orgs/members#get-organization-membership-for-a-user
     */
    public function getOrganizationMembershipForAUser(string $org, string $username): Response
    {
        return $this->get(
            route: '/orgs/{org}/memberships/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Set organization membership for a user.
     *
     * @link https://docs.github.com/rest/orgs/members#set-organization-membership-for-a-user
     */
    public function setOrganizationMembershipForAUser(string $org, string $username, array $requestBody = []): Response
    {
        return $this->put(
            route: '/orgs/{org}/memberships/{username}',
            data: $requestBody,
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Remove organization membership for a user.
     *
     * @link https://docs.github.com/rest/orgs/members#remove-organization-membership-for-a-user
     */
    public function removeOrganizationMembershipForAUser(string $org, string $username): Response
    {
        return $this->delete(
            route: '/orgs/{org}/memberships/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * List outside collaborators for an organization.
     *
     * @link https://docs.github.com/rest/orgs/outside-collaborators#list-outside-collaborators-for-an-organization
     */
    public function listOutsideCollaboratorsForAnOrganization(
        string $org,
        string $filter = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/outside_collaborators',
            replace: ['org' => $org, 'filter' => $filter, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Convert an organization member to outside collaborator.
     *
     * @link https://docs.github.com/rest/orgs/outside-collaborators#convert-an-organization-member-to-outside-collaborator
     */
    public function convertAnOrganizationMemberToOutsideCollaborator(
        string $org,
        string $username,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/orgs/{org}/outside_collaborators/{username}',
            data: $requestBody,
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Remove outside collaborator from an organization.
     *
     * @link https://docs.github.com/rest/orgs/outside-collaborators#remove-outside-collaborator-from-an-organization
     */
    public function removeOutsideCollaboratorFromAnOrganization(string $org, string $username): Response
    {
        return $this->delete(
            route: '/orgs/{org}/outside_collaborators/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * List requests to access organization resources with fine-grained personal access tokens.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#list-requests-to-access-organization-resources-with-fine-grained-personal-access-tokens
     */
    public function listRequestsToAccessOrganizationResourcesWithFineGrainedPersonalAccessTokens(
        string $org,
        int $per_page = 100,
        int $page = null,
        string $sort = null,
        string $direction = null,
        array $owner = null,
        string $repository = null,
        string $permission = null,
        string $last_used_before = null,
        string $last_used_after = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/personal-access-token-requests',
            replace: [
                'org' => $org,
                'per_page' => $per_page,
                'page' => $page,
                'sort' => $sort,
                'direction' => $direction,
                'owner' => $owner,
                'repository' => $repository,
                'permission' => $permission,
                'last_used_before' => $last_used_before,
                'last_used_after' => $last_used_after,
            ]
        );
    }

    /**
     * Review requests to access organization resources with fine-grained personal access tokens.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#review-requests-to-access-organization-resources-with-fine-grained-personal-access-tokens
     */
    public function reviewRequestsToAccessOrganizationResourcesWithFineGrainedPersonalAccessTokens(
        string $org,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/personal-access-token-requests',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Review a request to access organization resources with a fine-grained personal access token.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#review-a-request-to-access-organization-resources-with-a-fine-grained-personal-access-token
     */
    public function reviewARequestToAccessOrganizationResourcesWithAFineGrainedPersonalAccessToken(
        string $org,
        int $pat_request_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/personal-access-token-requests/{pat_request_id}',
            data: $requestBody,
            replace: ['org' => $org, 'pat_request_id' => $pat_request_id]
        );
    }

    /**
     * List repositories requested to be accessed by a fine-grained personal access token.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#list-repositories-requested-to-be-accessed-by-a-fine-grained-personal-access-token
     */
    public function listRepositoriesRequestedToBeAccessedByAFineGrainedPersonalAccessToken(
        string $org,
        int $pat_request_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/personal-access-token-requests/{pat_request_id}/repositories',
            replace: ['org' => $org, 'pat_request_id' => $pat_request_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List fine-grained personal access tokens with access to organization resources.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#list-fine-grained-personal-access-tokens-with-access-to-organization-resources
     */
    public function listFineGrainedPersonalAccessTokensWithAccessToOrganizationResources(
        string $org,
        int $per_page = 100,
        int $page = null,
        string $sort = null,
        string $direction = null,
        array $owner = null,
        string $repository = null,
        string $permission = null,
        string $last_used_before = null,
        string $last_used_after = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/personal-access-tokens',
            replace: [
                'org' => $org,
                'per_page' => $per_page,
                'page' => $page,
                'sort' => $sort,
                'direction' => $direction,
                'owner' => $owner,
                'repository' => $repository,
                'permission' => $permission,
                'last_used_before' => $last_used_before,
                'last_used_after' => $last_used_after,
            ]
        );
    }

    /**
     * Update the access to organization resources via fine-grained personal access tokens.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#update-the-access-to-organization-resources-via-fine-grained-personal-access-tokens
     */
    public function updateTheAccessToOrganizationResourcesViaFineGrainedPersonalAccessTokens(
        string $org,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/personal-access-tokens',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Update the access a fine-grained personal access token has to organization resources.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#update-the-access-a-fine-grained-personal-access-token-has-to-organization-resources
     */
    public function updateTheAccessAFineGrainedPersonalAccessTokenHasToOrganizationResources(
        string $org,
        int $pat_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/orgs/{org}/personal-access-tokens/{pat_id}',
            data: $requestBody,
            replace: ['org' => $org, 'pat_id' => $pat_id]
        );
    }

    /**
     * List repositories a fine-grained personal access token has access to.
     *
     * @link https://docs.github.com/rest/orgs/personal-access-tokens#list-repositories-a-fine-grained-personal-access-token-has-access-to
     */
    public function listRepositoriesAFineGrainedPersonalAccessTokenHasAccessTo(
        string $org,
        int $pat_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/personal-access-tokens/{pat_id}/repositories',
            replace: ['org' => $org, 'pat_id' => $pat_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get all custom properties for an organization.
     *
     * @link https://docs.github.com/rest/orgs/custom-properties#get-all-custom-properties-for-an-organization
     */
    public function getAllCustomPropertiesForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/properties/schema',
            replace: ['org' => $org]
        );
    }

    /**
     * Create or update custom properties for an organization.
     *
     * @link https://docs.github.com/rest/orgs/custom-properties#create-or-update-custom-properties-for-an-organization
     */
    public function createOrUpdateCustomPropertiesForAnOrganization(string $org, array $requestBody): Response
    {
        return $this->patch(
            route: '/orgs/{org}/properties/schema',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get a custom property for an organization.
     *
     * @link https://docs.github.com/rest/orgs/custom-properties#get-a-custom-property-for-an-organization
     */
    public function getACustomPropertyForAnOrganization(string $org, string $custom_property_name): Response
    {
        return $this->get(
            route: '/orgs/{org}/properties/schema/{custom_property_name}',
            replace: ['org' => $org, 'custom_property_name' => $custom_property_name]
        );
    }

    /**
     * Create or update a custom property for an organization.
     *
     * @link https://docs.github.com/rest/orgs/custom-properties#create-or-update-a-custom-property-for-an-organization
     */
    public function createOrUpdateACustomPropertyForAnOrganization(
        string $org,
        string $custom_property_name,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/properties/schema/{custom_property_name}',
            data: $requestBody,
            replace: ['org' => $org, 'custom_property_name' => $custom_property_name]
        );
    }

    /**
     * Remove a custom property for an organization.
     *
     * @link https://docs.github.com/rest/orgs/custom-properties#remove-a-custom-property-for-an-organization
     */
    public function removeACustomPropertyForAnOrganization(string $org, string $custom_property_name): Response
    {
        return $this->delete(
            route: '/orgs/{org}/properties/schema/{custom_property_name}',
            replace: ['org' => $org, 'custom_property_name' => $custom_property_name]
        );
    }

    /**
     * List custom property values for organization repositories.
     *
     * @link https://docs.github.com/rest/orgs/custom-properties#list-custom-property-values-for-organization-repositories
     */
    public function listCustomPropertyValuesForOrganizationRepositories(
        string $org,
        int $per_page = 100,
        int $page = null,
        string $repository_query = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/properties/values',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page, 'repository_query' => $repository_query]
        );
    }

    /**
     * Create or update custom property values for organization repositories.
     *
     * @link https://docs.github.com/rest/orgs/custom-properties#create-or-update-custom-property-values-for-organization-repositories
     */
    public function createOrUpdateCustomPropertyValuesForOrganizationRepositories(
        string $org,
        array $requestBody
    ): Response {
        return $this->patch(
            route: '/orgs/{org}/properties/values',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * List public organization members.
     *
     * @link https://docs.github.com/rest/orgs/members#list-public-organization-members
     */
    public function listPublicOrganizationMembers(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/public_members',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check public organization membership for a user.
     *
     * @link https://docs.github.com/rest/orgs/members#check-public-organization-membership-for-a-user
     */
    public function checkPublicOrganizationMembershipForAUser(string $org, string $username): Response
    {
        return $this->get(
            route: '/orgs/{org}/public_members/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Set public organization membership for the authenticated user.
     *
     * @link https://docs.github.com/rest/orgs/members#set-public-organization-membership-for-the-authenticated-user
     */
    public function setPublicOrganizationMembershipForTheAuthenticatedUser(string $org, string $username): Response
    {
        return $this->put(
            route: '/orgs/{org}/public_members/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * Remove public organization membership for the authenticated user.
     *
     * @link https://docs.github.com/rest/orgs/members#remove-public-organization-membership-for-the-authenticated-user
     */
    public function removePublicOrganizationMembershipForTheAuthenticatedUser(string $org, string $username): Response
    {
        return $this->delete(
            route: '/orgs/{org}/public_members/{username}',
            replace: ['org' => $org, 'username' => $username]
        );
    }

    /**
     * List security manager teams.
     *
     * @link https://docs.github.com/rest/orgs/security-managers#list-security-manager-teams
     */
    public function listSecurityManagerTeams(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/security-managers',
            replace: ['org' => $org]
        );
    }

    /**
     * Add a security manager team.
     *
     * @link https://docs.github.com/rest/orgs/security-managers#add-a-security-manager-team
     */
    public function addASecurityManagerTeam(string $org, string $team_slug): Response
    {
        return $this->put(
            route: '/orgs/{org}/security-managers/teams/{team_slug}',
            replace: ['org' => $org, 'team_slug' => $team_slug]
        );
    }

    /**
     * Remove a security manager team.
     *
     * @link https://docs.github.com/rest/orgs/security-managers#remove-a-security-manager-team
     */
    public function removeASecurityManagerTeam(string $org, string $team_slug): Response
    {
        return $this->delete(
            route: '/orgs/{org}/security-managers/teams/{team_slug}',
            replace: ['org' => $org, 'team_slug' => $team_slug]
        );
    }

    /**
     * Enable or disable a security feature for an organization.
     *
     * @link https://docs.github.com/rest/orgs/orgs#enable-or-disable-a-security-feature-for-an-organization
     */
    public function enableOrDisableASecurityFeatureForAnOrganization(
        string $org,
        string $security_product,
        string $enablement,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/orgs/{org}/{security_product}/{enablement}',
            data: $requestBody,
            replace: ['org' => $org, 'security_product' => $security_product, 'enablement' => $enablement]
        );
    }

    /**
     * List organization memberships for the authenticated user.
     *
     * @link https://docs.github.com/rest/orgs/members#list-organization-memberships-for-the-authenticated-user
     */
    public function listOrganizationMembershipsForTheAuthenticatedUser(
        string $state = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/user/memberships/orgs',
            replace: ['state' => $state, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get an organization membership for the authenticated user.
     *
     * @link https://docs.github.com/rest/orgs/members#get-an-organization-membership-for-the-authenticated-user
     */
    public function getAnOrganizationMembershipForTheAuthenticatedUser(string $org): Response
    {
        return $this->get(
            route: '/user/memberships/orgs/{org}',
            replace: ['org' => $org]
        );
    }

    /**
     * Update an organization membership for the authenticated user.
     *
     * @link https://docs.github.com/rest/orgs/members#update-an-organization-membership-for-the-authenticated-user
     */
    public function updateAnOrganizationMembershipForTheAuthenticatedUser(string $org, array $requestBody): Response
    {
        return $this->patch(
            route: '/user/memberships/orgs/{org}',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * List organizations for the authenticated user.
     *
     * @link https://docs.github.com/rest/orgs/orgs#list-organizations-for-the-authenticated-user
     */
    public function listOrganizationsForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/orgs',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List organizations for a user.
     *
     * @link https://docs.github.com/rest/orgs/orgs#list-organizations-for-a-user
     */
    public function listOrganizationsForAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/orgs',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }
}

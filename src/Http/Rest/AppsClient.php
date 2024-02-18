<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class AppsClient extends AbstractClient
{
    /**
     * Get the authenticated app.
     *
     * @link https://docs.github.com/rest/apps/apps#get-the-authenticated-app
     */
    public function getTheAuthenticatedApp(): Response
    {
        return $this->get(
            route: '/app'
        );
    }

    /**
     * Create a GitHub App from a manifest.
     *
     * @link https://docs.github.com/rest/apps/apps#create-a-github-app-from-a-manifest
     */
    public function createAGitHubAppFromAManifest(string $code): Response
    {
        return $this->post(
            route: '/app-manifests/{code}/conversions',
            replace: ['code' => $code]
        );
    }

    /**
     * Get a webhook configuration for an app.
     *
     * @link https://docs.github.com/rest/apps/webhooks#get-a-webhook-configuration-for-an-app
     */
    public function getAWebhookConfigurationForAnApp(): Response
    {
        return $this->get(
            route: '/app/hook/config'
        );
    }

    /**
     * Update a webhook configuration for an app.
     *
     * @link https://docs.github.com/rest/apps/webhooks#update-a-webhook-configuration-for-an-app
     */
    public function updateAWebhookConfigurationForAnApp(array $requestBody): Response
    {
        return $this->patch(
            route: '/app/hook/config',
            data: $requestBody
        );
    }

    /**
     * List deliveries for an app webhook.
     *
     * @link https://docs.github.com/rest/apps/webhooks#list-deliveries-for-an-app-webhook
     */
    public function listDeliveriesForAnAppWebhook(
        int $per_page = 100,
        string $cursor = null,
        bool $redelivery = null
    ): Response {
        return $this->get(
            route: '/app/hook/deliveries',
            replace: ['per_page' => $per_page, 'cursor' => $cursor, 'redelivery' => $redelivery]
        );
    }

    /**
     * Get a delivery for an app webhook.
     *
     * @link https://docs.github.com/rest/apps/webhooks#get-a-delivery-for-an-app-webhook
     */
    public function getADeliveryForAnAppWebhook(int $delivery_id): Response
    {
        return $this->get(
            route: '/app/hook/deliveries/{delivery_id}',
            replace: ['delivery_id' => $delivery_id]
        );
    }

    /**
     * Redeliver a delivery for an app webhook.
     *
     * @link https://docs.github.com/rest/apps/webhooks#redeliver-a-delivery-for-an-app-webhook
     */
    public function redeliverADeliveryForAnAppWebhook(int $delivery_id): Response
    {
        return $this->post(
            route: '/app/hook/deliveries/{delivery_id}/attempts',
            replace: ['delivery_id' => $delivery_id]
        );
    }

    /**
     * List installation requests for the authenticated app.
     *
     * @link https://docs.github.com/rest/apps/apps#list-installation-requests-for-the-authenticated-app
     */
    public function listInstallationRequestsForTheAuthenticatedApp(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/app/installation-requests',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List installations for the authenticated app.
     *
     * @link https://docs.github.com/enterprise-server@3.9/rest/apps/apps#list-installations-for-the-authenticated-app
     */
    public function listInstallationsForTheAuthenticatedApp(
        int $per_page = 100,
        int $page = null,
        string $since = null,
        string $outdated = null
    ): Response {
        return $this->get(
            route: '/app/installations',
            replace: ['per_page' => $per_page, 'page' => $page, 'since' => $since, 'outdated' => $outdated]
        );
    }

    /**
     * Get an installation for the authenticated app.
     *
     * @link https://docs.github.com/rest/apps/apps#get-an-installation-for-the-authenticated-app
     */
    public function getAnInstallationForTheAuthenticatedApp(int $installation_id): Response
    {
        return $this->get(
            route: '/app/installations/{installation_id}',
            replace: ['installation_id' => $installation_id]
        );
    }

    /**
     * Delete an installation for the authenticated app.
     *
     * @link https://docs.github.com/rest/apps/apps#delete-an-installation-for-the-authenticated-app
     */
    public function deleteAnInstallationForTheAuthenticatedApp(int $installation_id): Response
    {
        return $this->delete(
            route: '/app/installations/{installation_id}',
            replace: ['installation_id' => $installation_id]
        );
    }

    /**
     * Create an installation access token for an app.
     *
     * @link https://docs.github.com/rest/apps/apps#create-an-installation-access-token-for-an-app
     */
    public function createAnInstallationAccessTokenForAnApp(int $installation_id, array $requestBody = []): Response
    {
        return $this->post(
            route: '/app/installations/{installation_id}/access_tokens',
            data: $requestBody,
            replace: ['installation_id' => $installation_id]
        );
    }

    /**
     * Suspend an app installation.
     *
     * @link https://docs.github.com/rest/apps/apps#suspend-an-app-installation
     */
    public function suspendAnAppInstallation(int $installation_id): Response
    {
        return $this->put(
            route: '/app/installations/{installation_id}/suspended',
            replace: ['installation_id' => $installation_id]
        );
    }

    /**
     * Unsuspend an app installation.
     *
     * @link https://docs.github.com/rest/apps/apps#unsuspend-an-app-installation
     */
    public function unsuspendAnAppInstallation(int $installation_id): Response
    {
        return $this->delete(
            route: '/app/installations/{installation_id}/suspended',
            replace: ['installation_id' => $installation_id]
        );
    }

    /**
     * Delete an app authorization.
     *
     * @link https://docs.github.com/rest/apps/oauth-applications#delete-an-app-authorization
     */
    public function deleteAnAppAuthorization(string $client_id, array $requestBody): Response
    {
        return $this->delete(
            route: '/applications/{client_id}/grant',
            data: $requestBody,
            replace: ['client_id' => $client_id]
        );
    }

    /**
     * Check a token.
     *
     * @link https://docs.github.com/rest/apps/oauth-applications#check-a-token
     */
    public function checkAToken(string $client_id, array $requestBody): Response
    {
        return $this->post(
            route: '/applications/{client_id}/token',
            data: $requestBody,
            replace: ['client_id' => $client_id]
        );
    }

    /**
     * Reset a token.
     *
     * @link https://docs.github.com/rest/apps/oauth-applications#reset-a-token
     */
    public function resetAToken(string $client_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/applications/{client_id}/token',
            data: $requestBody,
            replace: ['client_id' => $client_id]
        );
    }

    /**
     * Delete an app token.
     *
     * @link https://docs.github.com/rest/apps/oauth-applications#delete-an-app-token
     */
    public function deleteAnAppToken(string $client_id, array $requestBody): Response
    {
        return $this->delete(
            route: '/applications/{client_id}/token',
            data: $requestBody,
            replace: ['client_id' => $client_id]
        );
    }

    /**
     * Create a scoped access token.
     *
     * @link https://docs.github.com/rest/apps/apps#create-a-scoped-access-token
     */
    public function createAScopedAccessToken(string $client_id, array $requestBody): Response
    {
        return $this->post(
            route: '/applications/{client_id}/token/scoped',
            data: $requestBody,
            replace: ['client_id' => $client_id]
        );
    }

    /**
     * Get an app.
     *
     * @link https://docs.github.com/rest/apps/apps#get-an-app
     */
    public function getAnApp(string $app_slug): Response
    {
        return $this->get(
            route: '/apps/{app_slug}',
            replace: ['app_slug' => $app_slug]
        );
    }

    /**
     * List repositories accessible to the app installation.
     *
     * @link https://docs.github.com/rest/apps/installations#list-repositories-accessible-to-the-app-installation
     */
    public function listRepositoriesAccessibleToTheAppInstallation(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/installation/repositories',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Revoke an installation access token.
     *
     * @link https://docs.github.com/rest/apps/installations#revoke-an-installation-access-token
     */
    public function revokeAnInstallationAccessToken(): Response
    {
        return $this->delete(
            route: '/installation/token'
        );
    }

    /**
     * Get a subscription plan for an account.
     *
     * @link https://docs.github.com/rest/apps/marketplace#get-a-subscription-plan-for-an-account
     */
    public function getASubscriptionPlanForAnAccount(int $account_id): Response
    {
        return $this->get(
            route: '/marketplace_listing/accounts/{account_id}',
            replace: ['account_id' => $account_id]
        );
    }

    /**
     * List plans.
     *
     * @link https://docs.github.com/rest/apps/marketplace#list-plans
     */
    public function listPlans(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/marketplace_listing/plans',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List accounts for a plan.
     *
     * @link https://docs.github.com/rest/apps/marketplace#list-accounts-for-a-plan
     */
    public function listAccountsForAPlan(
        int $plan_id,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/marketplace_listing/plans/{plan_id}/accounts',
            replace: [
                'plan_id' => $plan_id,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get a subscription plan for an account (stubbed).
     *
     * @link https://docs.github.com/rest/apps/marketplace#get-a-subscription-plan-for-an-account-stubbed
     */
    public function getASubscriptionPlanForAnAccountStubbed(int $account_id): Response
    {
        return $this->get(
            route: '/marketplace_listing/stubbed/accounts/{account_id}',
            replace: ['account_id' => $account_id]
        );
    }

    /**
     * List plans (stubbed).
     *
     * @link https://docs.github.com/rest/apps/marketplace#list-plans-stubbed
     */
    public function listPlansStubbed(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/marketplace_listing/stubbed/plans',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List accounts for a plan (stubbed).
     *
     * @link https://docs.github.com/rest/apps/marketplace#list-accounts-for-a-plan-stubbed
     */
    public function listAccountsForAPlanStubbed(
        int $plan_id,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/marketplace_listing/stubbed/plans/{plan_id}/accounts',
            replace: [
                'plan_id' => $plan_id,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get an organization installation for the authenticated app.
     *
     * @link https://docs.github.com/rest/apps/apps#get-an-organization-installation-for-the-authenticated-app
     */
    public function getAnOrganizationInstallationForTheAuthenticatedApp(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/installation',
            replace: ['org' => $org]
        );
    }

    /**
     * Get a repository installation for the authenticated app.
     *
     * @link https://docs.github.com/rest/apps/apps#get-a-repository-installation-for-the-authenticated-app
     */
    public function getARepositoryInstallationForTheAuthenticatedApp(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/installation',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List app installations accessible to the user access token.
     *
     * @link https://docs.github.com/rest/apps/installations#list-app-installations-accessible-to-the-user-access-token
     */
    public function listAppInstallationsAccessibleToTheUserAccessToken(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/installations',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List repositories accessible to the user access token.
     *
     * @link https://docs.github.com/rest/apps/installations#list-repositories-accessible-to-the-user-access-token
     */
    public function listRepositoriesAccessibleToTheUserAccessToken(
        int $installation_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/user/installations/{installation_id}/repositories',
            replace: ['installation_id' => $installation_id, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Add a repository to an app installation.
     *
     * @link https://docs.github.com/rest/apps/installations#add-a-repository-to-an-app-installation
     */
    public function addARepositoryToAnAppInstallation(int $installation_id, int $repository_id): Response
    {
        return $this->put(
            route: '/user/installations/{installation_id}/repositories/{repository_id}',
            replace: ['installation_id' => $installation_id, 'repository_id' => $repository_id]
        );
    }

    /**
     * Remove a repository from an app installation.
     *
     * @link https://docs.github.com/rest/apps/installations#remove-a-repository-from-an-app-installation
     */
    public function removeARepositoryFromAnAppInstallation(int $installation_id, int $repository_id): Response
    {
        return $this->delete(
            route: '/user/installations/{installation_id}/repositories/{repository_id}',
            replace: ['installation_id' => $installation_id, 'repository_id' => $repository_id]
        );
    }

    /**
     * List subscriptions for the authenticated user.
     *
     * @link https://docs.github.com/rest/apps/marketplace#list-subscriptions-for-the-authenticated-user
     */
    public function listSubscriptionsForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/marketplace_purchases',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List subscriptions for the authenticated user (stubbed).
     *
     * @link https://docs.github.com/rest/apps/marketplace#list-subscriptions-for-the-authenticated-user-stubbed
     */
    public function listSubscriptionsForTheAuthenticatedUserStubbed(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/marketplace_purchases/stubbed',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a user installation for the authenticated app.
     *
     * @link https://docs.github.com/rest/apps/apps#get-a-user-installation-for-the-authenticated-app
     */
    public function getAUserInstallationForTheAuthenticatedApp(string $username): Response
    {
        return $this->get(
            route: '/users/{username}/installation',
            replace: ['username' => $username]
        );
    }
}

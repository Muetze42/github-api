<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class OidcClient extends AbstractClient
{
    /**
     * Get the customization template for an OIDC subject claim for an organization.
     *
     * @link https://docs.github.com/rest/actions/oidc#get-the-customization-template-for-an-oidc-subject-claim-for-an-organization
     */
    public function getTheCustomizationTemplateForAnOIDCSubjectClaimForAnOrganization(string $org): Response
    {
        return $this->get(
            route: '/orgs/{org}/actions/oidc/customization/sub',
            replace: ['org' => $org]
        );
    }

    /**
     * Set the customization template for an OIDC subject claim for an organization.
     *
     * @link https://docs.github.com/rest/actions/oidc#set-the-customization-template-for-an-oidc-subject-claim-for-an-organization
     */
    public function setTheCustomizationTemplateForAnOIDCSubjectClaimForAnOrganization(
        string $org,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/orgs/{org}/actions/oidc/customization/sub',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }
}

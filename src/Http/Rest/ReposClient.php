<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class ReposClient extends AbstractClient
{
    /**
     * List organization repositories.
     *
     * @link https://docs.github.com/rest/repos/repos#list-organization-repositories
     */
    public function listOrganizationRepositories(
        string $org,
        string $type = null,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/repos',
            replace: [
                'org' => $org,
                'type' => $type,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create an organization repository.
     *
     * @link https://docs.github.com/rest/repos/repos#create-an-organization-repository
     */
    public function createAnOrganizationRepository(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/repos',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * Get all organization repository rulesets.
     *
     * @link https://docs.github.com/rest/orgs/rules#get-all-organization-repository-rulesets
     */
    public function getAllOrganizationRepositoryRulesets(string $org, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/orgs/{org}/rulesets',
            replace: ['org' => $org, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create an organization repository ruleset.
     *
     * @link https://docs.github.com/rest/orgs/rules#create-an-organization-repository-ruleset
     */
    public function createAnOrganizationRepositoryRuleset(string $org, array $requestBody): Response
    {
        return $this->post(
            route: '/orgs/{org}/rulesets',
            data: $requestBody,
            replace: ['org' => $org]
        );
    }

    /**
     * List organization rule suites.
     *
     * @link https://docs.github.com/rest/orgs/rule-suites#list-organization-rule-suites
     */
    public function listOrganizationRuleSuites(
        string $org,
        int $repository_name = null,
        string $time_period = null,
        string $actor_name = null,
        string $rule_suite_result = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/orgs/{org}/rulesets/rule-suites',
            replace: [
                'org' => $org,
                'repository_name' => $repository_name,
                'time_period' => $time_period,
                'actor_name' => $actor_name,
                'rule_suite_result' => $rule_suite_result,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get an organization rule suite.
     *
     * @link https://docs.github.com/rest/orgs/rule-suites#get-an-organization-rule-suite
     */
    public function getAnOrganizationRuleSuite(string $org, int $rule_suite_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/rulesets/rule-suites/{rule_suite_id}',
            replace: ['org' => $org, 'rule_suite_id' => $rule_suite_id]
        );
    }

    /**
     * Get an organization repository ruleset.
     *
     * @link https://docs.github.com/rest/orgs/rules#get-an-organization-repository-ruleset
     */
    public function getAnOrganizationRepositoryRuleset(string $org, int $ruleset_id): Response
    {
        return $this->get(
            route: '/orgs/{org}/rulesets/{ruleset_id}',
            replace: ['org' => $org, 'ruleset_id' => $ruleset_id]
        );
    }

    /**
     * Update an organization repository ruleset.
     *
     * @link https://docs.github.com/rest/orgs/rules#update-an-organization-repository-ruleset
     */
    public function updateAnOrganizationRepositoryRuleset(
        string $org,
        int $ruleset_id,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/orgs/{org}/rulesets/{ruleset_id}',
            data: $requestBody,
            replace: ['org' => $org, 'ruleset_id' => $ruleset_id]
        );
    }

    /**
     * Delete an organization repository ruleset.
     *
     * @link https://docs.github.com/rest/orgs/rules#delete-an-organization-repository-ruleset
     */
    public function deleteAnOrganizationRepositoryRuleset(string $org, int $ruleset_id): Response
    {
        return $this->delete(
            route: '/orgs/{org}/rulesets/{ruleset_id}',
            replace: ['org' => $org, 'ruleset_id' => $ruleset_id]
        );
    }

    /**
     * Get a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#get-a-repository
     */
    public function getARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Update a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#update-a-repository
     */
    public function updateARepository(string $owner, string $repo, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Delete a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#delete-a-repository
     */
    public function deleteARepository(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List repository activities.
     *
     * @link https://docs.github.com/rest/repos/repos#list-repository-activities
     */
    public function listRepositoryActivities(
        string $owner,
        string $repo,
        string $direction = null,
        int $per_page = 100,
        string $before = null,
        string $after = null,
        string $ref = null,
        string $actor = null,
        string $time_period = null,
        string $activity_type = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/activity',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'direction' => $direction,
                'per_page' => $per_page,
                'before' => $before,
                'after' => $after,
                'ref' => $ref,
                'actor' => $actor,
                'time_period' => $time_period,
                'activity_type' => $activity_type,
            ]
        );
    }

    /**
     * List all autolinks of a repository.
     *
     * @link https://docs.github.com/rest/repos/autolinks#list-all-autolinks-of-a-repository
     */
    public function listAllAutolinksOfARepository(string $owner, string $repo, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/autolinks',
            replace: ['owner' => $owner, 'repo' => $repo, 'page' => $page]
        );
    }

    /**
     * Create an autolink reference for a repository.
     *
     * @link https://docs.github.com/rest/repos/autolinks#create-an-autolink-reference-for-a-repository
     */
    public function createAnAutolinkReferenceForARepository(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/autolinks',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get an autolink reference of a repository.
     *
     * @link https://docs.github.com/rest/repos/autolinks#get-an-autolink-reference-of-a-repository
     */
    public function getAnAutolinkReferenceOfARepository(string $owner, string $repo, int $autolink_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/autolinks/{autolink_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'autolink_id' => $autolink_id]
        );
    }

    /**
     * Delete an autolink reference from a repository.
     *
     * @link https://docs.github.com/rest/repos/autolinks#delete-an-autolink-reference-from-a-repository
     */
    public function deleteAnAutolinkReferenceFromARepository(string $owner, string $repo, int $autolink_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/autolinks/{autolink_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'autolink_id' => $autolink_id]
        );
    }

    /**
     * Check if automated security fixes are enabled for a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#check-if-automated-security-fixes-are-enabled-for-a-repository
     */
    public function checkIfAutomatedSecurityFixesAreEnabledForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/automated-security-fixes',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Enable automated security fixes.
     *
     * @link https://docs.github.com/rest/repos/repos#enable-automated-security-fixes
     */
    public function enableAutomatedSecurityFixes(string $owner, string $repo): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/automated-security-fixes',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Disable automated security fixes.
     *
     * @link https://docs.github.com/rest/repos/repos#disable-automated-security-fixes
     */
    public function disableAutomatedSecurityFixes(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/automated-security-fixes',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List branches.
     *
     * @link https://docs.github.com/rest/branches/branches#list-branches
     */
    public function listBranches(
        string $owner,
        string $repo,
        bool $protected = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'protected' => $protected,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get a branch.
     *
     * @link https://docs.github.com/rest/branches/branches#get-a-branch
     */
    public function getABranch(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get branch protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-branch-protection
     */
    public function getBranchProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Update branch protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#update-branch-protection
     */
    public function updateBranchProtection(string $owner, string $repo, string $branch, array $requestBody): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Delete branch protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#delete-branch-protection
     */
    public function deleteBranchProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get admin branch protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-admin-branch-protection
     */
    public function getAdminBranchProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Set admin branch protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#set-admin-branch-protection
     */
    public function setAdminBranchProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Delete admin branch protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#delete-admin-branch-protection
     */
    public function deleteAdminBranchProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get pull request review protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-pull-request-review-protection
     */
    public function getPullRequestReviewProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Update pull request review protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#update-pull-request-review-protection
     */
    public function updatePullRequestReviewProtection(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Delete pull request review protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#delete-pull-request-review-protection
     */
    public function deletePullRequestReviewProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get commit signature protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-commit-signature-protection
     */
    public function getCommitSignatureProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_signatures',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Create commit signature protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#create-commit-signature-protection
     */
    public function createCommitSignatureProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_signatures',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Delete commit signature protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#delete-commit-signature-protection
     */
    public function deleteCommitSignatureProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_signatures',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get status checks protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-status-checks-protection
     */
    public function getStatusChecksProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Update status check protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#update-status-check-protection
     */
    public function updateStatusCheckProtection(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Remove status check protection.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#remove-status-check-protection
     */
    public function removeStatusCheckProtection(string $owner, string $repo, string $branch): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get all status check contexts.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-all-status-check-contexts
     */
    public function getAllStatusCheckContexts(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Add status check contexts.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#add-status-check-contexts
     */
    public function addStatusCheckContexts(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Set status check contexts.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#set-status-check-contexts
     */
    public function setStatusCheckContexts(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Remove status check contexts.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#remove-status-check-contexts
     */
    public function removeStatusCheckContexts(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-access-restrictions
     */
    public function getAccessRestrictions(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Delete access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#delete-access-restrictions
     */
    public function deleteAccessRestrictions(string $owner, string $repo, string $branch): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get apps with access to the protected branch.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-apps-with-access-to-the-protected-branch
     */
    public function getAppsWithAccessToTheProtectedBranch(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Add app access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#add-app-access-restrictions
     */
    public function addAppAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Set app access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#set-app-access-restrictions
     */
    public function setAppAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Remove app access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#remove-app-access-restrictions
     */
    public function removeAppAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get teams with access to the protected branch.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-teams-with-access-to-the-protected-branch
     */
    public function getTeamsWithAccessToTheProtectedBranch(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Add team access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#add-team-access-restrictions
     */
    public function addTeamAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Set team access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#set-team-access-restrictions
     */
    public function setTeamAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Remove team access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#remove-team-access-restrictions
     */
    public function removeTeamAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Get users with access to the protected branch.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#get-users-with-access-to-the-protected-branch
     */
    public function getUsersWithAccessToTheProtectedBranch(string $owner, string $repo, string $branch): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Add user access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#add-user-access-restrictions
     */
    public function addUserAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Set user access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#set-user-access-restrictions
     */
    public function setUserAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Remove user access restrictions.
     *
     * @link https://docs.github.com/rest/branches/branch-protection#remove-user-access-restrictions
     */
    public function removeUserAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
        array $requestBody = []
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * Rename a branch.
     *
     * @link https://docs.github.com/rest/branches/branches#rename-a-branch
     */
    public function renameABranch(string $owner, string $repo, string $branch, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/branches/{branch}/rename',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch]
        );
    }

    /**
     * List CODEOWNERS errors.
     *
     * @link https://docs.github.com/rest/repos/repos#list-codeowners-errors
     */
    public function listCODEOWNERSErrors(string $owner, string $repo, string $ref = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/codeowners/errors',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * List repository collaborators.
     *
     * @link https://docs.github.com/rest/collaborators/collaborators#list-repository-collaborators
     */
    public function listRepositoryCollaborators(
        string $owner,
        string $repo,
        string $affiliation = null,
        string $permission = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/collaborators',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'affiliation' => $affiliation,
                'permission' => $permission,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Check if a user is a repository collaborator.
     *
     * @link https://docs.github.com/rest/collaborators/collaborators#check-if-a-user-is-a-repository-collaborator
     */
    public function checkIfAUserIsARepositoryCollaborator(string $owner, string $repo, string $username): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/collaborators/{username}',
            replace: ['owner' => $owner, 'repo' => $repo, 'username' => $username]
        );
    }

    /**
     * Add a repository collaborator.
     *
     * @link https://docs.github.com/rest/collaborators/collaborators#add-a-repository-collaborator
     */
    public function addARepositoryCollaborator(
        string $owner,
        string $repo,
        string $username,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/collaborators/{username}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'username' => $username]
        );
    }

    /**
     * Remove a repository collaborator.
     *
     * @link https://docs.github.com/rest/collaborators/collaborators#remove-a-repository-collaborator
     */
    public function removeARepositoryCollaborator(string $owner, string $repo, string $username): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/collaborators/{username}',
            replace: ['owner' => $owner, 'repo' => $repo, 'username' => $username]
        );
    }

    /**
     * Get repository permissions for a user.
     *
     * @link https://docs.github.com/rest/collaborators/collaborators#get-repository-permissions-for-a-user
     */
    public function getRepositoryPermissionsForAUser(string $owner, string $repo, string $username): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/collaborators/{username}/permission',
            replace: ['owner' => $owner, 'repo' => $repo, 'username' => $username]
        );
    }

    /**
     * List commit comments for a repository.
     *
     * @link https://docs.github.com/rest/commits/comments#list-commit-comments-for-a-repository
     */
    public function listCommitCommentsForARepository(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/comments',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get a commit comment.
     *
     * @link https://docs.github.com/rest/commits/comments#get-a-commit-comment
     */
    public function getACommitComment(string $owner, string $repo, int $comment_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/comments/{comment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Update a commit comment.
     *
     * @link https://docs.github.com/rest/commits/comments#update-a-commit-comment
     */
    public function updateACommitComment(string $owner, string $repo, int $comment_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/comments/{comment_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * Delete a commit comment.
     *
     * @link https://docs.github.com/rest/commits/comments#delete-a-commit-comment
     */
    public function deleteACommitComment(string $owner, string $repo, int $comment_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/comments/{comment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'comment_id' => $comment_id]
        );
    }

    /**
     * List commits.
     *
     * @link https://docs.github.com/rest/commits/commits#list-commits
     */
    public function listCommits(
        string $owner,
        string $repo,
        string $sha = null,
        string $path = null,
        string $author = null,
        string $committer = null,
        string $since = null,
        string $until = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'sha' => $sha,
                'path' => $path,
                'author' => $author,
                'committer' => $committer,
                'since' => $since,
                'until' => $until,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * List branches for HEAD commit.
     *
     * @link https://docs.github.com/rest/commits/commits#list-branches-for-head-commit
     */
    public function listBranchesForHEADCommit(string $owner, string $repo, string $commit_sha): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head',
            replace: ['owner' => $owner, 'repo' => $repo, 'commit_sha' => $commit_sha]
        );
    }

    /**
     * List commit comments.
     *
     * @link https://docs.github.com/rest/commits/comments#list-commit-comments
     */
    public function listCommitComments(
        string $owner,
        string $repo,
        string $commit_sha,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{commit_sha}/comments',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'commit_sha' => $commit_sha,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a commit comment.
     *
     * @link https://docs.github.com/rest/commits/comments#create-a-commit-comment
     */
    public function createACommitComment(string $owner, string $repo, string $commit_sha, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/commits/{commit_sha}/comments',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'commit_sha' => $commit_sha]
        );
    }

    /**
     * List pull requests associated with a commit.
     *
     * @link https://docs.github.com/rest/commits/commits#list-pull-requests-associated-with-a-commit
     */
    public function listPullRequestsAssociatedWithACommit(
        string $owner,
        string $repo,
        string $commit_sha,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{commit_sha}/pulls',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'commit_sha' => $commit_sha,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get a commit.
     *
     * @link https://docs.github.com/rest/commits/commits#get-a-commit
     */
    public function getACommit(
        string $owner,
        string $repo,
        string $ref,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{ref}',
            replace: ['owner' => $owner, 'repo' => $repo, 'page' => $page, 'per_page' => $per_page, 'ref' => $ref]
        );
    }

    /**
     * Get the combined status for a specific reference.
     *
     * @link https://docs.github.com/rest/commits/statuses#get-the-combined-status-for-a-specific-reference
     */
    public function getTheCombinedStatusForASpecificReference(
        string $owner,
        string $repo,
        string $ref,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{ref}/status',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List commit statuses for a reference.
     *
     * @link https://docs.github.com/rest/commits/statuses#list-commit-statuses-for-a-reference
     */
    public function listCommitStatusesForAReference(
        string $owner,
        string $repo,
        string $ref,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/commits/{ref}/statuses',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get community profile metrics.
     *
     * @link https://docs.github.com/rest/metrics/community#get-community-profile-metrics
     */
    public function getCommunityProfileMetrics(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/community/profile',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Compare two commits.
     *
     * @link https://docs.github.com/rest/commits/commits#compare-two-commits
     */
    public function compareTwoCommits(
        string $owner,
        string $repo,
        string $basehead,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/compare/{basehead}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'page' => $page,
                'per_page' => $per_page,
                'basehead' => $basehead,
            ]
        );
    }

    /**
     * Get repository content.
     *
     * @link https://docs.github.com/rest/repos/contents#get-repository-content
     */
    public function getRepositoryContent(string $owner, string $repo, string $path, string $ref = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/contents/{path}',
            replace: ['owner' => $owner, 'repo' => $repo, 'path' => $path, 'ref' => $ref]
        );
    }

    /**
     * Create or update file contents.
     *
     * @link https://docs.github.com/rest/repos/contents#create-or-update-file-contents
     */
    public function createOrUpdateFileContents(string $owner, string $repo, string $path, array $requestBody): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/contents/{path}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'path' => $path]
        );
    }

    /**
     * Delete a file.
     *
     * @link https://docs.github.com/rest/repos/contents#delete-a-file
     */
    public function deleteAFile(string $owner, string $repo, string $path, array $requestBody): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/contents/{path}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'path' => $path]
        );
    }

    /**
     * List repository contributors.
     *
     * @link https://docs.github.com/rest/repos/repos#list-repository-contributors
     */
    public function listRepositoryContributors(
        string $owner,
        string $repo,
        string $anon = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/contributors',
            replace: ['owner' => $owner, 'repo' => $repo, 'anon' => $anon, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List deployments.
     *
     * @link https://docs.github.com/rest/deployments/deployments#list-deployments
     */
    public function listDeployments(
        string $owner,
        string $repo,
        string $sha = null,
        string $ref = null,
        string $task = null,
        string $environment = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/deployments',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'sha' => $sha,
                'ref' => $ref,
                'task' => $task,
                'environment' => $environment,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a deployment.
     *
     * @link https://docs.github.com/rest/deployments/deployments#create-a-deployment
     */
    public function createADeployment(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/deployments',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a deployment.
     *
     * @link https://docs.github.com/rest/deployments/deployments#get-a-deployment
     */
    public function getADeployment(string $owner, string $repo, int $deployment_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/deployments/{deployment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'deployment_id' => $deployment_id]
        );
    }

    /**
     * Delete a deployment.
     *
     * @link https://docs.github.com/rest/deployments/deployments#delete-a-deployment
     */
    public function deleteADeployment(string $owner, string $repo, int $deployment_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/deployments/{deployment_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'deployment_id' => $deployment_id]
        );
    }

    /**
     * List deployment statuses.
     *
     * @link https://docs.github.com/rest/deployments/statuses#list-deployment-statuses
     */
    public function listDeploymentStatuses(
        string $owner,
        string $repo,
        int $deployment_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'deployment_id' => $deployment_id,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a deployment status.
     *
     * @link https://docs.github.com/rest/deployments/statuses#create-a-deployment-status
     */
    public function createADeploymentStatus(
        string $owner,
        string $repo,
        int $deployment_id,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'deployment_id' => $deployment_id]
        );
    }

    /**
     * Get a deployment status.
     *
     * @link https://docs.github.com/rest/deployments/statuses#get-a-deployment-status
     */
    public function getADeploymentStatus(string $owner, string $repo, int $deployment_id, int $status_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'deployment_id' => $deployment_id, 'status_id' => $status_id]
        );
    }

    /**
     * Create a repository dispatch event.
     *
     * @link https://docs.github.com/rest/repos/repos#create-a-repository-dispatch-event
     */
    public function createARepositoryDispatchEvent(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/dispatches',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List environments.
     *
     * @link https://docs.github.com/rest/deployments/environments#list-environments
     */
    public function listEnvironments(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/environments',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get an environment.
     *
     * @link https://docs.github.com/rest/deployments/environments#get-an-environment
     */
    public function getAnEnvironment(string $owner, string $repo, string $environment_name): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/environments/{environment_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'environment_name' => $environment_name]
        );
    }

    /**
     * Create or update an environment.
     *
     * @link https://docs.github.com/rest/deployments/environments#create-or-update-an-environment
     */
    public function createOrUpdateAnEnvironment(
        string $owner,
        string $repo,
        string $environment_name,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/environments/{environment_name}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'environment_name' => $environment_name]
        );
    }

    /**
     * Delete an environment.
     *
     * @link https://docs.github.com/rest/deployments/environments#delete-an-environment
     */
    public function deleteAnEnvironment(string $owner, string $repo, string $environment_name): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/environments/{environment_name}',
            replace: ['owner' => $owner, 'repo' => $repo, 'environment_name' => $environment_name]
        );
    }

    /**
     * List deployment branch policies.
     *
     * @link https://docs.github.com/rest/deployments/branch-policies#list-deployment-branch-policies
     */
    public function listDeploymentBranchPolicies(
        string $owner,
        string $repo,
        string $environment_name,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'environment_name' => $environment_name,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Create a deployment branch policy.
     *
     * @link https://docs.github.com/rest/deployments/branch-policies#create-a-deployment-branch-policy
     */
    public function createADeploymentBranchPolicy(
        string $owner,
        string $repo,
        string $environment_name,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'environment_name' => $environment_name]
        );
    }

    /**
     * Get a deployment branch policy.
     *
     * @link https://docs.github.com/rest/deployments/branch-policies#get-a-deployment-branch-policy
     */
    public function getADeploymentBranchPolicy(
        string $owner,
        string $repo,
        string $environment_name,
        int $branch_policy_id
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'environment_name' => $environment_name,
                'branch_policy_id' => $branch_policy_id,
            ]
        );
    }

    /**
     * Update a deployment branch policy.
     *
     * @link https://docs.github.com/rest/deployments/branch-policies#update-a-deployment-branch-policy
     */
    public function updateADeploymentBranchPolicy(
        string $owner,
        string $repo,
        string $environment_name,
        int $branch_policy_id,
        array $requestBody
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}',
            data: $requestBody,
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'environment_name' => $environment_name,
                'branch_policy_id' => $branch_policy_id,
            ]
        );
    }

    /**
     * Delete a deployment branch policy.
     *
     * @link https://docs.github.com/rest/deployments/branch-policies#delete-a-deployment-branch-policy
     */
    public function deleteADeploymentBranchPolicy(
        string $owner,
        string $repo,
        string $environment_name,
        int $branch_policy_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'environment_name' => $environment_name,
                'branch_policy_id' => $branch_policy_id,
            ]
        );
    }

    /**
     * Get all deployment protection rules for an environment.
     *
     * @link https://docs.github.com/rest/deployments/protection-rules#get-all-deployment-protection-rules-for-an-environment
     */
    public function getAllDeploymentProtectionRulesForAnEnvironment(
        string $environment_name,
        string $repo,
        string $owner
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules',
            replace: ['environment_name' => $environment_name, 'repo' => $repo, 'owner' => $owner]
        );
    }

    /**
     * Create a custom deployment protection rule on an environment.
     *
     * @link https://docs.github.com/rest/deployments/protection-rules#create-a-custom-deployment-protection-rule-on-an-environment
     */
    public function createACustomDeploymentProtectionRuleOnAnEnvironment(
        string $environment_name,
        string $repo,
        string $owner,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules',
            data: $requestBody,
            replace: ['environment_name' => $environment_name, 'repo' => $repo, 'owner' => $owner]
        );
    }

    /**
     * List custom deployment rule integrations available for an environment.
     *
     * @link https://docs.github.com/rest/deployments/protection-rules#list-custom-deployment-rule-integrations-available-for-an-environment
     */
    public function listCustomDeploymentRuleIntegrationsAvailableForAnEnvironment(
        string $environment_name,
        string $repo,
        string $owner,
        int $page = null,
        int $per_page = 100
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/apps',
            replace: [
                'environment_name' => $environment_name,
                'repo' => $repo,
                'owner' => $owner,
                'page' => $page,
                'per_page' => $per_page,
            ]
        );
    }

    /**
     * Get a custom deployment protection rule.
     *
     * @link https://docs.github.com/rest/deployments/protection-rules#get-a-custom-deployment-protection-rule
     */
    public function getACustomDeploymentProtectionRule(
        string $owner,
        string $repo,
        string $environment_name,
        int $protection_rule_id
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'environment_name' => $environment_name,
                'protection_rule_id' => $protection_rule_id,
            ]
        );
    }

    /**
     * Disable a custom protection rule for an environment.
     *
     * @link https://docs.github.com/rest/deployments/protection-rules#disable-a-custom-protection-rule-for-an-environment
     */
    public function disableACustomProtectionRuleForAnEnvironment(
        string $environment_name,
        string $repo,
        string $owner,
        int $protection_rule_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}',
            replace: [
                'environment_name' => $environment_name,
                'repo' => $repo,
                'owner' => $owner,
                'protection_rule_id' => $protection_rule_id,
            ]
        );
    }

    /**
     * List forks.
     *
     * @link https://docs.github.com/rest/repos/forks#list-forks
     */
    public function listForks(
        string $owner,
        string $repo,
        string $sort = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/forks',
            replace: ['owner' => $owner, 'repo' => $repo, 'sort' => $sort, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a fork.
     *
     * @link https://docs.github.com/rest/repos/forks#create-a-fork
     */
    public function createAFork(string $owner, string $repo, array $requestBody = []): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/forks',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List repository webhooks.
     *
     * @link https://docs.github.com/rest/repos/webhooks#list-repository-webhooks
     */
    public function listRepositoryWebhooks(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/hooks',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#create-a-repository-webhook
     */
    public function createARepositoryWebhook(string $owner, string $repo, array $requestBody = []): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/hooks',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#get-a-repository-webhook
     */
    public function getARepositoryWebhook(string $owner, string $repo, int $hook_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id]
        );
    }

    /**
     * Update a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#update-a-repository-webhook
     */
    public function updateARepositoryWebhook(string $owner, string $repo, int $hook_id, array $requestBody): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id]
        );
    }

    /**
     * Delete a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#delete-a-repository-webhook
     */
    public function deleteARepositoryWebhook(string $owner, string $repo, int $hook_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id]
        );
    }

    /**
     * Get a webhook configuration for a repository.
     *
     * @link https://docs.github.com/rest/repos/webhooks#get-a-webhook-configuration-for-a-repository
     */
    public function getAWebhookConfigurationForARepository(string $owner, string $repo, int $hook_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}/config',
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id]
        );
    }

    /**
     * Update a webhook configuration for a repository.
     *
     * @link https://docs.github.com/rest/repos/webhooks#update-a-webhook-configuration-for-a-repository
     */
    public function updateAWebhookConfigurationForARepository(
        string $owner,
        string $repo,
        int $hook_id,
        array $requestBody = []
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}/config',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id]
        );
    }

    /**
     * List deliveries for a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#list-deliveries-for-a-repository-webhook
     */
    public function listDeliveriesForARepositoryWebhook(
        string $owner,
        string $repo,
        int $hook_id,
        int $per_page = 100,
        string $cursor = null,
        bool $redelivery = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'hook_id' => $hook_id,
                'per_page' => $per_page,
                'cursor' => $cursor,
                'redelivery' => $redelivery,
            ]
        );
    }

    /**
     * Get a delivery for a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#get-a-delivery-for-a-repository-webhook
     */
    public function getADeliveryForARepositoryWebhook(
        string $owner,
        string $repo,
        int $hook_id,
        int $delivery_id
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id, 'delivery_id' => $delivery_id]
        );
    }

    /**
     * Redeliver a delivery for a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#redeliver-a-delivery-for-a-repository-webhook
     */
    public function redeliverADeliveryForARepositoryWebhook(
        string $owner,
        string $repo,
        int $hook_id,
        int $delivery_id
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts',
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id, 'delivery_id' => $delivery_id]
        );
    }

    /**
     * Ping a repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#ping-a-repository-webhook
     */
    public function pingARepositoryWebhook(string $owner, string $repo, int $hook_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}/pings',
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id]
        );
    }

    /**
     * Test the push repository webhook.
     *
     * @link https://docs.github.com/rest/repos/webhooks#test-the-push-repository-webhook
     */
    public function testThePushRepositoryWebhook(string $owner, string $repo, int $hook_id): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/hooks/{hook_id}/tests',
            replace: ['owner' => $owner, 'repo' => $repo, 'hook_id' => $hook_id]
        );
    }

    /**
     * List repository invitations.
     *
     * @link https://docs.github.com/rest/collaborators/invitations#list-repository-invitations
     */
    public function listRepositoryInvitations(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/invitations',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Update a repository invitation.
     *
     * @link https://docs.github.com/rest/collaborators/invitations#update-a-repository-invitation
     */
    public function updateARepositoryInvitation(
        string $owner,
        string $repo,
        int $invitation_id,
        array $requestBody = []
    ): Response {
        return $this->patch(
            route: '/repos/{owner}/{repo}/invitations/{invitation_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'invitation_id' => $invitation_id]
        );
    }

    /**
     * Delete a repository invitation.
     *
     * @link https://docs.github.com/rest/collaborators/invitations#delete-a-repository-invitation
     */
    public function deleteARepositoryInvitation(string $owner, string $repo, int $invitation_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/invitations/{invitation_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'invitation_id' => $invitation_id]
        );
    }

    /**
     * List deploy keys.
     *
     * @link https://docs.github.com/rest/deploy-keys/deploy-keys#list-deploy-keys
     */
    public function listDeployKeys(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/keys',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a deploy key.
     *
     * @link https://docs.github.com/rest/deploy-keys/deploy-keys#create-a-deploy-key
     */
    public function createADeployKey(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/keys',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a deploy key.
     *
     * @link https://docs.github.com/rest/deploy-keys/deploy-keys#get-a-deploy-key
     */
    public function getADeployKey(string $owner, string $repo, int $key_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/keys/{key_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'key_id' => $key_id]
        );
    }

    /**
     * Delete a deploy key.
     *
     * @link https://docs.github.com/rest/deploy-keys/deploy-keys#delete-a-deploy-key
     */
    public function deleteADeployKey(string $owner, string $repo, int $key_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/keys/{key_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'key_id' => $key_id]
        );
    }

    /**
     * List repository languages.
     *
     * @link https://docs.github.com/rest/repos/repos#list-repository-languages
     */
    public function listRepositoryLanguages(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/languages',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Sync a fork branch with the upstream repository.
     *
     * @link https://docs.github.com/rest/branches/branches#sync-a-fork-branch-with-the-upstream-repository
     */
    public function syncAForkBranchWithTheUpstreamRepository(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/merge-upstream',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Merge a branch.
     *
     * @link https://docs.github.com/rest/branches/branches#merge-a-branch
     */
    public function mergeABranch(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/merges',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a GitHub Pages site.
     *
     * @link https://docs.github.com/rest/pages/pages#get-a-apiname-pages-site
     */
    public function getAGitHubPagesSite(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pages',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a GitHub Pages site.
     *
     * @link https://docs.github.com/rest/pages/pages#create-a-apiname-pages-site
     */
    public function createAGitHubPagesSite(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/pages',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Update information about a GitHub Pages site.
     *
     * @link https://docs.github.com/rest/pages/pages#update-information-about-a-apiname-pages-site
     */
    public function updateInformationAboutAGitHubPagesSite(string $owner, string $repo, array $requestBody): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/pages',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Delete a GitHub Pages site.
     *
     * @link https://docs.github.com/rest/pages/pages#delete-a-apiname-pages-site
     */
    public function deleteAGitHubPagesSite(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/pages',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List GitHub Pages builds.
     *
     * @link https://docs.github.com/rest/pages/pages#list-apiname-pages-builds
     */
    public function listGitHubPagesBuilds(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pages/builds',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Request a GitHub Pages build.
     *
     * @link https://docs.github.com/rest/pages/pages#request-a-apiname-pages-build
     */
    public function requestAGitHubPagesBuild(string $owner, string $repo): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/pages/builds',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get latest Pages build.
     *
     * @link https://docs.github.com/rest/pages/pages#get-latest-pages-build
     */
    public function getLatestPagesBuild(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pages/builds/latest',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get GitHub Pages build.
     *
     * @link https://docs.github.com/rest/pages/pages#get-apiname-pages-build
     */
    public function getGitHubPagesBuild(string $owner, string $repo, int $build_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pages/builds/{build_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'build_id' => $build_id]
        );
    }

    /**
     * Create a GitHub Pages deployment.
     *
     * @link https://docs.github.com/rest/pages/pages#create-a-github-pages-deployment
     */
    public function createAGitHubPagesDeployment(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/pages/deployment',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a DNS health check for GitHub Pages.
     *
     * @link https://docs.github.com/rest/pages/pages#get-a-dns-health-check-for-github-pages
     */
    public function getADNSHealthCheckForGitHubPages(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/pages/health',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Enable private vulnerability reporting for a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#enable-private-vulnerability-reporting-for-a-repository
     */
    public function enablePrivateVulnerabilityReportingForARepository(string $owner, string $repo): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/private-vulnerability-reporting',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Disable private vulnerability reporting for a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#disable-private-vulnerability-reporting-for-a-repository
     */
    public function disablePrivateVulnerabilityReportingForARepository(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/private-vulnerability-reporting',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get all custom property values for a repository.
     *
     * @link https://docs.github.com/rest/repos/custom-properties#get-all-custom-property-values-for-a-repository
     */
    public function getAllCustomPropertyValuesForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/properties/values',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a repository README.
     *
     * @link https://docs.github.com/rest/repos/contents#get-a-repository-readme
     */
    public function getARepositoryREADME(string $owner, string $repo, string $ref = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/readme',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * Get a repository README for a directory.
     *
     * @link https://docs.github.com/rest/repos/contents#get-a-repository-readme-for-a-directory
     */
    public function getARepositoryREADMEForADirectory(
        string $owner,
        string $repo,
        string $dir,
        string $ref = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/readme/{dir}',
            replace: ['owner' => $owner, 'repo' => $repo, 'dir' => $dir, 'ref' => $ref]
        );
    }

    /**
     * List releases.
     *
     * @link https://docs.github.com/rest/releases/releases#list-releases
     */
    public function listReleases(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/releases',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a release.
     *
     * @link https://docs.github.com/rest/releases/releases#create-a-release
     */
    public function createARelease(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/releases',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a release asset.
     *
     * @link https://docs.github.com/rest/releases/assets#get-a-release-asset
     */
    public function getAReleaseAsset(string $owner, string $repo, int $asset_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/releases/assets/{asset_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'asset_id' => $asset_id]
        );
    }

    /**
     * Update a release asset.
     *
     * @link https://docs.github.com/rest/releases/assets#update-a-release-asset
     */
    public function updateAReleaseAsset(string $owner, string $repo, int $asset_id, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/releases/assets/{asset_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'asset_id' => $asset_id]
        );
    }

    /**
     * Delete a release asset.
     *
     * @link https://docs.github.com/rest/releases/assets#delete-a-release-asset
     */
    public function deleteAReleaseAsset(string $owner, string $repo, int $asset_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/releases/assets/{asset_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'asset_id' => $asset_id]
        );
    }

    /**
     * Generate release notes content for a release.
     *
     * @link https://docs.github.com/rest/releases/releases#generate-release-notes-content-for-a-release
     */
    public function generateReleaseNotesContentForARelease(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/releases/generate-notes',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get the latest release.
     *
     * @link https://docs.github.com/rest/releases/releases#get-the-latest-release
     */
    public function getTheLatestRelease(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/releases/latest',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get a release by tag name.
     *
     * @link https://docs.github.com/rest/releases/releases#get-a-release-by-tag-name
     */
    public function getAReleaseByTagName(string $owner, string $repo, string $tag): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/releases/tags/{tag}',
            replace: ['owner' => $owner, 'repo' => $repo, 'tag' => $tag]
        );
    }

    /**
     * Get a release.
     *
     * @link https://docs.github.com/rest/releases/releases#get-a-release
     */
    public function getARelease(string $owner, string $repo, int $release_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/releases/{release_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'release_id' => $release_id]
        );
    }

    /**
     * Update a release.
     *
     * @link https://docs.github.com/rest/releases/releases#update-a-release
     */
    public function updateARelease(string $owner, string $repo, int $release_id, array $requestBody = []): Response
    {
        return $this->patch(
            route: '/repos/{owner}/{repo}/releases/{release_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'release_id' => $release_id]
        );
    }

    /**
     * Delete a release.
     *
     * @link https://docs.github.com/rest/releases/releases#delete-a-release
     */
    public function deleteARelease(string $owner, string $repo, int $release_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/releases/{release_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'release_id' => $release_id]
        );
    }

    /**
     * List release assets.
     *
     * @link https://docs.github.com/rest/releases/assets#list-release-assets
     */
    public function listReleaseAssets(
        string $owner,
        string $repo,
        int $release_id,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/releases/{release_id}/assets',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'release_id' => $release_id,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Upload a release asset.
     *
     * @link https://docs.github.com/rest/releases/assets#upload-a-release-asset
     */
    public function uploadAReleaseAsset(
        string $owner,
        string $repo,
        int $release_id,
        string $name,
        string $label = null,
        array $requestBody = []
    ): Response {
        return $this->post(
            route: '/repos/{owner}/{repo}/releases/{release_id}/assets',
            data: $requestBody,
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'release_id' => $release_id,
                'name' => $name,
                'label' => $label,
            ]
        );
    }

    /**
     * Get rules for a branch.
     *
     * @link https://docs.github.com/rest/repos/rules#get-rules-for-a-branch
     */
    public function getRulesForABranch(
        string $owner,
        string $repo,
        string $branch,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/rules/branches/{branch}',
            replace: ['owner' => $owner, 'repo' => $repo, 'branch' => $branch, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get all repository rulesets.
     *
     * @link https://docs.github.com/rest/repos/rules#get-all-repository-rulesets
     */
    public function getAllRepositoryRulesets(
        string $owner,
        string $repo,
        int $per_page = 100,
        int $page = null,
        bool $includes_parents = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/rulesets',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'per_page' => $per_page,
                'page' => $page,
                'includes_parents' => $includes_parents,
            ]
        );
    }

    /**
     * Create a repository ruleset.
     *
     * @link https://docs.github.com/rest/repos/rules#create-a-repository-ruleset
     */
    public function createARepositoryRuleset(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/rulesets',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * List repository rule suites.
     *
     * @link https://docs.github.com/rest/repos/rule-suites#list-repository-rule-suites
     */
    public function listRepositoryRuleSuites(
        string $owner,
        string $repo,
        string $ref = null,
        string $time_period = null,
        string $actor_name = null,
        string $rule_suite_result = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/rulesets/rule-suites',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'ref' => $ref,
                'time_period' => $time_period,
                'actor_name' => $actor_name,
                'rule_suite_result' => $rule_suite_result,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }

    /**
     * Get a repository rule suite.
     *
     * @link https://docs.github.com/rest/repos/rule-suites#get-a-repository-rule-suite
     */
    public function getARepositoryRuleSuite(string $owner, string $repo, int $rule_suite_id): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/rulesets/rule-suites/{rule_suite_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'rule_suite_id' => $rule_suite_id]
        );
    }

    /**
     * Get a repository ruleset.
     *
     * @link https://docs.github.com/rest/repos/rules#get-a-repository-ruleset
     */
    public function getARepositoryRuleset(
        string $owner,
        string $repo,
        int $ruleset_id,
        bool $includes_parents = null
    ): Response {
        return $this->get(
            route: '/repos/{owner}/{repo}/rulesets/{ruleset_id}',
            replace: [
                'owner' => $owner,
                'repo' => $repo,
                'ruleset_id' => $ruleset_id,
                'includes_parents' => $includes_parents,
            ]
        );
    }

    /**
     * Update a repository ruleset.
     *
     * @link https://docs.github.com/rest/repos/rules#update-a-repository-ruleset
     */
    public function updateARepositoryRuleset(
        string $owner,
        string $repo,
        int $ruleset_id,
        array $requestBody = []
    ): Response {
        return $this->put(
            route: '/repos/{owner}/{repo}/rulesets/{ruleset_id}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'ruleset_id' => $ruleset_id]
        );
    }

    /**
     * Delete a repository ruleset.
     *
     * @link https://docs.github.com/rest/repos/rules#delete-a-repository-ruleset
     */
    public function deleteARepositoryRuleset(string $owner, string $repo, int $ruleset_id): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/rulesets/{ruleset_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'ruleset_id' => $ruleset_id]
        );
    }

    /**
     * Get the weekly commit activity.
     *
     * @link https://docs.github.com/rest/metrics/statistics#get-the-weekly-commit-activity
     */
    public function getTheWeeklyCommitActivity(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/stats/code_frequency',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get the last year of commit activity.
     *
     * @link https://docs.github.com/rest/metrics/statistics#get-the-last-year-of-commit-activity
     */
    public function getTheLastYearOfCommitActivity(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/stats/commit_activity',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get all contributor commit activity.
     *
     * @link https://docs.github.com/rest/metrics/statistics#get-all-contributor-commit-activity
     */
    public function getAllContributorCommitActivity(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/stats/contributors',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get the weekly commit count.
     *
     * @link https://docs.github.com/rest/metrics/statistics#get-the-weekly-commit-count
     */
    public function getTheWeeklyCommitCount(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/stats/participation',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get the hourly commit count for each day.
     *
     * @link https://docs.github.com/rest/metrics/statistics#get-the-hourly-commit-count-for-each-day
     */
    public function getTheHourlyCommitCountForEachDay(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/stats/punch_card',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a commit status.
     *
     * @link https://docs.github.com/rest/commits/statuses#create-a-commit-status
     */
    public function createACommitStatus(string $owner, string $repo, string $sha, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/statuses/{sha}',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo, 'sha' => $sha]
        );
    }

    /**
     * List repository tags.
     *
     * @link https://docs.github.com/rest/repos/repos#list-repository-tags
     */
    public function listRepositoryTags(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/tags',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List tag protection states for a repository.
     *
     * @link https://docs.github.com/rest/repos/tags#list-tag-protection-states-for-a-repository
     */
    public function listTagProtectionStatesForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/tags/protection',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Create a tag protection state for a repository.
     *
     * @link https://docs.github.com/rest/repos/tags#create-a-tag-protection-state-for-a-repository
     */
    public function createATagProtectionStateForARepository(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/tags/protection',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Delete a tag protection state for a repository.
     *
     * @link https://docs.github.com/rest/repos/tags#delete-a-tag-protection-state-for-a-repository
     */
    public function deleteATagProtectionStateForARepository(
        string $owner,
        string $repo,
        int $tag_protection_id
    ): Response {
        return $this->delete(
            route: '/repos/{owner}/{repo}/tags/protection/{tag_protection_id}',
            replace: ['owner' => $owner, 'repo' => $repo, 'tag_protection_id' => $tag_protection_id]
        );
    }

    /**
     * Download a repository archive (tar).
     *
     * @link https://docs.github.com/rest/repos/contents#download-a-repository-archive-tar
     */
    public function downloadARepositoryArchiveTar(string $owner, string $repo, string $ref): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/tarball/{ref}',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * List repository teams.
     *
     * @link https://docs.github.com/rest/repos/repos#list-repository-teams
     */
    public function listRepositoryTeams(string $owner, string $repo, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/teams',
            replace: ['owner' => $owner, 'repo' => $repo, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get all repository topics.
     *
     * @link https://docs.github.com/rest/repos/repos#get-all-repository-topics
     */
    public function getAllRepositoryTopics(string $owner, string $repo, int $page = null, int $per_page = 100): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/topics',
            replace: ['owner' => $owner, 'repo' => $repo, 'page' => $page, 'per_page' => $per_page]
        );
    }

    /**
     * Replace all repository topics.
     *
     * @link https://docs.github.com/rest/repos/repos#replace-all-repository-topics
     */
    public function replaceAllRepositoryTopics(string $owner, string $repo, array $requestBody): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/topics',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get repository clones.
     *
     * @link https://docs.github.com/rest/metrics/traffic#get-repository-clones
     */
    public function getRepositoryClones(string $owner, string $repo, string $per = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/traffic/clones',
            replace: ['owner' => $owner, 'repo' => $repo, 'per' => $per]
        );
    }

    /**
     * Get top referral paths.
     *
     * @link https://docs.github.com/rest/metrics/traffic#get-top-referral-paths
     */
    public function getTopReferralPaths(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/traffic/popular/paths',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get top referral sources.
     *
     * @link https://docs.github.com/rest/metrics/traffic#get-top-referral-sources
     */
    public function getTopReferralSources(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/traffic/popular/referrers',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Get page views.
     *
     * @link https://docs.github.com/rest/metrics/traffic#get-page-views
     */
    public function getPageViews(string $owner, string $repo, string $per = null): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/traffic/views',
            replace: ['owner' => $owner, 'repo' => $repo, 'per' => $per]
        );
    }

    /**
     * Transfer a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#transfer-a-repository
     */
    public function transferARepository(string $owner, string $repo, array $requestBody): Response
    {
        return $this->post(
            route: '/repos/{owner}/{repo}/transfer',
            data: $requestBody,
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Check if vulnerability alerts are enabled for a repository.
     *
     * @link https://docs.github.com/rest/repos/repos#check-if-vulnerability-alerts-are-enabled-for-a-repository
     */
    public function checkIfVulnerabilityAlertsAreEnabledForARepository(string $owner, string $repo): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/vulnerability-alerts',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Enable vulnerability alerts.
     *
     * @link https://docs.github.com/rest/repos/repos#enable-vulnerability-alerts
     */
    public function enableVulnerabilityAlerts(string $owner, string $repo): Response
    {
        return $this->put(
            route: '/repos/{owner}/{repo}/vulnerability-alerts',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Disable vulnerability alerts.
     *
     * @link https://docs.github.com/rest/repos/repos#disable-vulnerability-alerts
     */
    public function disableVulnerabilityAlerts(string $owner, string $repo): Response
    {
        return $this->delete(
            route: '/repos/{owner}/{repo}/vulnerability-alerts',
            replace: ['owner' => $owner, 'repo' => $repo]
        );
    }

    /**
     * Download a repository archive (zip).
     *
     * @link https://docs.github.com/rest/repos/contents#download-a-repository-archive-zip
     */
    public function downloadARepositoryArchiveZip(string $owner, string $repo, string $ref): Response
    {
        return $this->get(
            route: '/repos/{owner}/{repo}/zipball/{ref}',
            replace: ['owner' => $owner, 'repo' => $repo, 'ref' => $ref]
        );
    }

    /**
     * Create a repository using a template.
     *
     * @link https://docs.github.com/rest/repos/repos#create-a-repository-using-a-template
     */
    public function createARepositoryUsingATemplate(
        string $template_owner,
        string $template_repo,
        array $requestBody
    ): Response {
        return $this->post(
            route: '/repos/{template_owner}/{template_repo}/generate',
            data: $requestBody,
            replace: ['template_owner' => $template_owner, 'template_repo' => $template_repo]
        );
    }

    /**
     * List public repositories.
     *
     * @link https://docs.github.com/rest/repos/repos#list-public-repositories
     */
    public function listPublicRepositories(int $since = null): Response
    {
        return $this->get(
            route: '/repositories',
            replace: ['since' => $since]
        );
    }

    /**
     * List repositories for the authenticated user.
     *
     * @link https://docs.github.com/rest/repos/repos#list-repositories-for-the-authenticated-user
     */
    public function listRepositoriesForTheAuthenticatedUser(
        string $visibility = null,
        string $affiliation = null,
        string $type = null,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null,
        string $since = null,
        string $before = null
    ): Response {
        return $this->get(
            route: '/user/repos',
            replace: [
                'visibility' => $visibility,
                'affiliation' => $affiliation,
                'type' => $type,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
                'since' => $since,
                'before' => $before,
            ]
        );
    }

    /**
     * Create a repository for the authenticated user.
     *
     * @link https://docs.github.com/rest/repos/repos#create-a-repository-for-the-authenticated-user
     */
    public function createARepositoryForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->post(
            route: '/user/repos',
            data: $requestBody
        );
    }

    /**
     * List repository invitations for the authenticated user.
     *
     * @link https://docs.github.com/rest/collaborators/invitations#list-repository-invitations-for-the-authenticated-user
     */
    public function listRepositoryInvitationsForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/repository_invitations',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Accept a repository invitation.
     *
     * @link https://docs.github.com/rest/collaborators/invitations#accept-a-repository-invitation
     */
    public function acceptARepositoryInvitation(int $invitation_id): Response
    {
        return $this->patch(
            route: '/user/repository_invitations/{invitation_id}',
            replace: ['invitation_id' => $invitation_id]
        );
    }

    /**
     * Decline a repository invitation.
     *
     * @link https://docs.github.com/rest/collaborators/invitations#decline-a-repository-invitation
     */
    public function declineARepositoryInvitation(int $invitation_id): Response
    {
        return $this->delete(
            route: '/user/repository_invitations/{invitation_id}',
            replace: ['invitation_id' => $invitation_id]
        );
    }

    /**
     * List repositories for a user.
     *
     * @link https://docs.github.com/rest/repos/repos#list-repositories-for-a-user
     */
    public function listRepositoriesForAUser(
        string $username,
        string $type = null,
        string $sort = null,
        string $direction = null,
        int $per_page = 100,
        int $page = null
    ): Response {
        return $this->get(
            route: '/users/{username}/repos',
            replace: [
                'username' => $username,
                'type' => $type,
                'sort' => $sort,
                'direction' => $direction,
                'per_page' => $per_page,
                'page' => $page,
            ]
        );
    }
}

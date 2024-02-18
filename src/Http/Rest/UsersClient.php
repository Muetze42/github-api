<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class UsersClient extends AbstractClient
{
    /**
     * Get the authenticated user.
     *
     * @link https://docs.github.com/rest/users/users#get-the-authenticated-user
     */
    public function getTheAuthenticatedUser(): Response
    {
        return $this->get(
            route: '/user'
        );
    }

    /**
     * Update the authenticated user.
     *
     * @link https://docs.github.com/rest/users/users#update-the-authenticated-user
     */
    public function updateTheAuthenticatedUser(array $requestBody = []): Response
    {
        return $this->patch(
            route: '/user',
            data: $requestBody
        );
    }

    /**
     * List users blocked by the authenticated user.
     *
     * @link https://docs.github.com/rest/users/blocking#list-users-blocked-by-the-authenticated-user
     */
    public function listUsersBlockedByTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/blocks',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check if a user is blocked by the authenticated user.
     *
     * @link https://docs.github.com/rest/users/blocking#check-if-a-user-is-blocked-by-the-authenticated-user
     */
    public function checkIfAUserIsBlockedByTheAuthenticatedUser(string $username): Response
    {
        return $this->get(
            route: '/user/blocks/{username}',
            replace: ['username' => $username]
        );
    }

    /**
     * Block a user.
     *
     * @link https://docs.github.com/rest/users/blocking#block-a-user
     */
    public function blockAUser(string $username): Response
    {
        return $this->put(
            route: '/user/blocks/{username}',
            replace: ['username' => $username]
        );
    }

    /**
     * Unblock a user.
     *
     * @link https://docs.github.com/rest/users/blocking#unblock-a-user
     */
    public function unblockAUser(string $username): Response
    {
        return $this->delete(
            route: '/user/blocks/{username}',
            replace: ['username' => $username]
        );
    }

    /**
     * Set primary email visibility for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/emails#set-primary-email-visibility-for-the-authenticated-user
     */
    public function setPrimaryEmailVisibilityForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->patch(
            route: '/user/email/visibility',
            data: $requestBody
        );
    }

    /**
     * List email addresses for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/emails#list-email-addresses-for-the-authenticated-user
     */
    public function listEmailAddressesForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/emails',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Add an email address for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/emails#add-an-email-address-for-the-authenticated-user
     */
    public function addAnEmailAddressForTheAuthenticatedUser(array $requestBody = []): Response
    {
        return $this->post(
            route: '/user/emails',
            data: $requestBody
        );
    }

    /**
     * Delete an email address for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/emails#delete-an-email-address-for-the-authenticated-user
     */
    public function deleteAnEmailAddressForTheAuthenticatedUser(array $requestBody = []): Response
    {
        return $this->delete(
            route: '/user/emails',
            data: $requestBody
        );
    }

    /**
     * List followers of the authenticated user.
     *
     * @link https://docs.github.com/rest/users/followers#list-followers-of-the-authenticated-user
     */
    public function listFollowersOfTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/followers',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List the people the authenticated user follows.
     *
     * @link https://docs.github.com/rest/users/followers#list-the-people-the-authenticated-user-follows
     */
    public function listThePeopleTheAuthenticatedUserFollows(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/following',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check if a person is followed by the authenticated user.
     *
     * @link https://docs.github.com/rest/users/followers#check-if-a-person-is-followed-by-the-authenticated-user
     */
    public function checkIfAPersonIsFollowedByTheAuthenticatedUser(string $username): Response
    {
        return $this->get(
            route: '/user/following/{username}',
            replace: ['username' => $username]
        );
    }

    /**
     * Follow a user.
     *
     * @link https://docs.github.com/rest/users/followers#follow-a-user
     */
    public function followAUser(string $username): Response
    {
        return $this->put(
            route: '/user/following/{username}',
            replace: ['username' => $username]
        );
    }

    /**
     * Unfollow a user.
     *
     * @link https://docs.github.com/rest/users/followers#unfollow-a-user
     */
    public function unfollowAUser(string $username): Response
    {
        return $this->delete(
            route: '/user/following/{username}',
            replace: ['username' => $username]
        );
    }

    /**
     * List GPG keys for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/gpg-keys#list-gpg-keys-for-the-authenticated-user
     */
    public function listGPGKeysForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/gpg_keys',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a GPG key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/gpg-keys#create-a-gpg-key-for-the-authenticated-user
     */
    public function createAGPGKeyForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->post(
            route: '/user/gpg_keys',
            data: $requestBody
        );
    }

    /**
     * Get a GPG key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/gpg-keys#get-a-gpg-key-for-the-authenticated-user
     */
    public function getAGPGKeyForTheAuthenticatedUser(int $gpg_key_id): Response
    {
        return $this->get(
            route: '/user/gpg_keys/{gpg_key_id}',
            replace: ['gpg_key_id' => $gpg_key_id]
        );
    }

    /**
     * Delete a GPG key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/gpg-keys#delete-a-gpg-key-for-the-authenticated-user
     */
    public function deleteAGPGKeyForTheAuthenticatedUser(int $gpg_key_id): Response
    {
        return $this->delete(
            route: '/user/gpg_keys/{gpg_key_id}',
            replace: ['gpg_key_id' => $gpg_key_id]
        );
    }

    /**
     * List public SSH keys for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/keys#list-public-ssh-keys-for-the-authenticated-user
     */
    public function listPublicSSHKeysForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/keys',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a public SSH key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/keys#create-a-public-ssh-key-for-the-authenticated-user
     */
    public function createAPublicSSHKeyForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->post(
            route: '/user/keys',
            data: $requestBody
        );
    }

    /**
     * Get a public SSH key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/keys#get-a-public-ssh-key-for-the-authenticated-user
     */
    public function getAPublicSSHKeyForTheAuthenticatedUser(int $key_id): Response
    {
        return $this->get(
            route: '/user/keys/{key_id}',
            replace: ['key_id' => $key_id]
        );
    }

    /**
     * Delete a public SSH key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/keys#delete-a-public-ssh-key-for-the-authenticated-user
     */
    public function deleteAPublicSSHKeyForTheAuthenticatedUser(int $key_id): Response
    {
        return $this->delete(
            route: '/user/keys/{key_id}',
            replace: ['key_id' => $key_id]
        );
    }

    /**
     * List public email addresses for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/emails#list-public-email-addresses-for-the-authenticated-user
     */
    public function listPublicEmailAddressesForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/public_emails',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List social accounts for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/social-accounts#list-social-accounts-for-the-authenticated-user
     */
    public function listSocialAccountsForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/social_accounts',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Add social accounts for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/social-accounts#add-social-accounts-for-the-authenticated-user
     */
    public function addSocialAccountsForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->post(
            route: '/user/social_accounts',
            data: $requestBody
        );
    }

    /**
     * Delete social accounts for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/social-accounts#delete-social-accounts-for-the-authenticated-user
     */
    public function deleteSocialAccountsForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->delete(
            route: '/user/social_accounts',
            data: $requestBody
        );
    }

    /**
     * List SSH signing keys for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/ssh-signing-keys#list-ssh-signing-keys-for-the-authenticated-user
     */
    public function listSSHSigningKeysForTheAuthenticatedUser(int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/user/ssh_signing_keys',
            replace: ['per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Create a SSH signing key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/ssh-signing-keys#create-a-ssh-signing-key-for-the-authenticated-user
     */
    public function createASSHSigningKeyForTheAuthenticatedUser(array $requestBody): Response
    {
        return $this->post(
            route: '/user/ssh_signing_keys',
            data: $requestBody
        );
    }

    /**
     * Get an SSH signing key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/ssh-signing-keys#get-an-ssh-signing-key-for-the-authenticated-user
     */
    public function getAnSSHSigningKeyForTheAuthenticatedUser(int $ssh_signing_key_id): Response
    {
        return $this->get(
            route: '/user/ssh_signing_keys/{ssh_signing_key_id}',
            replace: ['ssh_signing_key_id' => $ssh_signing_key_id]
        );
    }

    /**
     * Delete an SSH signing key for the authenticated user.
     *
     * @link https://docs.github.com/rest/users/ssh-signing-keys#delete-an-ssh-signing-key-for-the-authenticated-user
     */
    public function deleteAnSSHSigningKeyForTheAuthenticatedUser(int $ssh_signing_key_id): Response
    {
        return $this->delete(
            route: '/user/ssh_signing_keys/{ssh_signing_key_id}',
            replace: ['ssh_signing_key_id' => $ssh_signing_key_id]
        );
    }

    /**
     * List users.
     *
     * @link https://docs.github.com/rest/users/users#list-users
     */
    public function listUsers(int $since = null, int $per_page = 100): Response
    {
        return $this->get(
            route: '/users',
            replace: ['since' => $since, 'per_page' => $per_page]
        );
    }

    /**
     * Get a user.
     *
     * @link https://docs.github.com/rest/users/users#get-a-user
     */
    public function getAUser(string $username): Response
    {
        return $this->get(
            route: '/users/{username}',
            replace: ['username' => $username]
        );
    }

    /**
     * List followers of a user.
     *
     * @link https://docs.github.com/rest/users/followers#list-followers-of-a-user
     */
    public function listFollowersOfAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/followers',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List the people a user follows.
     *
     * @link https://docs.github.com/rest/users/followers#list-the-people-a-user-follows
     */
    public function listThePeopleAUserFollows(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/following',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Check if a user follows another user.
     *
     * @link https://docs.github.com/rest/users/followers#check-if-a-user-follows-another-user
     */
    public function checkIfAUserFollowsAnotherUser(string $username, string $target_user): Response
    {
        return $this->get(
            route: '/users/{username}/following/{target_user}',
            replace: ['username' => $username, 'target_user' => $target_user]
        );
    }

    /**
     * List GPG keys for a user.
     *
     * @link https://docs.github.com/rest/users/gpg-keys#list-gpg-keys-for-a-user
     */
    public function listGPGKeysForAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/gpg_keys',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * Get contextual information for a user.
     *
     * @link https://docs.github.com/rest/users/users#get-contextual-information-for-a-user
     */
    public function getContextualInformationForAUser(
        string $username,
        string $subject_type = null,
        string $subject_id = null
    ): Response {
        return $this->get(
            route: '/users/{username}/hovercard',
            replace: ['username' => $username, 'subject_type' => $subject_type, 'subject_id' => $subject_id]
        );
    }

    /**
     * List public keys for a user.
     *
     * @link https://docs.github.com/rest/users/keys#list-public-keys-for-a-user
     */
    public function listPublicKeysForAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/keys',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List social accounts for a user.
     *
     * @link https://docs.github.com/rest/users/social-accounts#list-social-accounts-for-a-user
     */
    public function listSocialAccountsForAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/social_accounts',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }

    /**
     * List SSH signing keys for a user.
     *
     * @link https://docs.github.com/rest/users/ssh-signing-keys#list-ssh-signing-keys-for-a-user
     */
    public function listSSHSigningKeysForAUser(string $username, int $per_page = 100, int $page = null): Response
    {
        return $this->get(
            route: '/users/{username}/ssh_signing_keys',
            replace: ['username' => $username, 'per_page' => $per_page, 'page' => $page]
        );
    }
}

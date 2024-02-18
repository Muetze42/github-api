<?php

namespace NormanHuth\GithubApi;

use NormanHuth\GithubApi\Http\Rest\ActionsClient;
use NormanHuth\GithubApi\Http\Rest\ActivityClient;
use NormanHuth\GithubApi\Http\Rest\AppsClient;
use NormanHuth\GithubApi\Http\Rest\BillingClient;
use NormanHuth\GithubApi\Http\Rest\ChecksClient;
use NormanHuth\GithubApi\Http\Rest\ClassroomClient;
use NormanHuth\GithubApi\Http\Rest\CodeScanningClient;
use NormanHuth\GithubApi\Http\Rest\CodesOfConductClient;
use NormanHuth\GithubApi\Http\Rest\CodespacesClient;
use NormanHuth\GithubApi\Http\Rest\CopilotClient;
use NormanHuth\GithubApi\Http\Rest\DependabotClient;
use NormanHuth\GithubApi\Http\Rest\DependencyGraphClient;
use NormanHuth\GithubApi\Http\Rest\EmojisClient;
use NormanHuth\GithubApi\Http\Rest\GistsClient;
use NormanHuth\GithubApi\Http\Rest\GitClient;
use NormanHuth\GithubApi\Http\Rest\GitignoreClient;
use NormanHuth\GithubApi\Http\Rest\InteractionsClient;
use NormanHuth\GithubApi\Http\Rest\IssuesClient;
use NormanHuth\GithubApi\Http\Rest\LicensesClient;
use NormanHuth\GithubApi\Http\Rest\MarkdownClient;
use NormanHuth\GithubApi\Http\Rest\MetaClient;
use NormanHuth\GithubApi\Http\Rest\MigrationsClient;
use NormanHuth\GithubApi\Http\Rest\OidcClient;
use NormanHuth\GithubApi\Http\Rest\OrgsClient;
use NormanHuth\GithubApi\Http\Rest\PackagesClient;
use NormanHuth\GithubApi\Http\Rest\ProjectsClient;
use NormanHuth\GithubApi\Http\Rest\PullsClient;
use NormanHuth\GithubApi\Http\Rest\RateLimitClient;
use NormanHuth\GithubApi\Http\Rest\ReactionsClient;
use NormanHuth\GithubApi\Http\Rest\ReposClient;
use NormanHuth\GithubApi\Http\Rest\SearchClient;
use NormanHuth\GithubApi\Http\Rest\SecretScanningClient;
use NormanHuth\GithubApi\Http\Rest\SecurityAdvisoriesClient;
use NormanHuth\GithubApi\Http\Rest\TeamsClient;
use NormanHuth\GithubApi\Http\Rest\UsersClient;

class Client
{
    /**
     * The authorization Bearer token for the client requests.
     */
    private string $token;

    /**
     * Create a new client instance.
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function actions(): ActionsClient
    {
        return new ActionsClient($this->token);
    }

    public function activity(): ActivityClient
    {
        return new ActivityClient($this->token);
    }

    public function apps(): AppsClient
    {
        return new AppsClient($this->token);
    }

    public function billing(): BillingClient
    {
        return new BillingClient($this->token);
    }

    public function checks(): ChecksClient
    {
        return new ChecksClient($this->token);
    }

    public function classroom(): ClassroomClient
    {
        return new ClassroomClient($this->token);
    }

    public function codeScanning(): CodeScanningClient
    {
        return new CodeScanningClient($this->token);
    }

    public function codesOfConduct(): CodesOfConductClient
    {
        return new CodesOfConductClient($this->token);
    }

    public function codespaces(): CodespacesClient
    {
        return new CodespacesClient($this->token);
    }

    public function copilot(): CopilotClient
    {
        return new CopilotClient($this->token);
    }

    public function dependabot(): DependabotClient
    {
        return new DependabotClient($this->token);
    }

    public function dependencyGraph(): DependencyGraphClient
    {
        return new DependencyGraphClient($this->token);
    }

    public function emojis(): EmojisClient
    {
        return new EmojisClient($this->token);
    }

    public function gists(): GistsClient
    {
        return new GistsClient($this->token);
    }

    public function git(): GitClient
    {
        return new GitClient($this->token);
    }

    public function gitignore(): GitignoreClient
    {
        return new GitignoreClient($this->token);
    }

    public function interactions(): InteractionsClient
    {
        return new InteractionsClient($this->token);
    }

    public function issues(): IssuesClient
    {
        return new IssuesClient($this->token);
    }

    public function licenses(): LicensesClient
    {
        return new LicensesClient($this->token);
    }

    public function markdown(): MarkdownClient
    {
        return new MarkdownClient($this->token);
    }

    public function meta(): MetaClient
    {
        return new MetaClient($this->token);
    }

    public function migrations(): MigrationsClient
    {
        return new MigrationsClient($this->token);
    }

    public function oidc(): OidcClient
    {
        return new OidcClient($this->token);
    }

    public function orgs(): OrgsClient
    {
        return new OrgsClient($this->token);
    }

    public function packages(): PackagesClient
    {
        return new PackagesClient($this->token);
    }

    public function projects(): ProjectsClient
    {
        return new ProjectsClient($this->token);
    }

    public function pulls(): PullsClient
    {
        return new PullsClient($this->token);
    }

    public function rateLimit(): RateLimitClient
    {
        return new RateLimitClient($this->token);
    }

    public function reactions(): ReactionsClient
    {
        return new ReactionsClient($this->token);
    }

    public function repos(): ReposClient
    {
        return new ReposClient($this->token);
    }

    public function search(): SearchClient
    {
        return new SearchClient($this->token);
    }

    public function secretScanning(): SecretScanningClient
    {
        return new SecretScanningClient($this->token);
    }

    public function securityAdvisories(): SecurityAdvisoriesClient
    {
        return new SecurityAdvisoriesClient($this->token);
    }

    public function teams(): TeamsClient
    {
        return new TeamsClient($this->token);
    }

    public function users(): UsersClient
    {
        return new UsersClient($this->token);
    }
}

<?php

namespace NormanHuth\GithubApi\Http\Rest;

use Illuminate\Http\Client\Response;
use NormanHuth\GithubApi\AbstractClient;

class MarkdownClient extends AbstractClient
{
    /**
     * Render a Markdown document.
     *
     * @link https://docs.github.com/rest/markdown/markdown#render-a-markdown-document
     */
    public function renderAMarkdownDocument(array $requestBody): Response
    {
        return $this->post(
            route: '/markdown',
            data: $requestBody
        );
    }

    /**
     * Render a Markdown document in raw mode.
     *
     * @link https://docs.github.com/rest/markdown/markdown#render-a-markdown-document-in-raw-mode
     */
    public function renderAMarkdownDocumentInRawMode(array $requestBody = []): Response
    {
        return $this->post(
            route: '/markdown/raw',
            data: $requestBody
        );
    }
}

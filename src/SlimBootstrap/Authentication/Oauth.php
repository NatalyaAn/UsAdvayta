<?php
namespace SlimBootstrap\Authentication;

use \Http;
use \Monolog;
use \Psr\Http\Message;
use \SlimBootstrap;

/**
 * This class is reponsible for checking if the current user is authenticated to call the API.
 * It does that by validating the token parameter against the given oauth API.
 *
 * @package SlimBootstrap\Authentication
 */
class Oauth implements SlimBootstrap\Authentication
{
    /**
     * URL of the oauth authentication service.
     *
     * @var string
     */
    private $apiUrl = '';

    /**
     * @var string
     */
    private $clientIdField = '';

    /**
     * @var Http\Caller
     */
    private $httpCaller = null;

    /**
     * @var Monolog\Logger
     */
    private $logger = null;

    /**
     * @param string         $apiUrl        URL of the oauth authentication service
     * @param string         $clientIdField Name of the field where the clientId can be found in the response
     * @param Http\Caller    $httpCaller    Caller class to make http calls
     * @param Monolog\Logger $logger        Logger instance
     */
    public function __construct(string $apiUrl, string $clientIdField, Http\Caller $httpCaller, Monolog\Logger $logger)
    {
        $this->apiUrl        = $apiUrl;
        $this->clientIdField = $clientIdField;
        $this->httpCaller    = $httpCaller;
        $this->logger        = $logger;
    }

    /**
     * @param Message\ServerRequestInterface $request The object holding information about the current request.
     *
     * @return array with the clientId of the calling client.
     *
     * @throws SlimBootstrap\Exception When the passed access $token is invalid.
     */
    public function authenticate(Message\ServerRequestInterface $request): array
    {
        $token  = $this->determineToken($request->getQueryParams());
        $result = $this->httpCaller->get(
            $this->apiUrl . $token,
            [],
            [
                'Accept: application/json',
            ]
        );
        $result = \json_decode($result['body'], true);

        if (false === \is_array($result)
            || false === \array_key_exists('entity_id', $result)
        ) {
            throw new SlimBootstrap\Exception(
                'Access token invalid',
                401,
                Monolog\Logger::WARNING
            );
        }

        return [
            'clientId' => $result[$this->clientIdField],
            'role'     => '',
        ];
    }

    /**
     * @param array $queryParameters
     *
     * @return string
     */
    private function determineToken(array $queryParameters): string
    {
        if (true === \array_key_exists('access_token', $queryParameters)) {
            return $queryParameters['access_token'];
        }

        return '';
    }
}

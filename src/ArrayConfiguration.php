<?php declare(strict_types=1);

namespace Cspray\Labrador\Http\Cors;

final class ArrayConfiguration implements Configuration {

    private $configuration;

    public function __construct(array $configuration) {
        $this->configuration = $configuration;
    }

    /**
     * Return the Origin that this CORS Configuration is valid for.
     *
     * If the Origin header in the OPTIONS request matches this value the rest of this Configuration will determine
     *the headers that are returned. If no Configuration is present for the Origin is not allowed.
     *
     * @return string
     */
    public function getOrigin(): string {
        return $this->configuration['origin'];
    }

    /**
     * Return the number of seconds that the browser should cache these cross-origin headers.
     *
     * @return int
     */
    public function getMaxAge(): int {
        return $this->configuration['max_age'];
    }

    /**
     * Return the HTTP methods that are supported for cross-origin requests with this origin.
     *
     * @return string[]
     */
    public function getAllowedMethods(): array {
        return $this->configuration['allowed_methods'];
    }

    /**
     * Return the HTTP headers that a Request is allowed to send cross-origin..
     *
     * @return array
     */
    public function getAllowedHeaders(): array {
        return $this->configuration['allowed_headers'];
    }

    /**
     * Return a list of custom header names that can be exposed by the server in Responses that cross-origin requests
     * should have access to.
     *
     * @return string[]
     */
    public function getExposableHeaders(): array {
        return $this->configuration['exposable_headers'];
    }

    /**
     * Return true or false for whether this cross-origin request should interact with Cookies.
     *
     * @return bool
     */
    public function shouldAllowCredentials(): bool {
        return $this->configuration['allow_credentials'];
    }
}
<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. ${year}
 */

namespace HipexDeployConfiguration;

class Stage
{
    /**
     * Domain name for this stage.
     *
     * @var string
     */
    private $domain;

    /**
     * SSH User
     *
     * @var string
     */
    private $username;

    /**
     * Servers in the stage that the project will be deployed to.
     *
     * @var Server[]
     */
    private $servers = [];

    /**
     * Stage constructor.
     *
     * @param string $domain
     * @param string $username
     */
    public function __construct(string $domain, string $username)
    {
        $this->domain = $domain;
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $hostname
     * @param array $roles
     * @return Server
     */
    public function addServer(string $hostname, array $roles = null): Server
    {
        $server = new Server($hostname, $roles);
        $this->servers[] = $server;
        return $server;
    }

    /**
     * @return Server[]
     */
    public function getServers(): array
    {
        return $this->servers;
    }
}

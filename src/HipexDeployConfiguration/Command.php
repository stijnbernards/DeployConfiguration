<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. ${year}
 */

namespace HipexDeployConfiguration;

class Command
{
    /**
     * Command to execute.
     *
     * @var string
     */
    private $command;

    /**
     *
     * @var string
     */
    private $workingDirectory;

    /**
     * When set the command is only run on a specific stage
     *
     * @var string
     */
    private $stage;

    /**
     * DeployCommand constructor.
     *
     * @param string $command
     */
    public function __construct(string $command)
    {
        $this->command = $command;
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * @return string
     */
    public function getWorkingDirectory(): string
    {
        return $this->workingDirectory;
    }

    /**
     * @param string $workingDirectory
     */
    public function setWorkingDirectory(string $workingDirectory): void
    {
        $this->workingDirectory = $workingDirectory;
    }

    /**
     * @return string
     */
    public function getStage(): string
    {
        return $this->stage;
    }

    /**
     * @param string $stage
     */
    public function setStage(string $stage): void
    {
        $this->stage = $stage;
    }
}

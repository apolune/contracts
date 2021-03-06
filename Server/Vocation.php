<?php

namespace Apolune\Contracts\Server;

interface Vocation
{
    /**
     * Create a new vocation instance.
     *
     * @param  array  $vocations
     * @return void
     */
    public function __construct(array $vocations);

    /**
     * Get the vocation id.
     *
     * @return integer
     */
    public function id();

    /**
     * Get the vocation name.
     *
     * @return string
     */
    public function name();

    /**
     * Check if the vocation is a starter.
     *
     * @return boolean
     */
    public function isStarter();
}

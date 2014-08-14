<?php

/*
 * This file is part of the Hal package.
 *
 * (c) Nicolás Vellón <nvellon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hal;

class Link
{
    /**
     * @var string
     */
    protected $rel;

    /**
     * @var string
     */
    protected $href;

    /**
     * @var array
     */
    protected $properties = array();

    /**
     * Class constructor
     *
     * @param string $rel  The relation name
     * @param string $href The link uri
     */
    public function __construct($rel, $href)
    {
        $this->rel = $rel;
        $this->href = $href;
    }

    /**
     * Set a rel
     *
     * @param string $rel The relation name
     *
     * @return void
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * Get a rel
     *
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * Set a href
     *
     * @param string $href The link uri
     *
     * @return void
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * Get a href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set a property value
     *
     * @param string $name  Property name
     * @param mixed  $value Property value
     *
     * @return void
     */
    public function setProperty($name, $value)
    {
        if ($name == 'href') {
            throw new \UnexpectedValueException('Property \'' . $name . '\' reserved');
        }

        $this->properties[$name] = $value;
    }

    /**
     * Get a property value
     *
     * @param string $name Property name
     *
     * @return mixed
     */
    public function getProperty($name)
    {
        if (isset($this->properties[$name])) {
            return $this->properties[$name];
        }

        throw new \RuntimeException('Property \'' . $name . '\' not found');
    }
}
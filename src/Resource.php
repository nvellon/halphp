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

class Resource
{
    /**
     * @var array
     */
    protected $properties = array();

    /**
     * @var array
     */
    protected $links = array();

    /**
     * @var array
     */
    protected $embedded = array();

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

    /**
     * Add a link
     *
     * @param Link $link A link
     *
     * @return array
     */
    public function addLink(Link $link)
    {
        $this->links[] = $link;
    }

    /**
     * Get the links
     *
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Add an embedded resource
     *
     * @param Resource $resource An embedded resource
     *
     * @return array
     */
    public function addEmbedded(Resource $resource)
    {
        $this->embedded[] = $resource;
    }

    /**
     * Get the embedded resources
     *
     * @return array
     */
    public function getEmbedded()
    {
        return $this->embedded;
    }
}
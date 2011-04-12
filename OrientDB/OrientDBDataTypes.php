<?php

/**
 *
 * Class represent OrientDB link to other document
 *
 */
class OrientDBTypeLink
{
    private $link;

    /**
     *
     * Create object from string
     * @example #10:1
     * @example 10:1
     * @param string $link
     */
    public function __construct($link)
    {
        if (substr($link, 0, 1) === '#') {
            $link = substr($link, 1);
        }
        if (preg_match('/^[0-9]+:[0-9]+$/', $link)) {
            $this->link = $link;
        }
    }

    public function __toString()
    {
        if ($this->link) {
            return '#' . $this->link;
        }
        return '';
    }

    /**
     *
     * Return link without hash sign
     * @return string
     * @example 10:1
     */
    public function get()
    {
        return $this->link;
    }

    /**
     *
     * Return link with hash sign
     * @return string
     * @example #10:1
     */
    public function getHash()
    {
        if ($this->link) {
            return '#' . $this->link;
        }
        return $this->link;
    }
}

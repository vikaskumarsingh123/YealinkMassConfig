<?php
/**
 * @license see LICENSE
 */

namespace HeadlessChromium;

class Clip
{

    protected $x;
    protected $y;
    protected $height;
    protected $width;
    protected $scale;

    /**
     * Clip constructor.
     * @param $x
     * @param $y
     * @param $height
     * @param $width
     * @param $scale
     */
    public function __construct($x, $y, $width, $height, $scale = 1)
    {
        $this->x = $x;
        $this->y = $y;
        $this->height = $height;
        $this->width = $width;
        $this->scale = $scale;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $scale
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
    }
}

<?php

namespace Dangkhiem\Helloworld;

class Hi
{
    protected $name;

    /**
     * Constructor
     * @param string $name
     */
    public function __construct($name = 'dangkhiem')
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 
     * @return string
     */
    public function say()
    {
        return 'Xin chao: ' . $this->getName();
    }
}

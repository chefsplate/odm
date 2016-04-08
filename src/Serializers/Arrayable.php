<?php

namespace LaravelDoctrine\ODM\Serializers;

trait Arrayable
{
    /**
     * @return string
     */
    public function toArray()
    {
        return (new ArraySerializer)->serialize($this);
    }
}

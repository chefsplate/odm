<?php

namespace LaravelDoctrine\ODM\Configuration;

interface Driver
{
    /**
     * @param array $settings
     *
     * @return mixed
     */
    public function resolve(array $settings = []);
}

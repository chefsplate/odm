<?php

namespace LaravelDoctrine\ODM\Contracts\Auth;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

interface Authenticatable extends AuthenticatableContract
{
    /**
     * Get the column name for the primary key
     * @return string
     */
    public function getAuthIdentifierName();
}

<?php

namespace muyomu\config\client;

interface Configure
{
    public function configure(string $module, array $configureData):mixed;
}
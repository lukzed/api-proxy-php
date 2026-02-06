<?php

namespace Tests;

use Laravel\Lumen\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication() {
        require_once __DIR__ . '/../tests/constants.php';

        return require __DIR__ . '/../bootstrap/app.php';
    }
}

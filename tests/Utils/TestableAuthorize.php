<?php

/**
 * Subclass authorize filter to make it unit testable.
 */

declare(strict_types=1);

namespace SimpleSAML\Module\Authorize\Tests\Utils;

use SimpleSAML\Module\authorize\Auth\Process\Authorize;

class TestableAuthorize extends Authorize
{
    /**
     * Override the redirect behavior since its difficult to test
     * @param array $request the state
     */
    protected function unauthorized(array &$request): void
    {
        $request['NOT_AUTHORIZED'] = true;
    }
}

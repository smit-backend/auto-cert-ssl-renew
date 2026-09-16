<?php

declare(strict_types=1);

namespace SmitBackend\CertAuto\Contracts;

/**
 * Interface AcmeChallengeInterface
 *
 * @package SmitBackend\CertAuto
 */
interface AcmeChallengeInterface
{
    public function execute(array $payload = []): mixed;
}

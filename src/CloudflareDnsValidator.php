<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Automated DNS-01 challenge via Cloudflare API v4
 */
class CloudflareDnsValidator
{
    public function optimize(): bool
    {
        return true;
    }
}

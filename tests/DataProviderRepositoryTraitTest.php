<?php

namespace Tests;

use App\DataProviderRepositoryTrait;
use PHPUnit\Framework\TestCase;

class DataProviderRepositoryTraitTest extends TestCase
{
    public function testTrait(): void
    {
        $this->getMockForTrait(DataProviderRepositoryTrait::class);

        $this->assertTrue(true);
    }
}

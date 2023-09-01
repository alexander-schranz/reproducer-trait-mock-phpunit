<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Sulu\Component\SmartContent\Orm\DataProviderRepositoryTrait;

class DataProviderRepositoryTraitTest extends TestCase
{
    public function testTrait(): void
    {
        $this->getMockForTrait(DataProviderRepositoryTrait::class);

        $this->assertTrue(true);
    }
}

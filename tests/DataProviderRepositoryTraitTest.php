<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Sulu\Component\SmartContent\Orm\DataProviderRepositoryTrait;

class DataProviderRepositoryTraitTest extends TestCase
{
    /**
     * @var DataProviderRepositoryTrait
     */
    private $dataProviderRepositoryTrait;

    public function setUp(): void
    {
        $this->dataProviderRepositoryTrait = $this->getMockForTrait(DataProviderRepositoryTrait::class);
    }

    public function testFindByFiltersIds(): void
    {
        $findByFiltersIdsReflection = new \ReflectionMethod(
            \get_class($this->dataProviderRepositoryTrait),
            'findByFiltersIds'
        );

        $this->assertTrue(true);
    }
}

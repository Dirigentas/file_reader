<?php

// declare(strict_types=1);

namespace AllTests;

use PHPUnit\Framework\TestCase;
use Reader\Controllers\FileReadController;

require __DIR__ . '/../autoloader/autoloader.php';

class MyFirstTest extends TestCase
{
    public function testAddition(): void
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }

    // public function testControllerShow(): void
    // {
    //     $fileName = new FileReadController;

    //     $return = $fileName->show('JSON.json');

    //     $this->assertSame('JSON.json', $return);
    // }
}
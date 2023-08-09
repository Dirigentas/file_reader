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
    //     $class = new FileReadController;

    //     $return = $class->show('JSON.json');

    //     $this->assertSame(App::view('show', FileReader::getFileData('JSON.json'), 'JSON.json'), $return);
    // }
}
?>
<?php

namespace Tests\C0;

use App\ProcessRunner;
use PHPUnit\Framework\TestCase;

class ProcessRunnerTest extends TestCase
{
    private $processRunner;

    public function __construct()
    {
        parent::__construct();
        $this->processRunner = new ProcessRunner();   
    }

    public function testRunWhenIf1TrueAndIf2True()
    {
        $result = $this->processRunner->run(12, 3);

        $this->assertEquals(2, $result);
    }
    
    public function testRunWhenIf1FalseAndIf2Fasle()
    {
        $result = $this->processRunner->run(7, 5);

        $this->assertEquals(2, $result);
    }

    public function testWasProcess1Called()
    {
        $result = $this->processRunner->wasProcess1Called();

        $this->assertFalse($result);
    }
    
    public function testWasProcess2Called()
    {
        $result = $this->processRunner->wasProcess2Called();

        $this->assertFalse($result);
    }
    
    public function testWasProcess3Called()
    {
        $result = $this->processRunner->wasProcess3Called();

        $this->assertFalse($result);
    }
    
    public function testWasProcess4Called()
    {
        $result = $this->processRunner->wasProcess4Called();

        $this->assertFalse($result);
    }
}

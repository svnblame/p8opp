<?php declare(strict_types=1);

namespace popp\ch04\batch11;

require_once("vendor/autoload.php");

use popp\test\BaseUnit;

class Batch11Test extends BaseUnit 
{
    public function testRunnerExeptionNoFinally()
    {
        $logfile = "/usr/local/share/logs/log.txt";
        if (file_exists($logfile)) {
            unlink($logfile);
        }
        $val = $this->capture(function() { Runner::run(); });
        $contents = file_get_contents($logfile);
        self::assertEquals("start\nxml exception\n", $contents);
    }

    public function testRunnerExceptionWithFinally() 
    {
        $logfile = "/usr/local/share/logs/log.txt";
        if (file_exists($logfile)) {
            unlink($logfile);
        }
        $val = $this->capture(function() { Runner::run2(); });
        $contents = file_get_contents($logfile);
        self::assertEquals("start\nfile exception\nend\n", $contents);
    }

    public function testRunnerBuiltInError()
    {
        $val = $this->capture(function() { Runner::run3(); });
        self::assertEquals("ParseError\nsyntax error, unexpected identifier \"code\"", $val);
    }
}
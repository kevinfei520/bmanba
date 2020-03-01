<?php

declare(strict_types=1);

namespace Yin32167\CpsTpl\Tests;

use PHPUnit\Framework\TestCase;
use Yin32167\CpsTpl\CpsTplExample;

final class CpsTplExampleTest extends TestCase 
{

    public function testCannotBeShow()
    {
        $cpstpl_example = new CpsTplExample;
        
        $this->expectOutputString($cpstpl_example->show());
        print $cpstpl_example->show();
    }

}
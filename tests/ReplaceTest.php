<?php

use Almazary\LaravelWordCensor\LaravelWordCensorFacade;
use Tests\TestCase;

class ReplaceTest extends TestCase
{
    public function testReplace()
    {
        $a = LaravelWordCensorFacade::replace();
        $this->assertEquals('', $a);

        $a = LaravelWordCensorFacade::replace(null);
        $this->assertEquals('', $a);

        $a = LaravelWordCensorFacade::replace('asdf');
        $this->assertEquals('asdf', $a);

        $a = LaravelWordCensorFacade::replace('tai');
        $this->assertEquals('***', $a);

        $a = LaravelWordCensorFacade::replace('tAi');
        $this->assertEquals('***', $a);

        $a = LaravelWordCensorFacade::replace('tAi Binatang');
        $this->assertEquals('*** Binatang', $a);

        $a = LaravelWordCensorFacade::replace('tAiBinatang');
        $this->assertEquals('tAiBinatang', $a);

        $a = LaravelWordCensorFacade::replace('berengsek');
        $this->assertEquals('***', $a);

        $a = LaravelWordCensorFacade::replace('orang yang berengsek danfuck harus dimusnahkan');
        $this->assertEquals('orang yang *** danfuck harus dimusnahkan', $a);

        $a = LaravelWordCensorFacade::replace('orang yang \n<br> beRengsek danfuck harus dimusnahkan');
        $this->assertEquals('orang yang \n<br> *** danfuck harus dimusnahkan', $a);

        $a = LaravelWordCensorFacade::replace('taitai');
        $this->assertEquals('taitai', $a);

        $a = LaravelWordCensorFacade::replace('  ');
        $this->assertEquals('  ', $a);

        $a = LaravelWordCensorFacade::replace(' a ');
        $this->assertEquals(' a ', $a);
    }
}

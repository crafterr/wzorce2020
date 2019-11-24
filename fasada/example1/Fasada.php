<?php


namespace wzorce\fasada\example1;


use wzorce\fasada\example1\subsystem\SubSystem1;
use wzorce\fasada\example1\subsystem\SubSystem2;
use wzorce\fasada\example1\subsystem\SubSystem3;

class Fasada
{
    private $subsystem1;

    private $subsystem2;

    private $subsystem3;

    public function __construct()
    {
        $this->subsystem1 = new SubSystem1();
        $this->subsystem2 = new SubSystem2();
        $this->subsystem3 = new SubSystem3();
    }

    public function doComplexOperation() {
        $this->subsystem1->doSomething();
        $this->subsystem2->doSomethingElse();
        $this->subsystem3->doEpicStuff();
        $this->subsystem3->doLessEpicButsStillImportantStuff();
    }

}
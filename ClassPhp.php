<?php

class ClassePhp
{
    private $intmember = 11, $strmember = 'String member of class';
    private $var1, $var2;

    public function __construct(int $var1, int $var2)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->prMethod();
    }

    public function pbMethod()
    {
        echo 'This is a public method';
    }

    private function prMethod()
    {
        echo 'This is a provate method';
    }
}

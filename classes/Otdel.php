<?php

class Otdel extends Table
{
    public function validate()
    {
        return false;
    }

    public $otdel_id = 0;
    public $name = "";
    public $active = 1;
}

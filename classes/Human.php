<?php

class Human extends Lives
{
    //プロパティの宣言
    const MAX_HITPOINT = 100; //最大HPの定義 定数

    public function __construct($name, $hitPoint = 100, $attackPoint = 20, $intelligence = 0)
    {
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
    }
}


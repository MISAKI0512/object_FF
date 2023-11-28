<?php

class Enemy extends Lives
{
    //プロパティの宣言
    const MAX_HITPOINT = 50; //最大HPの定義 定数

    public function __construct($name, $attackPoint)
    {
        $hitPoint = 50;
        $intelligence = 0;
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
    }
}

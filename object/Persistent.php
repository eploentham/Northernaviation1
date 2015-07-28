<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persistent
 *
 * @author eploentham
 */
class Persistent {
    //put your code here
    public $table = "";
    public $pkField = "";
    public $sited = "";
    //Random r = new Random();
    public function getGenID()
    {
        return rand(0,100000000);
    }
}

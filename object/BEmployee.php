<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BEmployee
 *
 * @author eploentham
 */
class BEmployee extends Persistent {
    //put your code here
    public $Id="", $UserName="", $Password="", $Ssn="", $NameT="", $NameE="", $Position="", $DepId="", $CompId="", $WorkType="";
    public $NickName="", $Privilege="", $PId="", $Active="", $Holiday="",$RealDay="",$Timerule="";
}

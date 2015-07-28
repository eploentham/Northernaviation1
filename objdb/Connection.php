<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author eploentham
 */
class Connection {
    //put your code here
    function openConnection() // เปิดการเชื่อมต่อกับ MySQL
     {
        mysql_connect('localhost', 'username', 'password') or die('Could not connect: ' . mysql_error());        
     }
     
     function closeConnection() // ปิดการเชื่อมต่อกับ MySQL
     {
        mysql_close();        
     }
     
     function select_onlineshop_db() // เลือกฐานข้อมูลที่ต้องการเชื่อมต่อ
     {
        mysql_select_db("Northernaviation") or die("Cannot select database.");
        mysql_query("SET character_set_results='utf8'");
        mysql_query("SET character_set_client='utf8'");
        mysql_query("SET character_set_connection='utf8'");
        mysql_query("collation_connection = utf8_general_ci");
        mysql_query("collation_database = utf8_general_ci");
        mysql_query("collation_server = utf8_general_ci");
     }    
}

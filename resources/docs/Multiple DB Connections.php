<?php

Schema::connection('mysql2')->create('some_table', function($table)
{
$table->increments('id'):
});
$users = DB::connection('mysql2')->select(...);

DB::table('dbname.tablename')->get();


SELECT COUNT(glpi_tickets.id) AS total
FROM glpi_tickets;



class TestController extends Controller
{

public function getTest()
{
$db_ext = \DB::connection('mysql2');
$glpi_users = $db_ext->table('glpi_users')->get();
print_r($glpi_users);
}

}
<?php
$sql = DB::connection('mysql2')->select("SELECT COUNT(glpi_tickets.id) as total
                                              FROM glpi_tickets;")

?>
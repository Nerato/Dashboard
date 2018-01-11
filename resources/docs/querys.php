<?php
$ano = date("Y");
$month = date("Y-m");
$hoje = date("Y-m-d");

//selecionar anos
if($num_years == 0) {

    $query_y = "SELECT DISTINCT DATE_FORMAT( date, '%Y' ) AS year
	FROM glpi_tickets
	WHERE glpi_tickets.is_deleted = '0'
	AND date IS NOT NULL	
	ORDER BY year ASC ";
}

if($num_years == 1) {

    $query_y = "SELECT DISTINCT DATE_FORMAT( date, '%Y' ) AS year
	FROM glpi_tickets
	WHERE glpi_tickets.is_deleted = '0'
	AND date IS NOT NULL
	ORDER BY year DESC
	LIMIT ".$num_years."";
}

if($num_years > 1) {

    $query_y = "SELECT DISTINCT DATE_FORMAT( date, '%Y' ) AS year
	FROM glpi_tickets
	WHERE glpi_tickets.is_deleted = '0'
	AND date IS NOT NULL
	ORDER BY year DESC
	LIMIT ".$num_years."";

}

$result_y = $DB->query($query_y);

//numero de anos para eixos Y
$conta_y = $DB->numrows($result_y);

$arr_years = array();

while ($row_y = $DB->fetch_assoc($result_y))	{
    $arr_years[] = $row_y['year'];
}


if($num_years > 1) {
    $arr_years = array_reverse($arr_years);
    $years = implode(",", $arr_years);
}
else {
    $years = implode(",", $arr_years);
}


//chamados ano
$sql_ano =	"SELECT COUNT(glpi_tickets.id) as total        
      FROM glpi_tickets
      LEFT JOIN glpi_entities ON glpi_tickets.entities_id = glpi_entities.id
      WHERE glpi_tickets.is_deleted = '0' 
      AND DATE_FORMAT( glpi_tickets.date, '%Y' ) IN (".$years.") 
      ".$entidade." ";

$result_ano = $DB->query($sql_ano);
$total_ano = $DB->fetch_assoc($result_ano);

//chamados mes
$sql_mes =	"SELECT COUNT(glpi_tickets.id) as total        
      FROM glpi_tickets
      LEFT JOIN glpi_entities ON glpi_tickets.entities_id = glpi_entities.id
      WHERE glpi_tickets.date LIKE '$month%'      
      AND glpi_tickets.is_deleted = '0' 
      ".$entidade." ";

$result_mes = $DB->query($sql_mes);
$total_mes = $DB->fetch_assoc($result_mes);

//chamados dia
$sql_hoje =	"SELECT COUNT(glpi_tickets.id) as total        
      FROM glpi_tickets
      LEFT JOIN glpi_entities ON glpi_tickets.entities_id = glpi_entities.id
      WHERE glpi_tickets.date like '$hoje%'      
      AND glpi_tickets.is_deleted = '0'
      ".$entidade." ";

$result_hoje = $DB->query($sql_hoje);
$total_hoje = $DB->fetch_assoc($result_hoje);

// total users
$sql_users = " SELECT COUNT(DISTINCT `glpi_users`.id) AS total
               FROM glpi_profiles_users
               LEFT JOIN `glpi_users`
                  ON (`glpi_users`.`id` = `glpi_profiles_users`.`users_id`)
               WHERE `glpi_users`.`is_deleted` = '0' 
               AND is_active = 1 
     				".$entidade_u." ";

$result_users = $DB->query($sql_users);
$total_users = $DB->fetch_assoc($result_users);

?>
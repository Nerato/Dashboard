<?php
$ano = date("Y");
$month = date("Y-m");
$hoje = date("Y-m-d");

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



<?php
       $ano = date("Y");
       $month = date("Y-m");
       $hoje = date("Y-m-d");

        //chamados mes
        $sql_mes =	"SELECT COUNT(glpi_tickets.id) as total
        FROM glpi_tickets
        LEFT JOIN glpi_entities ON glpi_tickets.entities_id = glpi_entities.id
        WHERE glpi_tickets.date LIKE '$month%'
        AND glpi_tickets.is_deleted = '0'
        ".$entidade." ";

        $result_mes = $DB->query($sql_mes);
        $total_mes = $DB->fetch_assoc($result_mes);


        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>50</h3>
                            <p>CHAMADOS Janeiro </p>
                        </div>
                        <div class="icon">
                            <i class="ion-ios-speedometer-outline"></i>
                        </div>
                    </div>
                </div>

        <span class="chamado"><?php echo __('Tickets','dashboard'); ?></span><br>
<span class="date"><b><?php echo $mes ?></b></span>



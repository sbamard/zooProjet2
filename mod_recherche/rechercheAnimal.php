<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
require_once('connexionDB.php');



if (isset($_GET['user'])) {        
    $user = ($_GET['user']);     
                                    
    $requete = $DB->query("SELECT ani_pre, ani_rac, ani_sex   
      FROM animal 
      WHERE ani_pre LIKE ?
      ORDER BY ani_pre
      LIMIT 10",
            array("$user%")); 

    $requete = $requete->fetchALL();

    foreach ($requete as $r) {   
        ?>   
        <div style="box-sizing: content-box;
             width: 100%;
             background-color: #4e79df;
             border: solid 1px;
             color: white;
             padding: 1px;"><?= $r['ani_pre'] . " | " . $r['ani_rac']. " | " . $r['ani_sex'] ?>
        </div>
        <?php
    }
}

if (isset($_GET['user'])) {        
    $user = ($_GET['user']);     
                                    
    $requete = $DB->query("SELECT ani_pre, ani_rac, ani_sex   
      FROM animal 
      WHERE ani_rac LIKE ?
      ORDER BY ani_pre
      LIMIT 10",
            array("$user%")); 

    $requete = $requete->fetchALL();

    foreach ($requete as $r) {   
        ?>   
        <div style="box-sizing: content-box;
             width: 100%;
             background-color: #4e79df;
             border: solid 1px;
             color: white;
             padding: 1px;"><?= $r['ani_pre'] . " | " . $r['ani_rac']. " | " . $r['ani_sex'] ?>
        </div>
        <?php
    }
}

if (isset($_GET['user'])) {        
    $user = ($_GET['user']);     
                                    
    $requete = $DB->query("SELECT ani_pre, ani_rac, ani_sex   
      FROM animal 
      WHERE ani_sex LIKE ?
      ORDER BY ani_pre
      LIMIT 10",
            array("$user%")); 

    $requete = $requete->fetchALL();

    foreach ($requete as $r) {   
        ?>   
        <div style="box-sizing: content-box;
             width: 100%;
             background-color: #4e79df;
             border: solid 1px;
             color: white;
             padding: 1px;"><?= $r['ani_pre'] . " | " . $r['ani_rac']. " | " . $r['ani_sex'] ?>
        </div>
        <?php
    }
}


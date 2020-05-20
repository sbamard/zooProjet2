<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('connexionDB.php');



if (isset($_GET['user'])) { //on recup les donnees
    $user = ($_GET['user']);

    $requete = $DB->query("SELECT int_pre, int_nom, int_spe
      FROM intervenant 
      WHERE int_nom LIKE ?
      ORDER BY int_pre
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
             padding: 1px;"><?= $r['int_pre'] . " " . $r['int_nom']. " " . $r['int_spe'] ?>
        </div>
        <?php
    }
}

if (isset($_GET['user'])) { 
    $user = ($_GET['user']);

    $requete = $DB->query("SELECT int_pre, int_nom, int_spe
      FROM intervenant 
      WHERE int_pre LIKE ?
      ORDER BY int_pre
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
             padding: 1px;"><?= $r['int_pre'] . " " . $r['int_nom']. " " . $r['int_spe'] ?>
        </div>
        <?php
    }
}

if (isset($_GET['user'])) { 
    $user = ($_GET['user']);

    $requete = $DB->query("SELECT int_pre, int_nom, int_spe
      FROM intervenant 
      WHERE int_spe LIKE ?
      ORDER BY int_pre
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
             padding: 1px;"><?= $r['int_pre'] . " " . $r['int_nom']. " " . $r['int_spe'] ?>
        </div>
        <?php
    }
}
<?php
include 'config.php';

    $add = new Informacao();

    $q1 = addslashes($_POST['q1']);
    $q2 = addslashes($_POST['q2']);
    $q3 = addslashes($_POST['q3']);
    $q4 = addslashes($_POST['q4']);
    $q5 = addslashes($_POST['q5']);
    $q6 = addslashes($_POST['q6']);
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    
    $perfil_1 = 0;
    $perfil_2 = 0;
    $perfil_3 = 0;
    $perfil_4 = '';
    
    switch ($q1) {
        case 'trouble maker':
            $perfil_1 += 12;
            $perfil_2 += 0;
            $perfil_3 += 0;
            break;
        case 'big boss':
            $perfil_1 += 0;
            $perfil_2 += 12;
            $perfil_3 += 0;
            break;
        case 'sports':
            $perfil_1 += 0;
            $perfil_2 += 0;
            $perfil_3 += 12;
            break;
    }

    switch ($q2) {
        case 'trouble maker':
            $perfil_1 += 20;
            $perfil_2 += 0;
            $perfil_3 += 0;
            break;
        case 'big boss':
            $perfil_1 += 0;
            $perfil_2 += 20;
            $perfil_3 += 0;
            break;
        case 'sports':
            $perfil_1 += 0;
            $perfil_2 += 0;
            $perfil_3 += 20;
            break;
    }
   
    switch ($q3) {
        case 'trouble maker':
            $perfil_1 += 3;
            $perfil_2 += 0;
            $perfil_3 += 0;
            break;
        case 'big boss':
            $perfil_1 += 0;
            $perfil_2 += 3;
            $perfil_3 += 0;
            break;
        case 'sports':
            $perfil_1 += 0;
            $perfil_2 += 0;
            $perfil_3 += 3;
            break;
    }
    switch ($q4) {
        case 'trouble maker':
            $perfil_1 += 2;
            $perfil_2 += 0;
            $perfil_3 += 0;
            break;
        case 'big boss':
            $perfil_1 += 0;
            $perfil_2 += 2;
            $perfil_3 += 0;
            break;
        case 'sports':
            $perfil_1 += 0;
            $perfil_2 += 0;
            $perfil_3 += 2;
            break;
    }
    switch ($q5) {
        case 'trouble maker':
            $perfil_1 += 5;
            $perfil_2 += 0;
            $perfil_3 += 0;
            break;
        case 'big boss':
            $perfil_1 += 0;
            $perfil_2 += 5;
            $perfil_3 += 0;
            break;
        case 'sports':
            $perfil_1 += 0;
            $perfil_2 += 0;
            $perfil_3 += 5;
            break;
    }
    switch ($q6) {
        case 'masculino':
            $perfil_4 = 'M';
            break;
        case 'feminino':
            $perfil_4 = 'F';
            break;
    }
    
    
    
    if ($perfil_1 > $perfil_2 && $perfil_1 > $perfil_3) {
    
        if($perfil_4 == 'M') {
            
            $perfil_1 ='Trouble Maker';
           
            $add->adicionar($nome,$email,$perfil_1);

            header("Location: pages/trouble_makerm.html");
            exit;
        } else if($perfil_4 == 'F') {

            $perfil_1 ='Trouble Maker';
           
            $add->adicionar($nome,$email,$perfil_1);
            
            header("Location: pages/trouble_makerf.html");
            exit;
        }
    
    } else if( $perfil_2 > $perfil_1 && $perfil_2 > $perfil_3 ) {
        if($perfil_4 == 'M') {
            
            $perfil_2 ='Big Boss';
           
            $add->adicionar($nome,$email,$perfil_2);

            header("Location: pages/big_bossm.html");
            exit;
        } else if($perfil_4 == 'F') {

            $perfil_2 ='Girl Boss';
           
            $add->adicionar($nome,$email,$perfil_2);
            header("Location: pages/girl_boss.html");
            exit;
        }
    } else if( $perfil_3 > $perfil_1 && $perfil_3 > $perfil_2 ) {
        if($perfil_4 == 'M') {
            
            $perfil_3 ='Sports Inspired';
           
            $add->adicionar($nome,$email,$perfil_3);

            header("Location: pages/sports_inspired.html");
            exit;
        } else if($perfil_4 == 'F') {

            $perfil_3 ='Sports Inspired';
           
            $add->adicionar($nome,$email,$perfil_3);
            header("Location: pages/sports_inspiredf.html");
            exit;
        }
    }
       





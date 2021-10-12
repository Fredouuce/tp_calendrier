<?php
    function generate_table($titre,$img,$nb_ligne,$nb_colonne,$nb_mois){

        $html = '<h1 style="width:80vw; margin:auto; margin-top: 20px;text-align: center;">'.$titre.'</h1>';

        $html.= '<table border="1" cellspacing="0" cellpadding="0" style="height: 50vh;width: 80vw; margin: auto; margin-top:20px;">';
        $html.= '   <tr>';
        $html.= '       <td style="width:35%;background-image:url('.$img.'); background-size: cover; background-position: center center;">';
        $html.= '           &nbsp;';
        $html.= '       </td>';
        $html.= '       <td>';

        $html.= '           <table border="1" cellspacing="0" cellpadding="0" style="height:100%;width:100%;">';
        $cpt = 1;
        for($i=1;$i<=$nb_ligne; $i++){
            $html.= '           <tr>';
            for($j=1; $j <= $nb_colonne; $j++){
                if($cpt > $nb_mois){
                    $html.= '           <td>&nbsp;</td>';
                } else {
                    $html.= '           <td style="text-align:center;">'.$cpt.'</td>';
                }
                $cpt++;
            }
            $html.= '           </tr>';
        }
        $html.= '           </table>';

        $html.= '       </td>';
        $html.= '   </tr>';
        $html.= '</table>';

        return $html;
    }

?>
<html>
<head>
    <meta charset="UTF-8">
    <title> Formation Web Developpeur - Notion de Base - Fonctions PHP </title>
    <script type="text/javascript">
        $().ready(function() {

        });
    </script>
    <style type="text/css">
        body{
            background-color: #CCC;
            font-family: arial;
        }
    .lien-container{
        margin-top:2rem;
        width: 100%;
            text-align:center;
    }       
     .lien{
            margin-right:.5rem;
          text-decoration:none;
          padding:.5rem
        }

        .lien:hover{
            background:white;
            border-radius:5px;
        }


    </style>
</head>
<body> 

<?php include('./mod/menu.php') ;

if(isset($_GET['to'])){
    switch($_GET['to']){    
        case 'janvier':
            $name = "Janvier 2021";
            $max = 31;
        break;

        case 'fevrier':
            $name = "Février 2021";
            $max = 28;
        break;

        case 'mars':
            $name = "Mars 2021";
            $max = 31;
        break;

        case 'avril':
            $name = "Avril 2021";
            $max = 30;
        break;

        case 'mai':
            $name = "Mai 2021";
            $max = 31;
        break;
        case 'juin':
            $name = "Juin 2021";
            $max = 30;
        break;
        case 'juillet':
            $name = "Juillet 2021";
            $max = 31;
        break;
        case 'aout':
            $name = "Août 2021";
            $max = 31;
        break;
        case 'septembre':
            $name = "Septembre 2021";
            $max = 30;
        break;

        case 'octobre':
            $name = "Juillet 2021";
            $max = 31;
        break;

        case 'novembre':
            $name = "Novembre 2021";
            $max = 30;
        break;
        case 'decembre':
            $name = "Décembre 2021";
            $max = 31;
        break;

        
        
        
        default:
        echo 'Pas enkor la paz lami';
        break;
    }
    include('./mod/mois/default_month.php');
    
}
?>
</body>
</html>

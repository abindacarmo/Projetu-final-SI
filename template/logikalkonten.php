<?php

// kndo iha media ita bolu logikalkonten.php no iha logikal.php se ita labolu file ruma sei mosu baranda

if($_GET['modul'] == 'home'){
    include "homeee.php";

}elseif($_GET['modul'] == 'doutor'){
   include "modul/mod_doutor/doutor.php";

}elseif($_GET['modul'] == 'user'){
   include "modul/mod_user/user.php";

}elseif($_GET['modul'] == 'staff'){
   include "modul/mod_user/staff.php";

}elseif($_GET['modul'] == 'formulario'){
   include "modul/mod_pasiente/formulario.php";

}elseif($_GET['modul'] == 'pasiente'){
   include "modul/mod_pasiente/pasiente.php";

}elseif($_GET['modul'] == 'editpasiente'){
   include "modul/mod_pasiente/pasiente.php";

}elseif($_GET['modul'] == 'formulario_konsulta'){
   include "modul/mod_konsulta/formulario_konsulta.php";

}elseif($_GET['modul'] == 'konsulta'){
   include "modul/mod_konsulta/konsulta.php";

}elseif($_GET['modul'] == 'tratamento'){
   include "modul/mod_doutor/konsulta_atual.php";

}elseif($_GET['modul'] == 'pasientes'){
   include "modul/mod_doutor/doutor_pasiente.php";

}elseif($_GET['modul'] == 'koko'){
   include "modul/mod_doutor/koko.php";
   
}elseif($_GET['modul'] == 'konsulta_doutor'){
   include "modul/mod_doutor/konsulta_doutor.php";
}elseif($_GET['modul'] == 'print'){
   include "modul/mod_doutor/print_reseita.php";
}
?>
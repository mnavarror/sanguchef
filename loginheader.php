<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    print '<script language="JavaScript">';
    print 'alert("NECESITAS HABER INGRESADO");';
    print 'window.location="index.php"';
    print '</script>';
}

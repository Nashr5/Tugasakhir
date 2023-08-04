<?php
switch ($_GET['page']) {
    case 'dashboard':
        include "../views/dashboard.php";
        break;

    case 'Gedung-A':
        include "../data/Gedung-A.php";
        break;

    case 'Gedung-B':
        include "../data/gedung-B.php";
        break;

    case 'Gedung-C':
        include "../data/gedung-C.php";
        break;

    case 'Gedung-D':
        include "../data/gedung-D.php";
        break;

    case 'Gedung-E':
        include "../data/gedung-E.php";
        break;

    case 'Gedung-F':
        include "../data/gedung-F.php";
        break;

    case 'Gedung-G':
        include "../data/gedung-G.php";
        break;

    case 'Gedung-H':
        include "../data/gedung-H.php";
        break;

    case 'Gedung-I':
        include "../data/gedung-I.php";
        break;

    case 'Gedung-J':
        include "../data/gedung-J.php";
        break;

    case 'Gedung-K':
        include "../data/gedung-K.php";
        break;

    case 'Gedung-L':
        include "../data/gedung-L.php";
        break;

    case 'Gedung-M':
        include "../data/gedung-M.php";
        break;

    case 'Gedung-innocent':
        include "../data/gedung-innocent.php";
        break;

    case 'Gedung-sportaiment':
        include "../data/gedung-Sportaiment.php";
        break;

    case 'Lapang-Tembak':
        include "../data/Lapang-tembak.php";
        break;
    default:
        # code...
        break;
}

<?php
switch ($_GET['page']) {
    case 'dashboard':
        include "../views/dashboard.php";
        break;

    case 'Gedung-A':
        include "../data/Gedung-A/gedung-A.php";
        break;

    case 'Gedung-B':
        include "../data/Gedung-B/Gedung-B.php";
        break;

    case 'Gedung-C-1':
        include "../data/Gedung-C/c-1.php";
        break;

    case 'Gedung-C-2':
        include "../data/Gedung-C/c-2.php";
        break;

    case 'Gedung-C-3':
        include "../data/Gedung-C/c-3.php";
        break;

    case 'Gedung-C-4':
        include "../data/Gedung-C/c-4.php";
        break;

    case 'Gedung-D-1':
        include "../data/Gedung-D/d-1.php";
        break;

    case 'Gedung-D-2':
        include "../data/Gedung-D/d-2.php";
        break;

    case 'Gedung-D-3':
        include "../data/Gedung-D/d-3.php";
        break;

    case 'Gedung-E-1':
        include "../data/Gedung-E/e-1.php";
        break;

    case 'Gedung-E-2':
        include "../data/Gedung-E/e-2.php";
        break;

    case 'Gedung-F':
        include "../data/Gedung-F/gedung-F.php";
        break;

    case 'Gedung-G-1':
        include "../data/Gedung-G/g-1.php";
        break;

    case 'Gedung-G-2':
        include "../data/Gedung-G/g-2.php";
        break;

    case 'Gedung-H-1':
        include "../data/Gedung-H/h-1.php";
        break;

    case 'Gedung-H-2':
        include "../data/Gedung-H/h-2.php";
        break;

    case 'Gedung-I-1':
        include "../data/Gedung-I/i-1.php";
        break;

    case 'Gedung-I-2':
        include "../data/Gedung-I/i-2.php";
        break;

    case 'Gedung-J':
        include "../data/Gedung-J/gedung-J.php";
        break;

    case 'Gedung-K':
        include "../data/Gedung-K/gedung-K.php";
        break;

    case 'Gedung-L':
        include "../data/Gedung-L/gedung-L.php";
        break;

    case 'Gedung-M-1':
        include "../data/Gedung-M/M-1.php";
        break;

    case 'Gedung-M-2':
        include "../data/Gedung-M/M-2.php";
        break;

    case 'Lapang-Tembak':
        include "../data/Lapang-tembak.php";
        break;
    default:
        # code...
        break;
}

<?php
include_once('includes/config.php');
include_once('includes/functions.php');


comprobarDisponibilidad(5);

/*$query = "SELECT estado FROM casa";
$result = $mysqli->query($query);

/* numeric array
while($row = $result->fetch_array(MYSQLI_NUM)){
    echo $row[0];
    echo "<br />";
}*/

//print_r($row);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Casas disponibles</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body role="document">

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Casas disponibles</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/c_disponible/">Casas disponibles</a></li>
                <li><a href="http://localhost/calculador_mo/">Calculador</a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Casas disponibles en el proyecto</h1>

    </div>



<!--SVG MAP-->
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1200px"
         height="2676px" viewBox="0 0 1200 2676" enable-background="new 0 0 1200 2676" xml:space="preserve">
<g id="clickBoxes">

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		764.327,2385.048 764.609,2306.756 611.558,2306.19 611.555,2364.839 703.277,2365.121 	" id="choacorral11_1" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		764.893,2253.193 611.84,2252.628 611.558,2306.19 764.609,2306.756 	" id="choacorral11_2" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		765.033,2199.634 611.98,2199.068 611.84,2252.628 764.893,2253.193 	" id="choacorral11_3" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		765.176,2146.071 612.264,2145.506 611.98,2199.068 765.033,2199.634 	" id="choacorral11_4" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		765.458,2092.51 612.403,2091.942 612.264,2145.506 765.176,2146.071 	" id="choacorral11_5" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		765.599,2038.947 612.545,2038.383 612.403,2091.942 765.458,2092.51 	" id="choacorral11_6" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		765.741,1985.526 612.829,1984.961 612.545,2038.383 765.599,2038.947 	" id="choacorral11_7" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		766.021,1931.965 612.97,1931.401 612.829,1984.961 765.741,1985.526 	" id="choacorral11_8" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		766.164,1878.404 613.252,1877.839 612.97,1931.401 766.021,1931.965 	" id="choacorral11_9" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		766.447,1824.842 613.394,1824.276 613.252,1877.839 766.447,1877.839 	" id="choacorral11_10" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		766.588,1771.28 613.534,1770.715 613.394,1824.276 766.447,1824.842 	" id="choacorral11_11" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		766.73,1717.718 613.816,1717.154 613.534,1770.715 766.588,1771.28 	" id="choacorral11_12"class="casa" ></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		767.013,1664.158 613.958,1663.592 613.816,1717.154 766.73,1717.718 	" id="choacorral11_13" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		767.153,1610.595 614.241,1610.029 613.958,1663.592 767.013,1664.158 	" id="choacorral11_14" class="casa"></polygon>

    <rect x="614.382" y="1533.855" transform="matrix(1 0.0037 -0.0037 1 5.7977 -2.5349)" fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="152.914" height="76.457" id="choacorral11_15" class="casa"></rect>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		537.219,1728.743 537.502,1675.178 384.448,1674.614 384.307,1728.177 	" id="choacorral11_16" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		537.077,1782.305 537.219,1728.743 384.307,1728.177 384.448,1782.305 	" id="choacorral11_17" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		536.796,1835.865 537.077,1782.305 384.448,1782.305 384.024,1835.865 	" id="choacorral11_18" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		536.654,1889.427 536.796,1835.865 384.024,1835.865 383.601,1888.861 	" id="choacorral11_19" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		536.513,1942.989 536.654,1889.427 383.601,1888.861 383.459,1942.424 	" id="choacorral11_20" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		536.229,1996.552 536.513,1942.989 383.459,1942.424 383.318,1995.986 	" id="choacorral11_21" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		536.089,2050.111 536.229,1996.552 383.318,1995.986 383.318,2050.111 	" id="choacorral11_22" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		535.806,2103.674 536.089,2050.111 383.318,2050.111 382.894,2103.108 	" id="choacorral11_23" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		535.665,2157.236 535.806,2103.674 382.894,2103.108 382.894,2157.236 	" id="choacorral11_24" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		535.523,2210.799 535.665,2157.236 382.894,2157.236 382.894,2210.799 	" id="choacorral11_25" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		535.241,2264.359 535.523,2210.799 382.894,2210.799 382.329,2263.795 	" id="choacorral11_26" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		535.1,2317.922 535.241,2264.359 382.47,2264.359 381.623,2317.922 	" id="choacorral11_27" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		534.816,2371.341 535.1,2317.922 381.623,2317.922 381.905,2370.777 	" id="choacorral11_28" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		534.676,2424.903 534.816,2371.341 381.905,2370.777 381.621,2424.903 	" id="choacorral11_29" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		932.22,2450.058 932.785,2337.565 779.873,2336.999 779.873,2390.138 823.826,2404.551 904.944,2449.918 	" id="choacorral10_2" class="casa" ></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		933.068,2284.002 780.014,2283.437 779.873,2336.999 932.785,2337.565 	" id="choacorral10_4" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		933.209,2230.439 780.156,2229.876 780.014,2283.437 933.068,2284.002 	" id="choacorral10_6" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		933.352,2176.88 780.438,2176.314 780.2,2229.219 933.209,2230.439 	" id="choacorral10_8" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		933.635,2123.458 780.579,2122.893 780.438,2176.314 933.352,2176.88 	" id="choacorral10_10" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		933.775,2069.898 780.862,2069.333 780.579,2122.893 933.775,2122.893 	" id="choacorral10_12" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		934.059,2016.336 781.003,2015.77 780.862,2069.333 933.775,2069.898 	" id="choacorral10_14" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		934.199,1962.773 781.146,1962.207 781.003,2015.77 934.059,2016.336 	" id="choacorral10_16" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		934.342,1909.211 781.428,1908.646 781.146,1962.207 934.199,1962.773 	" id="choacorral10_18" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		934.622,1855.648 781.568,1855.085 781.428,1908.646 934.342,1909.211 	" id="choacorral10_20" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		934.765,1802.089 781.852,1801.522 781.568,1855.085 934.622,1855.648 	" id="choacorral10_22" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		934.765,1748.526 781.991,1747.961 781.852,1801.522 934.765,1802.089 	" id="choacorral10_24" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		935.188,1694.964 782.135,1694.398 781.991,1747.961 934.765,1748.526 	" id="choacorral10_26" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		935.33,1641.404 782.418,1640.838 782.135,1694.398 935.188,1694.964 	" id="choacorral10_28" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		935.611,1587.842 782.559,1587.276 782.418,1640.838 935.33,1641.404 	" id="choacorral10_30" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		935.753,1496.121 782.983,1495.556 782.559,1587.276 935.611,1587.842 	" id="choacorral10_32" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1154.522,2383.919 1001.47,2383.353 1001.187,2454.297 1154.239,2454.863 	" id="choacorral10_1" class="casa" estado="<?php displayEstadoAtribute(1)?>" proyecto="<?php displayProyectoAtribute(1)?>"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1154.805,2312.833 1001.752,2312.268 1001.47,2383.353 1154.522,2383.919 	" id="choacorral10_3" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1154.948,2259.271 1001.893,2258.705 1001.752,2312.268 1154.805,2312.268 	" id="choacorral10_5" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1155.089,2205.708 1002.176,2205.143 1001.893,2258.705 1154.948,2259.271 	" id="choacorral10_7" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1155.372,2152.146 1002.316,2151.58 1002.176,2205.143 1155.089,2205.708 	" id="choacorral10_9" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1155.514,2098.727 1002.599,2098.161 1002.316,2151.58 1155.372,2152.146 	" id="choacorral10_11" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1155.795,2045.164 1002.741,2044.598 1002.599,2098.161 1155.514,2098.727 	" id="choacorral10_13" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1155.938,1991.602 1002.882,1991.037 1002.741,2044.598 1155.795,2045.164 	" id="choacorral10_15" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1156.078,1938.042 1003.164,1937.476 1002.882,1991.037 1155.938,1991.602 	" id="choacorral10_17" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1156.36,1884.479 1003.308,1883.913 1003.164,1937.476 1156.078,1938.042 	" id="choacorral10_19" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1156.501,1830.917 1003.589,1830.352 1003.308,1883.913 1156.36,1884.479 	" id="choacorral10_21" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1156.783,1777.354 1003.731,1776.791 1003.589,1830.352 1156.501,1830.917 	" id="choacorral10_23" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1156.926,1723.794 1003.871,1723.229 1003.731,1776.791 1156.783,1777.354 	" id="choacorral10_25" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1157.066,1670.232 1004.154,1669.667 1003.871,1723.229 1156.926,1723.794 	" id="choacorral10_27" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1157.35,1616.67 1004.295,1616.104 1004.154,1669.667 1157.066,1670.232 	" id="choacorral10_29" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1157.35,1563.108 1004.578,1562.545 1004.295,1616.104 1157.35,1616.67 	" id="choacorral10_31" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1157.772,1509.548 1004.72,1508.982 1004.578,1562.545 1157.35,1563.108 	" id="choacorral10_33" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1157.915,1455.985 1005.144,1455.985 1004.72,1508.982 1157.772,1509.548 	" id="choacorral10_34" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1158.056,1402.423 1005.144,1401.856 1005.144,1455.985 1157.915,1455.985 	" id="choacorral10_35" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1158.338,1348.86 1005.283,1348.438 1005.144,1401.856 1158.056,1402.423 	" id="choacorral10_36" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1158.48,1295.44 1005.566,1294.876 1005.283,1348.438 1158.338,1348.86 	" id="choacorral10_37" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1158.762,1241.88 1005.709,1241.314 1005.566,1294.876 1158.48,1295.44 	" id="choacorral10_38" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1158.904,1188.317 1005.85,1187.753 1005.709,1241.314 1158.762,1241.88 	" id="choacorral10_39" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1159.044,1134.757 1006.132,1134.189 1005.85,1187.753 1158.904,1188.317 	" id="choacorral10_41" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1159.327,1081.193 1006.274,1080.911 1006.132,1134.189 1159.044,1134.757 	" id="choacorral10_43" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1159.47,1027.632 1006.556,1027.066 1006.274,1080.911 1159.327,1081.193 	" id="choacorral10_45" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1159.75,974.07 1006.697,973.506 1006.556,1027.066 1159.47,1027.632 	" id="choacorral10_47" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1159.893,920.509 1006.838,919.943 1006.697,973.506 1159.75,974.07 	" id="choacorral10_49" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1160.033,866.946 1007.121,866.382 1006.838,919.943 1159.893,920.509 	" id="choacorral10_51" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1160.317,813.386 1007.265,812.82 1007.121,866.382 1160.033,866.946 	" id="choacorral10_53" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1160.46,759.823 1007.404,759.259 1007.265,812.82 1160.317,813.386 	" id="choacorral10_55" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1160.74,706.263 1007.688,705.695 1007.404,759.259 1160.46,759.823 	" id="choacorral10_57" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1160.883,652.7 1007.828,652.135 1007.688,705.695 1160.74,706.263 	" id="choacorral10_59" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1161.023,599.138 1008.111,598.572 1007.828,652.135 1160.883,652.7 	" id="choacorral10_61" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1161.306,545.717 1008.254,545.153 1008.111,598.572 1161.023,599.138 	" id="choacorral10_63" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		936.885,1243.858 937.165,1168.957 784.113,1168.392 783.973,1221.952 	" id="choacorral10_40" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		937.308,1115.395 784.253,1114.829 784.113,1168.392 937.165,1168.957 	" id="choacorral10_42" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		937.448,1061.833 784.536,1061.269 784.253,1114.829 937.308,1115.395 	" id="choacorral10_44" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		937.731,1008.271 784.679,1007.706 784.536,1061.269 937.448,1061.833 	" id="choacorral10_46" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		937.873,954.709 784.961,954.145 784.679,1007.706 937.731,1008.271 	" id="choacorral10_48" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		938.154,901.148 785.102,900.583 784.961,954.145 937.873,954.709 	" id="choacorral10_50" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		938.297,847.586 785.242,847.021 785.102,900.583 938.154,901.148 	" id="choacorral10_52" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		938.438,794.167 785.525,793.6 785.242,847.021 938.297,847.586 	" id="choacorral10_54" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		938.72,740.604 785.667,740.039 785.525,793.6 938.438,794.167 	" id="choacorral10_56" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		938.863,687.042 785.95,686.477 785.667,740.039 938.72,740.604 	" id="choacorral10_58" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		939.143,633.48 786.091,632.915 785.95,686.477 938.863,687.042 	" id="choacorral10_60" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		939.143,579.919 786.23,579.354 786.091,632.915 939.143,633.48 	" id="choacorral10_62" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		939.569,503.885 786.514,503.321 786.23,579.354 939.143,579.919 	" id="choacorral10_64" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		768.568,1219.7 768.85,1145.921 615.936,1145.355 615.654,1197.786 	" id="choacorral11w_1" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		769.132,1092.359 616.077,1091.794 615.936,1145.355 768.85,1145.921 	" id="choacorral11w_2" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		769.274,1038.798 616.361,1038.233 616.077,1091.794 769.132,1092.359 	" id="choacorral11w_3" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		769.415,985.236 616.503,984.671 616.361,1038.233 769.274,1038.798 	" id="choacorral11w_4" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		769.697,931.674 616.645,931.108 616.503,984.671 769.415,985.236 	" id="choacorral11w_5" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		769.838,878.113 616.927,877.548 616.645,931.108 769.697,931.674 	" id="choacorral11w_6" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		770.121,824.551 617.068,823.985 616.927,877.548 769.838,878.113 	" id="choacorral11w_7" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		770.264,770.99 617.351,770.424 617.068,823.985 770.121,824.551 	" id="choacorral11w_8" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		770.403,717.427 617.491,716.861 617.351,770.424 770.264,770.99 	" id="choacorral11w_9" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		770.687,663.865 617.633,663.3 617.491,716.861 770.403,717.427 	" id="choacorral11w_10" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		770.827,610.304 617.916,609.738 617.633,663.3 770.687,663.865 	" id="choacorral11w_11" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		771.109,556.742 618.058,556.177 617.916,609.738 770.827,610.304 	" id="choacorral11w_12" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		771.252,503.18 618.197,502.614 618.058,556.177 771.109,556.742 	" id="choacorral11w_13" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		771.393,449.619 618.48,449.053 618.197,502.614 771.252,503.18 	" id="choacorral11w_14" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		771.676,396.198 618.622,395.632 618.48,449.053 771.393,449.619 	" id="choacorral11w_15" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		554.886,1098.718 402.115,1098.718 401.69,1151.714 554.603,1189.025 	" id="choacorral11wA1_1" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		555.027,1045.155 402.115,1044.591 402.115,1098.718 554.886,1098.718 	" id="choacorral11wA1_2" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		555.31,991.595 402.255,991.028 402.115,1044.591 555.027,1045.155 	" id="choacorral11wA1_3" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		555.45,938.032 402.396,937.468 402.255,991.028 555.31,991.595 	" id="choacorral11wA1_4" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		555.592,884.471 402.68,883.905 402.396,937.468 555.45,938.032 	" id="choacorral11wA1_5" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		555.874,830.909 402.821,830.343 402.68,883.905 555.592,884.471 	" id="choacorral11wA1_6" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		556.016,777.348 403.104,776.781 402.821,830.343 555.874,830.909 	" id="choacorral11wA1_7" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		556.3,723.926 403.245,723.361 403.104,776.781 556.016,777.348 	" id="choacorral11wA1_9" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		556.44,670.365 403.104,670.365 403.245,723.361 556.3,723.926 	" id="choacorral11wA1_9" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		556.582,616.803 403.668,616.237 403.104,670.365 556.44,670.365 	" id="choacorral11wA1_10" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		556.864,563.242 403.81,562.676 403.668,616.237 556.582,616.803 	" id="choacorral11wA1_11" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		557.57,364.823 403.951,530.879 403.81,562.676 556.864,563.242 	" id="choacorral11wA1_12" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		939.853,286.246 857.319,433.082 903.955,459.227 986.631,312.533 	" id="choacorral11wA1_17" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		893.267,259.953 810.664,406.676 857.319,433.082 939.853,286.246 	" id="choacorral11wA1_16" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		846.58,233.673 763.904,380.51 810.664,406.676 893.267,259.953 	" id="choacorral11wA1_15" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		799.94,207.529 717.267,354.223 763.904,380.51 846.58,233.673 	" id="choacorral11wA1_14" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		753.304,181.243 741.999,201.169 718.68,188.026 618.199,298.259 717.267,354.223 799.94,207.529 	" id="choacorral11wA1_13" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		310.113,1077.095 118.901,1076.389 119.038,1152.873 309.83,1153.552 	" id="choacorral11wA2_30" class="casa"></polygon>

    <rect x="119.042" y="1000.144" transform="matrix(1 0.0037 -0.0037 1 3.8359 -0.7855)" fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="191.213" height="76.598" id="choacorral11wA2_29" class="casa"></rect>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		311.03,924.041 119.891,924.041 119.184,999.791 310.396,1000.497 	" id="choacorral11wA2_28" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		310.96,847.585 119.75,846.878 119.467,923.335 311.03,924.041 	" id="choacorral11wA2_27" class="casa"></polygon>

    <rect x="119.89" y="770.634" transform="matrix(1 0.0037 -0.0037 1 2.9926 -0.7913)" fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="191.213" height="76.598" id="choacorral11wA2_26" class="casa"></rect>

    <rect x="120.173" y="694.177" transform="matrix(1 0.0037 -0.0037 1 2.7096 -0.7928)" fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="191.213" height="76.457" id="choacorral11wA2_24" class="casa"></rect>

    <rect x="120.456" y="617.721" transform="matrix(1 0.0037 -0.0037 1 2.4303 -0.7955)" fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="191.212" height="76.458" id="choacorral11wA2_23" class="casa"></rect>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		312.091,541.478 120.879,540.77 121.162,617.367 311.808,618.075 	" id="choacorral11wA2_23" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		318.875,465.02 157.765,393.369 121.162,475.62 120.879,540.77 312.091,541.478 312.373,472.087 	" id="choacorral11wA2_22" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		373.85,405.806 188.857,323.414 157.765,393.369 318.875,465.02 	" id="choacorral11wA2_21" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		428.825,346.449 219.948,253.458 188.857,323.414 373.85,405.806 	" id="choacorral11wA2_20" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		483.517,287.093 251.039,183.644 219.948,253.458 428.825,346.449 	" id="choacorral11wA2_19" class="casa"></polygon>

    <polygon fill="#D8D8D8" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		641.094,114.114 403.527,140.965 258.105,167.958 251.039,183.644 483.517,287.093 	" id="choacorral11wA2_18" class="casa"></polygon>
</g>
        <g id="Layer_3">
            <polygon fill="#FFFFFF" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" points="1161.871,2473.518 1168.797,566.067
		1160.883,566.067 1154.099,2473.658 	"/>
            <polygon fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" points="1154.099,2482.279 1161.306,545.717
		1008.254,545.153 1001.047,2502.066 1102.582,2492.172 1128.802,2487.781 	"/>
            <polygon fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" points="1008.394,504.169 1000.762,504.026
		993.414,2501.923 1001.047,2502.066 	"/>
            <path fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" d="M947.201,503.885h-7.632l-2.685,739.974
		l-321.23-46.072l2.968-809.927h-7.632c0,0-2.273,616.111-2.972,805.819c-0.019,4.942,3.249,18.844,21.586,21.608
		c71.441,10.772,251.876,34.967,286.066,41.046c13.575,2.413,28.238-5.133,28.694-20.347
		C944.457,1232.943,947.201,503.885,947.201,503.885z"/>
            <polygon fill="#FFFFFF" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" points="943.386,1496.121 939.992,2450.058
		932.22,2450.058 935.753,1496.121 	"/>
            <circle fill="#FFFFFF" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" cx="829.477" cy="1397.712" r="27.653"/>
            <polygon fill="#FFFFFF" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" points="831.288,1420.36 814.737,1415.064
		806.781,1399.614 812.076,1383.064 827.529,1375.11 844.074,1380.402 852.032,1395.854 846.736,1412.403 	"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" x1="827.529" y1="1375.11" x2="831.288" y2="1420.36"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" x1="806.781" y1="1399.614" x2="852.032" y2="1395.854"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" x1="814.737" y1="1415.064" x2="844.074" y2="1380.402"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" x1="812.076" y1="1383.064" x2="846.736" y2="1412.403"/>
            <path fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" d="M57.425,1157.084l2.544-694.466l155.174-348.929
		l176.655-33.07l264.054-29.723c0,0,17.078-1.5,25.653,1.151c12.787,3.954,20.334,12.388,27.214,20.129
		c6.521,7.34,12.576,13.938,17.058,19.815c6.478,8.498,8.731,25.938,8.731,25.938l274.593,154.607l3.814-6.642L741.858,113.266
		c0,0-4.152-18.214-7.998-22.902c-9.858-12.012-27.74-40.412-51.978-46.153c-10.79-2.556-27.816-0.84-27.816-0.839L390.667,73.13
		l-180.895,33.775L52.337,460.923l-2.544,694.608L57.425,1157.084z"/>
            <polygon fill="none" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" points="119.038,1152.873 121.162,475.62
		258.105,167.958 403.527,140.965 641.094,114.114 312.373,472.087 309.83,1209.871 355.478,1219.268 358.162,490.177
		679.392,140.258 680.947,121.463 665.4,103.798 399.713,133.616 264.465,158.914 249.484,168.947 113.53,474.066 110.846,1168.108
		118.618,1169.662 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		990.305,305.89 728.715,158.489 724.898,165.132 732.105,169.23 986.631,312.533 	"/>

            <path fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M572.833,387.717l-15.404,0.001l-2.826,801.307l-152.912-37.312l2.261-620.836L718.68,188.026l13.426-18.796l-7.207-4.098
		l-4.664,10.031L396.32,527.77c0,0-2.262,484.174-2.262,613.696c0,10.248,8.458,17.55,14.916,19.532
		c32.472,9.961,100.631,25.835,133.558,33.106c16.669,3.682,27.291-11.489,27.333-22.605
		C570.601,977.323,572.833,387.717,572.833,387.717z"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		320.429,2424.194 323.396,1652.85 502.313,1548.411 614.523,1533.573 782.841,1534.137 782.981,1495.556 770.687,1496.121
		515.031,1531.572 500.192,1540.782 315.764,1648.47 312.797,2424.194 	"/>

            <path fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M629.08,2533.721l-79.141-102.883l2.826-755.518c0,0-13.565-26.179-27.842-47.165c-6.078-8.935-25.862-25.793-53.847-8.487
		c-37.993,23.493-94.259,55.089-94.259,55.089l-2.827,749.581l7.63,0.565l2.828-750.289l153.054,0.563l-2.826,749.726
		l86.632,111.361l113.059,59.923"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1482.695" x2="935.896" y2="1482.835"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1467.432" x2="936.036" y2="1467.574"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1452.098" x2="936.036" y2="1452.241"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1436.693" x2="936.036" y2="1436.836"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1421.572" x2="936.036" y2="1421.715"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1406.168" x2="936.036" y2="1406.311"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1390.903" x2="936.036" y2="1391.046"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1375.642" x2="936.036" y2="1375.784"/>

            <line fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="905.369" y1="1360.378" x2="936.036" y2="1360.521"/>

            <path fill="none" stroke="#000000" stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M905.793,1354.63c0,0,15.297-16.225,20.056-21.067c4.034-4.106,3.593-11.467-3.016-17.375
		c-7.524-6.725-27.124-19.825-48.869-22.725c-24.312-3.241-44.186,1.694-60.956,10.694c-4.91,2.635-7.756,7.062-6.53,13.754
		c2.041,11.146,4.488,25.155,4.488,25.155l-37.875-4.179l-384.12-57.154l-0.989,267.808l382.704-54.126l134.683,0.563
		L905.793,1354.63z"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		750.641,1416.035 782.031,1400.084 755.135,1347.174 723.745,1363.127 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		752.313,1411.01 777.05,1398.438 753.573,1352.258 728.835,1364.828 	"/>

            <circle fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="752.952" cy="1381.719" r="3.321"/>

            <circle fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="759.875" cy="1395.143" r="3.321"/>

            <circle fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="745.97" cy="1368.095" r="3.265"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		769.697,1402.184 762.797,1393.659 756.837,1396.769 759.853,1407.229 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		766.307,1411.184 768.146,1410.335 764.187,1402.423 762.351,1403.27 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		738.748,1352.534 736.911,1353.523 740.869,1361.438 742.848,1360.449 	"/>

            <line fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="740.587" y1="1388.008" x2="765.318" y2="1375.359"/>

            <line fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="764.47" y1="1407.292" x2="766.121" y2="1406.38"/>

            <line fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="764.775" y1="1408.107" x2="766.427" y2="1407.193"/>

            <line fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="765.764" y1="1409.944" x2="767.416" y2="1409.031"/>

            <circle fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="762.773" cy="1401.997" r="0.423"/>

            <path fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M773.522,1396.67c0.431,0.84,1.123,2.822,1.123,2.822l-19.927,10.42c0,0-1.378-1.845-1.817-2.705
		c-2.82-5.516-0.479-12.341,5.213-15.248C763.809,1389.052,770.711,1391.154,773.522,1396.67z"/>

            <path fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M732.236,1366.435c-0.423-0.842-1.103-2.832-1.103-2.832l20.018-10.246c0,0,1.366,1.857,1.798,2.724
		c2.768,5.54,0.368,12.346-5.348,15.203C741.881,1374.137,734.995,1371.978,732.236,1366.435z"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		727.602,1498.518 760,1482.056 733.228,1429.391 700.829,1445.853 	"/>

            <path fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M734.067,1462.633c0,2.431-1.972,4.406-4.407,4.406s-4.409-1.976-4.409-4.406c0-2.434,1.974-4.409,4.409-4.409
		S734.067,1460.199,734.067,1462.633z"/>

            <line fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="717.195" y1="1468.949" x2="741.928" y2="1456.3"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		727.919,1496.489 758.176,1481.117 732.873,1431.343 702.617,1446.716 	"/>

            <rect x="714.009" y="1439.143" transform="matrix(0.894 -0.448 0.448 0.894 -569.2157 474.5705)" fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="8.895" height="2.5"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		730.394,1442.005 712.536,1450.96 708.932,1443.769 726.79,1434.821 	"/>
            <g>

                <path fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
			M718.188,1448.126c0.706,0.515,1.566,0.828,2.507,0.828c2.347,0,4.243-1.89,4.271-4.229L718.188,1448.126z"/>
            </g>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		614.523,1533.573 606.751,1534.602 603.501,2425.185 611.131,2425.187 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		695.08,2365.124 695.08,2390.561 678.826,2429.426 666.106,2413.031 630.494,2440.45 619.329,2425.893 619.046,2364.841 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		663.846,2503.621 670.913,2503.618 611.132,2425.893 603.501,2425.185 	"/>

            <polyline fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		679.32,2430.838 679.814,2455.709 677.697,2500.934 699.179,2545.169 735.121,2596.188 772.101,2642.541 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		655.931,2424.764 626.254,2447.517 650.278,2478.605 680.162,2455.709 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		646.604,2459.668 651.833,2466.31 664.411,2456.562 665.825,2446.809 654.801,2432.675 636.712,2446.668 641.8,2453.311
		655.084,2443.135 655.791,2443.983 641.658,2454.863 635.157,2446.524 655.085,2431.121 666.956,2446.524 665.399,2457.268
		651.55,2467.866 645.758,2460.374 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1038.496,2454.438 1038.355,2493.585 1001.187,2493.585 1001.222,2454.366 	"/>

            <polygon fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1012.916,2468.43 1029.734,2468.43 1029.875,2460.092 1006.838,2459.949 1006.84,2477.897 1013.765,2484.824 1029.734,2484.824
		1029.734,2476.485 1030.863,2476.485 1030.863,2485.953 1013.342,2485.813 1005.709,2478.322 1005.85,2458.96 1030.863,2458.96
		1030.863,2469.559 1012.916,2469.419 	"/>

            <polyline fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		771.676,396.198 771.676,388.426 557.429,387.718 	"/>

            <line fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="786.94" y1="393.37" x2="783.973" y2="1222.378"/>

            <polyline fill="none" stroke="#000000" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		49.793,1155.531 118.618,1169.662 355.478,1219.268 540.046,1264.21 606.75,1273.82 	"/>
            <g>
                <path d="M728.135,2378.474c0.715,0.114,1.634,0.315,2.763,0.695c1.386,0.466,2.292,1.129,2.741,1.926
			c0.424,0.716,0.512,1.624,0.187,2.591c-0.331,0.982-0.881,1.659-1.618,2.039c-1.006,0.54-2.35,0.537-3.719,0.076
			c-0.42-0.141-0.802-0.287-1.097-0.476l-1.463,4.35l-1.401-0.471L728.135,2378.474z M727.776,2384.181
			c0.279,0.184,0.655,0.347,1.122,0.503c1.692,0.568,3,0.094,3.504-1.404c0.482-1.435-0.3-2.469-1.847-2.988
			c-0.613-0.206-1.097-0.314-1.36-0.331L727.776,2384.181z"/>
                <path d="M734.649,2388.805l-2.276,3.037l-1.45-0.488l7.341-9.618l1.692,0.568l0.054,12.105l-1.498-0.504l-0.012-3.806
			L734.649,2388.805z M738.578,2388.906l-0.012-3.482c-0.004-0.791,0.053-1.489,0.103-2.172l-0.032-0.011
			c-0.378,0.59-0.777,1.191-1.209,1.781l-2.119,2.784L738.578,2388.906z"/>
                <path d="M745.208,2384.23c0.758,0.094,1.8,0.354,2.767,0.68c1.499,0.504,2.372,1.103,2.844,1.942
			c0.385,0.667,0.441,1.512,0.16,2.349c-0.482,1.435-1.703,2.082-2.979,2.084l-0.016,0.049c0.74,0.571,0.98,1.513,0.857,2.727
			c-0.154,1.634-0.248,2.769-0.164,3.263l-1.449-0.487c-0.074-0.365-0.002-1.382,0.146-2.838c0.182-1.607-0.208-2.365-1.465-2.842
			l-1.321-0.444l-1.582,4.704l-1.401-0.471L745.208,2384.23z M744.946,2389.648l1.434,0.482c1.499,0.504,2.726,0.002,3.143-1.239
			c0.472-1.402-0.338-2.354-1.814-2.87c-0.677-0.227-1.182-0.325-1.429-0.337L744.946,2389.648z"/>
                <path d="M758.742,2402.482c-1.336-0.88-2.623-1.797-3.734-2.654c-0.199-0.156-0.396-0.313-0.606-0.384
			c-2.546-0.964-4.113-3.606-2.938-7.103c1.17-3.48,4.049-5.006,6.981-4.02c2.949,0.991,4.097,3.925,3.02,7.131
			c-0.938,2.787-2.828,4.142-4.844,4.164l-0.021,0.064c0.987,0.637,2.076,1.29,2.941,1.76L758.742,2402.482z M759.961,2395.02
			c0.731-2.176,0.355-4.795-1.948-5.569c-2.369-0.796-4.265,1.005-5.04,3.362c-0.79,2.299-0.217,4.806,1.975,5.542
			C757.187,2399.107,759.127,2397.5,759.961,2395.02z"/>
                <path d="M766.474,2391.219l-2.161,6.429c-0.818,2.433-0.086,3.827,1.364,4.314c1.611,0.542,3-0.175,3.808-2.575l2.161-6.429
			l1.418,0.477l-2.129,6.332c-1.121,3.335-3.339,4.114-5.69,3.323c-2.224-0.748-3.471-2.584-2.339-5.951l2.15-6.396
			L766.474,2391.219z"/>
                <path d="M779.179,2401.91l-4.222-1.419l-1.316,3.915l4.705,1.582l-0.396,1.176l-6.106-2.053l3.651-10.859l5.864,1.972
			l-0.396,1.177l-4.463-1.501l-1.153,3.432l4.221,1.419L779.179,2401.91z"/>
                <path d="M790.914,2405.354c-1.256,3.738-4.194,4.956-6.966,4.024c-2.869-0.964-4.134-3.864-3.029-7.151
			c1.159-3.448,4.061-4.984,6.961-4.009C790.845,2399.215,791.998,2402.132,790.914,2405.354z M782.428,2402.697
			c-0.78,2.32-0.223,4.821,1.985,5.563c2.224,0.748,4.167-0.876,4.996-3.341c0.726-2.159,0.357-4.794-1.979-5.579
			C785.11,2398.561,783.229,2400.313,782.428,2402.697z"/>
            </g>
            <g>
                <path d="M1060.138,2474.515c0.696-0.199,1.613-0.406,2.795-0.54c1.453-0.165,2.556,0.053,3.301,0.584
			c0.686,0.47,1.151,1.255,1.267,2.268c0.116,1.03-0.096,1.876-0.603,2.532c-0.684,0.917-1.902,1.482-3.338,1.646
			c-0.439,0.05-0.846,0.078-1.193,0.032l0.518,4.561l-1.47,0.167L1060.138,2474.515z M1062.229,2479.836
			c0.331,0.05,0.74,0.037,1.23-0.019c1.773-0.201,2.756-1.186,2.578-2.756c-0.171-1.503-1.317-2.109-2.938-1.926
			c-0.642,0.073-1.126,0.18-1.372,0.276L1062.229,2479.836z"/>
                <path d="M1070.414,2481.115l-0.776,3.715l-1.52,0.173l2.576-11.824l1.773-0.201l5.177,10.944l-1.571,0.178l-1.622-3.442
			L1070.414,2481.115z M1074.017,2479.543l-1.486-3.15c-0.338-0.714-0.583-1.37-0.827-2.011l-0.034,0.004
			c-0.092,0.695-0.199,1.409-0.34,2.126l-0.741,3.42L1074.017,2479.543z"/>
                <path d="M1078.041,2472.5c0.726-0.236,1.78-0.441,2.794-0.557c1.57-0.178,2.616-0.006,3.398,0.555
			c0.632,0.443,1.041,1.182,1.141,2.061c0.171,1.504-0.662,2.607-1.815,3.149l0.006,0.051c0.912,0.204,1.528,0.955,1.933,2.106
			c0.552,1.546,0.946,2.612,1.232,3.025l-1.52,0.173c-0.223-0.3-0.587-1.251-1.068-2.634c-0.517-1.531-1.191-2.054-2.531-1.954
			l-1.386,0.157l0.56,4.933l-1.469,0.167L1078.041,2472.5z M1080.099,2477.519l1.504-0.171c1.57-0.178,2.469-1.152,2.321-2.452
			c-0.167-1.471-1.304-1.991-2.86-1.832c-0.709,0.081-1.208,0.206-1.437,0.301L1080.099,2477.519z"/>
                <path d="M1098.032,2483.302c-1.583-0.231-3.138-0.517-4.507-0.823c-0.246-0.058-0.492-0.116-0.712-0.091
			c-2.714,0.206-5.254-1.524-5.67-5.189c-0.414-3.648,1.549-6.248,4.623-6.597c3.091-0.352,5.373,1.818,5.755,5.18
			c0.331,2.923-0.808,4.95-2.624,5.823l0.008,0.067c1.164,0.159,2.428,0.289,3.41,0.35L1098.032,2483.302z M1095.975,2476.025
			c-0.259-2.281-1.707-4.493-4.122-4.219c-2.483,0.281-3.438,2.716-3.142,5.179c0.257,2.418,1.839,4.445,4.136,4.185
			C1095.194,2480.904,1096.271,2478.625,1095.975,2476.025z"/>
                <path d="M1100.265,2469.824l0.765,6.739c0.29,2.551,1.544,3.503,3.064,3.331c1.688-0.192,2.644-1.429,2.357-3.946l-0.765-6.739
			l1.486-0.169l0.754,6.639c0.396,3.496-1.281,5.14-3.748,5.419c-2.33,0.265-4.238-0.87-4.639-4.4l-0.761-6.705L1100.265,2469.824z"
                />
                <path d="M1116.303,2474.13l-4.425,0.502l0.466,4.104l4.932-0.56l0.14,1.233l-6.4,0.727l-1.292-11.385l6.147-0.697l0.141,1.233
			l-4.679,0.53l0.408,3.598l4.425-0.502L1116.303,2474.13z"/>
                <path d="M1128.392,2472.278c0.445,3.918-1.701,6.266-4.606,6.595c-3.006,0.342-5.382-1.749-5.772-5.194
			c-0.41-3.614,1.567-6.233,4.608-6.578C1125.729,2466.748,1128.009,2468.9,1128.392,2472.278z M1119.58,2473.467
			c0.275,2.432,1.84,4.461,4.153,4.199c2.332-0.265,3.405-2.56,3.112-5.144c-0.257-2.264-1.707-4.493-4.156-4.215
			C1120.257,2468.583,1119.296,2470.967,1119.58,2473.467z"/>
            </g>
            <g>
                <path d="M465.854,2389.654h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2389.654z"/>
                <path d="M466.596,2396.389c-0.024,0.228,0,0.49,0.035,0.849c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.147,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.968H466.596z M471.063,2396.771
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C472.951,2397.404,472.163,2396.771,471.063,2396.771z"/>
            </g>
            <g>
                <path d="M465.854,2333.721h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2333.721z"/>
                <path d="M467.826,2339.751c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C465.723,2340.73,466.69,2339.751,467.826,2339.751z
			 M467.874,2343.933c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C466.487,2343.323,467.073,2343.933,467.874,2343.933z M471.757,2341.041c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.621,0,1.267-0.37,1.267-1.314C472.999,2341.519,472.426,2341.041,471.757,2341.041z"/>
            </g>
            <g>
                <path d="M465.854,2280.229h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2280.229z"/>
                <path d="M473.62,2291.396h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V2291.396z"/>
            </g>
            <g>
                <path d="M465.854,2226.879h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2226.879z"/>
                <path d="M472.88,2237.438c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H472.88z M468.399,2237.139c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C466.535,2236.529,467.288,2237.139,468.399,2237.139z"
                />
            </g>
            <g>
                <path d="M465.854,2173.316h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2173.316z"/>
                <path d="M472.736,2184.077v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.801,0.263
			c-0.191,0.322-0.431,0.956-0.431,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H472.736z"/>
            </g>
            <g>
                <path d="M465.854,2118.554h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2118.554z"/>
                <path d="M465.854,2127.929h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V2127.929z M468.794,2127.929
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V2127.929z"/>
            </g>
            <g>
                <path d="M465.854,2066.194h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2066.194z"/>
                <path d="M467.062,2073.466c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.621,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L467.062,2073.466z"/>
            </g>
            <g>
                <path d="M465.854,2012.209h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2012.209z"/>
                <path d="M465.854,2018.335h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2018.335z"/>
            </g>
            <g>
                <path d="M465.854,1957.517h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1957.517z"/>
                <path d="M472.641,1965.924v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H472.641z"/>
            </g>
            <g>
                <path d="M465.854,1905.51h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1905.51z"/>
                <path d="M469.821,1916.797c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C473.752,1915.865,472.294,1916.797,469.821,1916.797z M469.701,1912.579c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C472.939,1913.248,471.816,1912.579,469.701,1912.579z"/>
            </g>
            <g>
                <path d="M472.641,1851.85v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H472.641z"/>
                <path d="M466.596,1856.303c-0.024,0.228,0,0.49,0.035,0.849c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.147,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.968H466.596z M471.063,1856.686
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C472.951,1857.318,472.163,1856.686,471.063,1856.686z"/>
            </g>
            <g>
                <path d="M472.641,1800.62v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H472.641z"/>
                <path d="M467.826,1804.369c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C465.723,1805.349,466.69,1804.369,467.826,1804.369z
			 M467.874,1808.551c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C466.487,1807.941,467.073,1808.551,467.874,1808.551z M471.757,1805.659c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.621,0,1.267-0.37,1.267-1.314C472.999,1806.137,472.426,1805.659,471.757,1805.659z"/>
            </g>
            <g>
                <path d="M472.641,1747.034v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H472.641z"/>
                <path d="M473.62,1755.92h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V1755.92z"/>
            </g>
            <g>
                <path d="M472.641,1696.017v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H472.641z"/>
                <path d="M472.88,1704.293c0.012-0.215,0-0.489-0.048-0.788c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.342-2.509,2.342c-1.422,0-2.736-0.968-2.736-2.581
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.485
			c0.047,0.311,0.06,0.573,0.06,0.764H472.88z M468.399,1703.995c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C466.535,1703.386,467.288,1703.995,468.399,1703.995z"
                />
            </g>
            <g>
                <path d="M695.785,2332.209v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
            </g>
            <g>
                <path d="M872.229,2380.782h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2380.782z"/>
            </g>
            <g>
                <path d="M1123.576,2421.928v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1123.576z"/>
            </g>
            <g>
                <path d="M1094.537,2348.245c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1094.537,2348.245z"/>
            </g>
            <g>
                <path d="M1090.673,2290.164v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1090.673z"/>
            </g>
            <g>
                <path d="M1089.647,2237.008h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V2237.008z"/>
            </g>
            <g>
                <path d="M1078.595,2176.469c-0.024,0.228,0,0.49,0.035,0.849c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.146,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.968H1078.595z M1083.063,2176.852
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C1084.95,2177.484,1084.162,2176.852,1083.063,2176.852z"/>
            </g>
            <g>
                <path d="M1094.745,2129.104v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1094.745z"/>
                <path d="M1094.745,2135.229v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1094.745z"/>
            </g>
            <g>
                <path d="M1093.896,2079.712v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
                <path d="M1088.316,2083.807c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,2083.807z"/>
            </g>
            <g>
                <path d="M1093.896,2021.556v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
                <path d="M1093.991,2030.035v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
            </g>
            <g>
                <path d="M1093.896,1967.359v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
                <path d="M1094.875,1976.245h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V1976.245z"/>
            </g>
            <g>
                <path d="M1093.896,1914.856v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
                <path d="M1087.851,1919.311c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.146,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H1087.851z M1092.318,1919.692
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C1094.206,1920.325,1093.418,1919.692,1092.318,1919.692z"/>
            </g>
            <g>
                <path d="M1087.109,1855.197h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1855.197z"/>
                <path d="M1093.896,1863.604v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
            </g>
            <g>
                <path d="M1087.109,1810.398h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1810.398z"/>
                <path d="M1088.316,1816.774c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1816.774z"/>
            </g>
            <g>
                <path d="M1087.109,1751.607h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1751.607z"/>
                <path d="M1093.991,1762.368v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
            </g>
            <g>
                <path d="M1087.109,1695.504h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1695.504z"/>
                <path d="M1094.875,1706.671h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V1706.671z"/>
            </g>
            <g>
                <path d="M1087.109,1640.526h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1640.526z"/>
                <path d="M1087.851,1647.262c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.146,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H1087.851z M1092.318,1647.644
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C1094.206,1648.276,1093.418,1647.644,1092.318,1647.644z"/>
            </g>
            <g>
                <path d="M1088.316,1591.102c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1591.102z"/>
                <path d="M1093.896,1599.259v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
            </g>
            <g>
                <path d="M1088.316,1540.016c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1540.016z"/>
                <path d="M1088.316,1546.142c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1546.142z"/>
            </g>
            <g>
                <path d="M1088.316,1486.452c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1486.452z"/>
                <path d="M1087.109,1495.577h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1495.577z
			 M1090.049,1495.577h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023
			V1495.577z"/>
            </g>
            <g>
                <path d="M1088.316,1427.944c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1427.944z"/>
                <path d="M1093.991,1438.455v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
            </g>
            <g>
                <path d="M1088.316,1376.146c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1376.146z"/>
                <path d="M1094.135,1386.455c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H1094.135z M1089.654,1386.156c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C1087.79,1385.547,1088.543,1386.156,1089.654,1386.156
			z"/>
            </g>
            <g>
                <path d="M1088.316,1323.363c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1323.363z"/>
                <path d="M1094.875,1334.28h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V1334.28z"/>
            </g>
            <g>
                <path d="M1088.316,1270.082c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1270.082z"/>
                <path d="M1089.081,1275.862c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C1086.978,1276.842,1087.945,1275.862,1089.081,1275.862z
			 M1089.129,1280.044c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C1087.742,1279.435,1088.328,1280.044,1089.129,1280.044z M1093.012,1277.152c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.622,0,1.267-0.37,1.267-1.314C1094.254,1277.63,1093.681,1277.152,1093.012,1277.152z"/>
            </g>
            <g>
                <path d="M1088.316,1216.239c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1216.239z"/>
                <path d="M1087.851,1222.725c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.146,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H1087.851z M1092.318,1223.106
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C1094.206,1223.739,1093.418,1223.106,1092.318,1223.106z"/>
            </g>
            <g>
                <path d="M1087.109,1165.041h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1165.041z
			 M1090.049,1165.041h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023
			V1165.041z"/>
                <path d="M1093.896,1170.199v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
            </g>
            <g>
                <path d="M1087.109,1112.256h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1112.256z
			 M1090.049,1112.256h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023
			V1112.256z"/>
                <path d="M1088.316,1115.383c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L1088.316,1115.383z"/>
            </g>
            <g>
                <path d="M1087.109,1057.916h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1057.916z
			 M1090.049,1057.916h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023
			V1057.916z"/>
                <path d="M1093.991,1065.428v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
            </g>
            <g>
                <path d="M1087.109,1007.109h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1007.109z
			 M1090.049,1007.109h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023
			V1007.109z"/>
                <path d="M1094.875,1015.027h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V1015.027z"/>
            </g>
            <g>
                <path d="M1087.109,952.703h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V952.703z M1090.049,952.703
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V952.703z"/>
                <path d="M1087.851,956.189c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.146,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H1087.851z M1092.318,956.571
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C1094.206,957.204,1093.418,956.571,1092.318,956.571z"/>
            </g>
            <g>
                <path d="M1093.991,898.619v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
                <path d="M1093.896,902.392v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
            </g>
            <g>
                <path d="M1093.991,848.235v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
                <path d="M1093.991,854.361v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
            </g>
            <g>
                <path d="M1093.991,787.49v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
                <path d="M1094.135,793.414c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H1094.135z M1089.654,793.115c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C1087.79,792.506,1088.543,793.115,1089.654,793.115z"
                />
            </g>
            <g>
                <path d="M1093.991,737.933v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
                <path d="M1094.875,744.465h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V744.465z"/>
            </g>
            <g>
                <path d="M1093.991,680.626v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H1093.991z"/>
                <path d="M1087.851,682.727c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.146,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H1087.851z M1092.318,683.108
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C1094.206,683.741,1093.418,683.108,1092.318,683.108z"/>
            </g>
            <g>
                <path d="M1094.135,628.701c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H1094.135z M1089.654,628.402c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C1087.79,627.793,1088.543,628.402,1089.654,628.402z"
                />
                <path d="M1093.896,632.676v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H1093.896z"/>
            </g>
            <g>
                <path d="M1094.135,575.23c0.012-0.215,0-0.49-0.048-0.789c-0.275-1.649-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.015,0.896,1.875c0,1.374-0.991,2.342-2.509,2.342c-1.422,0-2.736-0.968-2.736-2.581
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.485
			c0.047,0.311,0.06,0.574,0.06,0.765H1094.135z M1089.654,574.931c1.111,0,1.78-0.633,1.78-1.601c0-0.633-0.395-1.218-0.956-1.505
			c-0.119-0.071-0.274-0.119-0.466-0.119c-1.278,0.024-2.223,0.609-2.223,1.708C1087.79,574.322,1088.543,574.931,1089.654,574.931z
			"/>
                <path d="M1088.316,577.174c-0.191,0.299-0.49,0.992-0.49,1.72c0,1.35,0.86,1.769,1.506,1.756c1.087-0.012,1.553-0.992,1.553-2.007
			v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.395,1.171-1.362c0-0.621-0.274-1.219-0.514-1.553
			l0.765-0.275c0.299,0.406,0.598,1.195,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222c-0.801,0-1.481-0.478-1.828-1.434h-0.024
			c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832c0-0.872,0.275-1.637,0.526-2.019L1088.316,577.174z"/>
            </g>
            <g>
                <path d="M869.572,538.11c0.012-0.215,0-0.49-0.048-0.789c-0.275-1.649-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.015,0.896,1.875c0,1.374-0.991,2.342-2.509,2.342c-1.422,0-2.736-0.968-2.736-2.581
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.485
			c0.047,0.311,0.06,0.574,0.06,0.765H869.572z M865.092,537.811c1.111,0,1.78-0.633,1.78-1.601c0-0.633-0.395-1.218-0.956-1.505
			c-0.119-0.071-0.274-0.119-0.466-0.119c-1.278,0.024-2.223,0.609-2.223,1.708C863.228,537.202,863.98,537.811,865.092,537.811z"/>
                <path d="M862.547,543.053h2.114v-3.608h0.693l4.958,3.465v1.135h-4.826v1.087h-0.825v-1.087h-2.114V543.053z M865.486,543.053
			h2.593c0.405,0,0.812,0.012,1.218,0.036v-0.036c-0.453-0.239-0.788-0.43-1.146-0.646l-2.641-1.899h-0.023V543.053z"/>
            </g>
            <g>
                <path d="M703.983,412.016v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H703.983z"/>
                <path d="M704.079,420.496v-2.963l-1.995-0.299c0.023,0.179,0.048,0.347,0.048,0.633c0,0.597-0.132,1.195-0.418,1.672
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.891c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.323-0.43,0.956-0.43,1.661c0,0.992,0.646,1.84,1.685,1.84c1.004-0.012,1.721-0.681,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.501v3.716H704.079z"/>
            </g>
            <g>
                <path d="M703.983,466.429v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H703.983z"/>
                <path d="M697.197,473.523h2.114v-3.608h0.693l4.958,3.465v1.135h-4.826v1.087h-0.825v-1.087h-2.114V473.523z M700.137,473.523
			h2.593c0.405,0,0.812,0.012,1.218,0.036v-0.036c-0.453-0.239-0.788-0.43-1.146-0.646l-2.641-1.899h-0.023V473.523z"/>
            </g>
            <g>
                <path d="M703.983,520.13v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H703.983z"/>
                <path d="M698.404,524.225c-0.191,0.299-0.49,0.992-0.49,1.72c0,1.35,0.86,1.769,1.506,1.756c1.087-0.012,1.553-0.992,1.553-2.007
			v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.395,1.171-1.362c0-0.621-0.274-1.219-0.514-1.553
			l0.765-0.275c0.299,0.406,0.598,1.195,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222c-0.801,0-1.481-0.478-1.828-1.434h-0.024
			c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832c0-0.872,0.275-1.637,0.526-2.019L698.404,524.225z"/>
            </g>
            <g>
                <path d="M703.983,574.823v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H703.983z"/>
                <path d="M697.197,578.667h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.892c0.789,0,1.518-0.382,1.518-1.542
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.334c0.454,0.538,0.789,1.302,0.789,2.198c0,1.672-1.147,2.377-2.258,2.377
			c-1.435,0-2.593-1.04-4.17-2.676l-0.573-0.621h-0.024v3.489h-0.872V578.667z"/>
            </g>
            <g>
                <path d="M703.983,626.55v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H703.983z"/>
                <path d="M703.983,632.676v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H703.983z"/>
            </g>
            <g>
                <path d="M703.983,680.815v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H703.983z"/>
                <path d="M701.164,689.821c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C705.095,688.89,703.637,689.821,701.164,689.821z M701.044,685.604c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C704.282,686.272,703.159,685.604,701.044,685.604z"/>
            </g>
            <g>
                <path d="M697.938,739.207c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.146,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H697.938z M702.406,739.589
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C704.294,740.222,703.506,739.589,702.406,739.589z"/>
            </g>
            <g>
                <path d="M699.169,792.087c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C697.065,793.066,698.033,792.087,699.169,792.087z
			 M699.217,796.269c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C697.83,795.659,698.416,796.269,699.217,796.269z M703.1,793.377c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.622,0,1.267-0.37,1.267-1.314C704.342,793.854,703.769,793.377,703.1,793.377z"/>
            </g>
            <g>
                <path d="M704.963,852.033h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V852.033z"/>
            </g>
            <g>
                <path d="M704.223,905.836c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H704.223z M699.742,905.537c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C697.878,904.928,698.631,905.537,699.742,905.537z"/>
            </g>
            <g>
                <path d="M704.079,959.6v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H704.079z"/>
            </g>
            <g>
                <path d="M697.197,1011.493h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1011.493z M700.137,1011.493
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1011.493z"/>
            </g>
            <g>
                <path d="M698.404,1064.173c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L698.404,1064.173z"/>
            </g>
            <g>
                <path d="M697.197,1117.629h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1117.629z"/>
            </g>
            <g>
                <path d="M703.983,1171.211v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H703.983z"/>
            </g>
            <g>
                <path d="M485.074,1127.044v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H485.074z"/>
            </g>
            <g>
                <path d="M215.503,1114.273c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.505,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.395,1.732,1.314,1.732c0.621,0,1.171-0.394,1.171-1.361
			c0-0.622-0.275-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.8,0-1.481-0.478-1.828-1.434h-0.023c-0.191,0.956-0.908,1.732-1.996,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.525-2.019L215.503,1114.273z"/>
                <path d="M218.264,1125.311c-2.641,0-4.098-0.979-4.098-2.7c0-1.518,1.422-2.545,3.99-2.569c2.605,0,4.039,1.123,4.039,2.7
			C222.194,1124.379,220.737,1125.311,218.264,1125.311z M218.144,1121.093c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.254,1.589,3.238,1.589c1.912,0,3.166-0.489,3.166-1.577C221.382,1121.762,220.259,1121.093,218.144,1121.093z"/>
            </g>
            <g>
                <path d="M214.297,1034.952h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.592-1.039-4.169-2.676l-0.574-0.622h-0.024v3.489h-0.872V1034.952z"/>
                <path d="M215.038,1041.688c-0.024,0.227,0,0.489,0.036,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.147,0.884,2.067,1.027v-0.036c-0.526-0.43-0.836-1.051-0.836-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.469,0,2.76,1.063,2.76,2.652c0,1.589-1.291,2.568-3.274,2.568c-1.708,0-2.903-0.573-3.644-1.338
			c-0.585-0.598-0.944-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H215.038z M219.506,1042.069
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.346,1.255,0.813,1.529c0.095,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.341-0.489,2.341-1.589C221.394,1042.702,220.605,1042.069,219.506,1042.069z"/>
            </g>
            <g>
                <path d="M214.297,958.639h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.592-1.039-4.169-2.676l-0.574-0.622h-0.024v3.489h-0.872V958.639z"/>
                <path d="M216.268,964.669c0.98,0,1.673,0.585,2.079,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.745-1.23
			c1.23,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.657,0-1.362-0.322-1.816-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.35,0-2.258-1.159-2.258-2.641C214.166,965.648,215.133,964.669,216.268,964.669z
			 M216.316,968.851c0.944,0,1.398-0.657,1.697-1.709c-0.263-0.908-0.86-1.397-1.601-1.397c-0.789-0.036-1.481,0.562-1.481,1.553
			C214.93,968.241,215.516,968.851,216.316,968.851z M220.199,965.959c-0.777,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.705,1.183,1.41,1.183c0.621,0,1.266-0.37,1.266-1.314C221.441,966.437,220.868,965.959,220.199,965.959z"/>
            </g>
            <g>
                <path d="M214.297,882.323h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.592-1.039-4.169-2.676l-0.574-0.622h-0.024v3.489h-0.872V882.323z"/>
                <path d="M222.063,893.49h-0.693l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.873V893.49z"/>
            </g>
            <g>
                <path d="M214.297,799.507h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.592-1.039-4.169-2.676l-0.574-0.622h-0.024v3.489h-0.872V799.507z"/>
                <path d="M221.322,810.064c0.012-0.215,0-0.489-0.048-0.788c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.49,0.37,0.896,1.016,0.896,1.876c0,1.374-0.992,2.342-2.509,2.342c-1.422,0-2.736-0.968-2.736-2.581
			c0-1.661,1.29-2.748,3.31-2.748c1.529,0,2.736,0.55,3.5,1.314c0.633,0.645,1.027,1.505,1.147,2.485
			c0.048,0.311,0.06,0.573,0.06,0.764H221.322z M216.842,809.767c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.275-0.12-0.466-0.12c-1.278,0.024-2.222,0.609-2.222,1.709C214.978,809.157,215.73,809.767,216.842,809.767z"/>
            </g>
            <g>
                <path d="M214.297,724.18h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.592-1.039-4.169-2.676l-0.574-0.622h-0.024v3.489h-0.872V724.18z"/>
                <path d="M221.179,734.94v-2.963l-1.995-0.298c0.024,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.346,0.609-1.016,1.111-1.995,1.111c-1.518,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.478-1.936l0.8,0.263
			c-0.191,0.322-0.43,0.956-0.43,1.661c0,0.991,0.645,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H221.179z"/>
            </g>
            <g>
                <path d="M214.297,652.529h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.592-1.039-4.169-2.676l-0.574-0.622h-0.024v3.489h-0.872V652.529z"/>
                <path d="M214.297,661.904h2.115v-3.607h0.693l4.958,3.464v1.136h-4.827v1.087h-0.824v-1.087h-2.115V661.904z M217.236,661.904
			h2.593c0.406,0,0.813,0.013,1.219,0.036v-0.036c-0.454-0.238-0.789-0.43-1.147-0.645l-2.641-1.9h-0.024V661.904z"/>
            </g>
            <g>
                <path d="M214.297,571.833h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.892c0.789,0,1.518-0.382,1.518-1.542
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.334c0.454,0.538,0.789,1.302,0.789,2.198c0,1.672-1.147,2.377-2.258,2.377
			c-1.434,0-2.592-1.04-4.169-2.676l-0.574-0.621h-0.024v3.489h-0.872V571.833z"/>
                <path d="M215.503,578.209c-0.191,0.299-0.49,0.992-0.49,1.72c0,1.35,0.86,1.769,1.505,1.756c1.087-0.012,1.553-0.992,1.553-2.007
			v-0.585h0.789v0.585c0,0.765,0.395,1.732,1.314,1.732c0.621,0,1.171-0.395,1.171-1.362c0-0.621-0.275-1.219-0.514-1.553
			l0.765-0.275c0.299,0.406,0.598,1.195,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222c-0.8,0-1.481-0.478-1.828-1.434h-0.023
			c-0.191,0.956-0.908,1.732-1.996,1.732c-1.242,0-2.33-0.968-2.33-2.832c0-0.872,0.275-1.637,0.525-2.019L215.503,578.209z"/>
            </g>
            <g>
                <path d="M222.775,483.083h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.892c0.789,0,1.518-0.382,1.518-1.542
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.334c0.454,0.538,0.789,1.302,0.789,2.198c0,1.672-1.147,2.377-2.258,2.377
			c-1.434,0-2.592-1.04-4.169-2.676l-0.574-0.621h-0.024v3.489h-0.872V483.083z"/>
                <path d="M222.775,489.208h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.892c0.789,0,1.518-0.382,1.518-1.542
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.334c0.454,0.538,0.789,1.302,0.789,2.198c0,1.672-1.147,2.377-2.258,2.377
			c-1.434,0-2.592-1.04-4.169-2.676l-0.574-0.621h-0.024v3.489h-0.872V489.208z"/>
            </g>
            <g>
                <path d="M267.857,391.927h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.892c0.789,0,1.518-0.382,1.518-1.542
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.334c0.454,0.538,0.789,1.302,0.789,2.198c0,1.672-1.147,2.377-2.258,2.377
			c-1.434,0-2.592-1.04-4.169-2.676l-0.574-0.621h-0.024v3.489h-0.872V391.927z"/>
                <path d="M274.644,400.335v-0.024l-0.729-1.35l0.8-0.203l0.908,1.696v0.896h-7.766v-1.015H274.644z"/>
            </g>
            <g>
                <path d="M305.449,326.071h0.645l0.801,0.824c1.888,1.983,2.891,2.879,4.062,2.892c0.789,0,1.518-0.382,1.518-1.542
			c0-0.705-0.358-1.29-0.657-1.648l0.741-0.334c0.454,0.538,0.789,1.302,0.789,2.198c0,1.672-1.147,2.377-2.258,2.377
			c-1.434,0-2.592-1.04-4.169-2.676l-0.574-0.621h-0.024v3.489h-0.872V326.071z"/>
                <path d="M309.416,337.358c-2.641,0-4.098-0.98-4.098-2.7c0-1.518,1.422-2.545,3.99-2.569c2.605,0,4.039,1.123,4.039,2.7
			C313.347,336.426,311.889,337.358,309.416,337.358z M309.296,333.141c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.254,1.589,3.238,1.589c1.912,0,3.166-0.49,3.166-1.577C312.534,333.81,311.411,333.141,309.296,333.141z"/>
            </g>
            <g>
                <path d="M347.001,264.617v-0.024l-0.729-1.35l0.8-0.203l0.908,1.696v0.896h-7.766v-1.015H347.001z"/>
                <path d="M340.956,269.07c-0.024,0.227,0,0.49,0.036,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.147,0.884,2.067,1.027v-0.036c-0.526-0.43-0.836-1.051-0.836-1.828c0-1.398,1.052-2.294,2.378-2.294
			c1.469,0,2.76,1.063,2.76,2.652c0,1.589-1.291,2.569-3.274,2.569c-1.708,0-2.903-0.573-3.644-1.338
			c-0.585-0.598-0.944-1.422-1.039-2.258c-0.06-0.382-0.072-0.717-0.06-0.968H340.956z M345.424,269.452
			c-0.968,0-1.648,0.585-1.648,1.494c0,0.705,0.346,1.254,0.813,1.529c0.095,0.06,0.215,0.095,0.382,0.095
			c1.326,0,2.341-0.49,2.341-1.589C347.312,270.085,346.523,269.452,345.424,269.452z"/>
            </g>
            <g>
                <path d="M436.459,193.529v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H436.459z"/>
                <path d="M431.645,197.277c0.979,0,1.672,0.585,2.078,1.542l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.04,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.323-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.64C429.541,198.257,430.509,197.277,431.645,197.277z
			 M431.692,201.458c0.943,0,1.397-0.657,1.696-1.708c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C430.306,200.85,430.892,201.458,431.692,201.458z M435.575,198.567c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.621,0,1.267-0.37,1.267-1.314C436.817,199.045,436.244,198.567,435.575,198.567z"/>
            </g>
            <g>
                <path d="M711.491,247.481l-0.02-0.013l-1.531-0.112l0.26-0.784l1.919,0.147l0.755,0.482l-4.177,6.547l-0.856-0.546
			L711.491,247.481z"/>
                <path d="M711.942,254.388c0.148,0.322,0.573,0.947,1.187,1.338c1.139,0.727,1.954,0.226,2.291-0.324
			c0.574-0.924-0.001-1.843-0.857-2.39l-0.493-0.314l0.425-0.665l0.493,0.314c0.645,0.411,1.672,0.6,2.166-0.176
			c0.335-0.524,0.299-1.198-0.518-1.719c-0.524-0.334-1.175-0.424-1.586-0.403l0.181-0.792c0.503-0.033,1.328,0.139,2.033,0.588
			c1.289,0.823,1.384,1.961,0.877,2.756c-0.431,0.675-1.199,0.992-2.191,0.771l-0.013,0.02c0.702,0.675,0.972,1.697,0.387,2.614
			c-0.669,1.047-2.068,1.443-3.64,0.44c-0.735-0.469-1.232-1.111-1.42-1.528L711.942,254.388z"/>
            </g>
            <g>
                <path d="M777.587,286.896l-0.02-0.012l-1.53-0.112l0.26-0.784l1.919,0.147l0.755,0.481l-4.177,6.547l-0.856-0.546L777.587,286.896
			z"/>
                <path d="M779.918,296.433l1.137-1.783l-3.041-1.94l0.373-0.584l5.587-2.317l0.958,0.611l-2.596,4.069l0.916,0.584l-0.443,0.695
			l-0.916-0.585l-1.138,1.783L779.918,296.433z M781.499,293.955l1.394-2.186c0.219-0.343,0.448-0.678,0.688-1.008l-0.031-0.02
			c-0.445,0.255-0.787,0.434-1.16,0.62l-3.022,1.204l-0.013,0.02L781.499,293.955z"/>
            </g>
            <g>
                <path d="M826.063,315.727l-0.02-0.013l-1.53-0.112l0.259-0.784l1.92,0.147l0.755,0.482l-4.177,6.547l-0.856-0.546L826.063,315.727
			z"/>
                <path d="M833.264,320.207l-2.498-1.594l-1.325,1.521c0.164,0.077,0.317,0.146,0.56,0.3c0.504,0.322,0.937,0.753,1.186,1.253
			c0.327,0.62,0.391,1.454-0.137,2.279c-0.816,1.279-2.444,1.587-3.864,0.681c-0.715-0.457-1.19-1.043-1.375-1.444l0.652-0.534
			c0.169,0.335,0.574,0.877,1.169,1.256c0.836,0.533,1.898,0.446,2.457-0.43c0.529-0.853,0.352-1.817-0.958-2.652
			c-0.372-0.238-0.69-0.385-0.951-0.508l2.429-2.873l3.132,1.998L833.264,320.207z"/>
            </g>
            <g>
                <path d="M870.719,342.221l-0.02-0.013l-1.53-0.112l0.258-0.783l1.919,0.147l0.756,0.481l-4.176,6.547l-0.857-0.546
			L870.719,342.221z"/>
                <path d="M877.824,346.471c-0.175-0.126-0.412-0.263-0.69-0.384c-1.537-0.655-2.922-0.106-3.761,0.875l0.03,0.02
			c0.576-0.214,1.339-0.21,2.064,0.253c1.158,0.739,1.441,2.096,0.625,3.375c-0.765,1.198-2.288,1.786-3.648,0.918
			c-1.4-0.893-1.622-2.566-0.536-4.268c0.822-1.289,1.936-2.011,2.991-2.244c0.884-0.187,1.821-0.057,2.711,0.37
			c0.288,0.126,0.516,0.257,0.677,0.36L877.824,346.471z M875.163,350.087c0.598-0.937,0.423-1.841-0.392-2.362
			c-0.533-0.34-1.24-0.323-1.783-0.004c-0.126,0.062-0.249,0.167-0.352,0.328c-0.668,1.091-0.682,2.202,0.244,2.793
			C873.646,351.332,874.565,351.024,875.163,350.087z"/>
            </g>
            <g>
                <path d="M919.337,365.051l-0.02-0.013l-1.53-0.112l0.258-0.784l1.92,0.148l0.756,0.481l-4.178,6.547l-0.855-0.546L919.337,365.051
			z"/>
                <path d="M927.355,369.004l-0.373,0.584l-6.654,4.145l-0.916-0.584l6.534-3.979l0.013-0.02l-3.203-2.044l0.469-0.735
			L927.355,369.004z"/>
            </g>
            <g>
                <path d="M478.288,1072.19h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1072.19z"/>
            </g>
            <g>
                <path d="M479.495,1017.325c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.621,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L479.495,1017.325z"/>
            </g>
            <g>
                <path d="M478.288,968.104h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V968.104z M481.228,968.104
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V968.104z"/>
            </g>
            <g>
                <path d="M485.17,914.376v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.801,0.263
			c-0.191,0.322-0.431,0.956-0.431,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H485.17z"/>
            </g>
            <g>
                <path d="M485.313,859.197c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H485.313z M480.833,858.898c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C478.969,858.289,479.722,858.898,480.833,858.898z"/>
            </g>
            <g>
                <path d="M486.054,807.8h-0.692l-7.073-3.381v-1.087l6.87,3.369h0.023v-3.8h0.872V807.8z"/>
            </g>
            <g>
                <path d="M480.26,748.959c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C478.156,749.938,479.124,748.959,480.26,748.959z
			 M480.308,753.141c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C478.921,752.531,479.507,753.141,480.308,753.141z M484.19,750.249c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.621,0,1.267-0.37,1.267-1.314C485.433,750.727,484.859,750.249,484.19,750.249z"/>
            </g>
            <g>
                <path d="M479.029,695.82c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.147,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H479.029z M483.497,696.202
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C485.385,696.835,484.597,696.202,483.497,696.202z"/>
            </g>
            <g>
                <path d="M485.074,634.813v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H485.074z"/>
                <path d="M482.255,643.819c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C486.186,642.888,484.728,643.819,482.255,643.819z M482.135,639.602c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C485.373,640.271,484.25,639.602,482.135,639.602z"/>
            </g>
            <g>
                <path d="M485.074,578.356v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H485.074z"/>
                <path d="M485.074,584.482v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H485.074z"/>
            </g>
            <g>
                <path d="M485.074,498.508v-0.024l-0.729-1.35l0.801-0.203l0.907,1.696v0.896h-7.766v-1.015H485.074z"/>
                <path d="M478.288,502.352h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.892c0.789,0,1.518-0.382,1.518-1.542
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.334c0.454,0.538,0.789,1.302,0.789,2.198c0,1.672-1.147,2.377-2.258,2.377
			c-1.434,0-2.593-1.04-4.17-2.676l-0.573-0.621h-0.024v3.489h-0.872V502.352z"/>
            </g>
            <g>
                <path d="M869.292,607.852c0.012-0.215,0-0.489-0.048-0.788c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.342-2.509,2.342c-1.422,0-2.736-0.968-2.736-2.581
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.485
			c0.047,0.311,0.06,0.573,0.06,0.764H869.292z M864.812,607.554c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C862.947,606.944,863.7,607.554,864.812,607.554z"/>
                <path d="M862.267,609.546h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V609.546z"/>
            </g>
            <g>
                <path d="M869.572,662.9c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H869.572z M865.092,662.602c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C863.228,661.992,863.98,662.602,865.092,662.602z"/>
                <path d="M866.514,669.755c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C870.444,668.823,868.986,669.755,866.514,669.755z M866.394,665.537c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C869.632,666.206,868.509,665.537,866.394,665.537z"/>
            </g>
            <g>
                <path d="M869.429,717.005v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H869.429z"/>
                <path d="M864.519,718.4c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C862.415,719.38,863.383,718.4,864.519,718.4z
			 M864.566,722.582c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C863.18,721.973,863.766,722.582,864.566,722.582z M868.449,719.69c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.622,0,1.267-0.37,1.267-1.314C869.691,720.168,869.118,719.69,868.449,719.69z"/>
            </g>
            <g>
                <path d="M869.429,772.274v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H869.429z"/>
                <path d="M869.572,778.197c0.012-0.215,0-0.489-0.048-0.788c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.342-2.509,2.342c-1.422,0-2.736-0.968-2.736-2.581
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.485
			c0.047,0.311,0.06,0.573,0.06,0.764H869.572z M865.092,777.899c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C863.228,777.29,863.98,777.899,865.092,777.899z"/>
            </g>
            <g>
                <path d="M869.429,823.928v-2.963l-1.995-0.299c0.023,0.18,0.048,0.347,0.048,0.634c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H869.429z"/>
                <path d="M862.547,828.668h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V828.668z M865.486,828.668
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V828.668z"/>
            </g>
            <g>
                <path d="M869.429,876.382v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H869.429z"/>
                <path d="M862.547,877.873h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V877.873z"/>
            </g>
            <g>
                <path d="M869.429,929.778v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.8,0.263
			c-0.19,0.322-0.43,0.956-0.43,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H869.429z"/>
                <path d="M866.514,936.431c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C870.444,935.499,868.986,936.431,866.514,936.431z M866.394,932.213c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C869.632,932.882,868.509,932.213,866.394,932.213z"/>
            </g>
            <g>
                <path d="M862.121,982.804h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V982.804z M865.061,982.804
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V982.804z"/>
                <path d="M864.093,985.585c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C861.989,986.564,862.957,985.585,864.093,985.585z
			 M864.141,989.767c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C862.754,989.157,863.34,989.767,864.141,989.767z M868.023,986.875c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.622,0,1.267-0.37,1.267-1.314C869.266,987.353,868.692,986.875,868.023,986.875z"/>
            </g>
            <g>
                <path d="M862.121,1036.649h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1036.649z M865.061,1036.649
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1036.649z"/>
                <path d="M869.146,1043.959c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H869.146z M864.666,1043.66c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C862.802,1043.051,863.555,1043.66,864.666,1043.66z"/>
            </g>
            <g>
                <path d="M862.121,1090.211h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1090.211z M865.061,1090.211
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1090.211z"/>
                <path d="M862.121,1096.337h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1096.337z M865.061,1096.337
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1096.337z"/>
            </g>
            <g>
                <path d="M862.121,1145.68h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1145.68z M865.061,1145.68
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1145.68z"/>
                <path d="M862.121,1148.557h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1148.557z"/>
            </g>
            <g>
                <path d="M862.121,1198.454h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1198.454z M865.061,1198.454
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1198.454z"/>
                <path d="M866.088,1206.492c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C870.019,1205.561,868.561,1206.492,866.088,1206.492z M865.968,1202.274c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C869.206,1202.943,868.083,1202.274,865.968,1202.274z"/>
            </g>
            <g>
                <path d="M872.229,2307.786h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V2307.786z M875.168,2307.786
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V2307.786z"/>
            </g>
            <g>
                <path d="M879.254,2253.221c0.012-0.215,0-0.489-0.048-0.788c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.342-2.509,2.342c-1.422,0-2.736-0.968-2.736-2.581
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.485
			c0.047,0.311,0.06,0.573,0.06,0.764H879.254z M874.773,2252.923c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C872.909,2252.313,873.662,2252.923,874.773,2252.923z"
                />
            </g>
            <g>
                <path d="M874.2,2192.866c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C872.097,2193.846,873.064,2192.866,874.2,2192.866z
			 M874.248,2197.048c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C872.861,2196.438,873.447,2197.048,874.248,2197.048z M878.131,2194.156c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.622,0,1.267-0.37,1.267-1.314C879.373,2194.634,878.8,2194.156,878.131,2194.156z"/>
            </g>
            <g>
                <path d="M879.015,2141.401v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H879.015z"/>
                <path d="M876.195,2150.407c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C880.126,2149.476,878.668,2150.407,876.195,2150.407z M876.075,2146.189c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C879.313,2146.858,878.19,2146.189,876.075,2146.189z"/>
            </g>
            <g>
                <path d="M879.015,2095.328v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H879.015z"/>
                <path d="M872.229,2099.173h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2099.173z"/>
            </g>
            <g>
                <path d="M879.015,2040.354v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H879.015z"/>
                <path d="M872.229,2047.447h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V2047.447z M875.168,2047.447
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V2047.447z"/>
            </g>
            <g>
                <path d="M879.015,1984.527v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H879.015z"/>
                <path d="M879.254,1992.805c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H879.254z M874.773,1992.506c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C872.909,1991.896,873.662,1992.506,874.773,1992.506z"
                />
            </g>
            <g>
                <path d="M879.015,1928.141v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H879.015z"/>
                <path d="M874.2,1931.89c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C872.097,1932.869,873.064,1931.89,874.2,1931.89z
			 M874.248,1936.071c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C872.861,1935.462,873.447,1936.071,874.248,1936.071z M878.131,1933.18c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.622,0,1.267-0.37,1.267-1.314C879.373,1933.657,878.8,1933.18,878.131,1933.18z"/>
            </g>
            <g>
                <path d="M872.229,1873.783h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1873.783z"/>
                <path d="M876.195,1885.07c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C880.126,1884.139,878.668,1885.07,876.195,1885.07z M876.075,1880.853c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C879.313,1881.521,878.19,1880.853,876.075,1880.853z"/>
            </g>
            <g>
                <path d="M872.229,1822.905h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1822.905z"/>
                <path d="M872.229,1829.031h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1829.031z"/>
            </g>
            <g>
                <path d="M872.229,1769.556h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1769.556z"/>
                <path d="M872.229,1778.931h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1778.931z M875.168,1778.931
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1778.931z"/>
            </g>
            <g>
                <path d="M872.229,1717.691h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1717.691z"/>
                <path d="M879.254,1728.25c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H879.254z M874.773,1727.951c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C872.909,1727.342,873.662,1727.951,874.773,1727.951z"
                />
            </g>
            <g>
                <path d="M872.229,1661.728h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1661.728z"/>
                <path d="M874.2,1667.758c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C872.097,1668.737,873.064,1667.758,874.2,1667.758z
			 M874.248,1671.939c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C872.861,1671.33,873.447,1671.939,874.248,1671.939z M878.131,1669.048c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.622,0,1.267-0.37,1.267-1.314C879.373,1669.525,878.8,1669.048,878.131,1669.048z"/>
            </g>
            <g>
                <path d="M873.436,1610.111c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L873.436,1610.111z"/>
                <path d="M876.195,1621.148c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C880.126,1620.217,878.668,1621.148,876.195,1621.148z M876.075,1616.931c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C879.313,1617.6,878.19,1616.931,876.075,1616.931z"/>
            </g>
            <g>
                <path d="M873.436,1535.35c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.622,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L873.436,1535.35z"/>
                <path d="M872.229,1541.226h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.435,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1541.226z"/>
            </g>
            <g>
                <path d="M688.999,2276.342h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V2276.342z"/>
            </g>
            <g>
                <path d="M690.206,2225.152c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.621,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L690.206,2225.152z"/>
            </g>
            <g>
                <path d="M688.999,2173.095h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V2173.095z M691.938,2173.095
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V2173.095z"/>
            </g>
            <g>
                <path d="M695.881,2122.413v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.801,0.263
			c-0.191,0.322-0.431,0.956-0.431,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H695.881z"/>
            </g>
            <g>
                <path d="M696.024,2068.506c0.012-0.216,0-0.49-0.048-0.789c-0.275-1.648-1.481-2.521-2.76-2.7v0.036
			c0.489,0.37,0.896,1.016,0.896,1.876c0,1.374-0.991,2.341-2.509,2.341c-1.422,0-2.736-0.967-2.736-2.58
			c0-1.661,1.291-2.748,3.31-2.748c1.529,0,2.736,0.55,3.501,1.314c0.633,0.645,1.027,1.505,1.147,2.484
			c0.047,0.312,0.06,0.574,0.06,0.766H696.024z M691.544,2068.207c1.111,0,1.78-0.634,1.78-1.602c0-0.633-0.395-1.219-0.956-1.505
			c-0.119-0.072-0.274-0.12-0.466-0.12c-1.278,0.024-2.223,0.609-2.223,1.709C689.68,2067.598,690.433,2068.207,691.544,2068.207z"
                />
            </g>
            <g>
                <path d="M696.765,2013.807h-0.692l-7.073-3.313v-1.064l6.87,3.3h0.023v-3.722h0.872V2013.807z"/>
            </g>
            <g>
                <path d="M690.971,1956.29c0.979,0,1.672,0.585,2.078,1.541l0.036-0.012c0.406-0.86,1.075-1.23,1.744-1.23
			c1.231,0,2.067,1.039,2.067,2.401c0,1.505-0.944,2.258-1.912,2.258c-0.656,0-1.361-0.322-1.815-1.278h-0.036
			c-0.382,0.968-1.063,1.565-2.007,1.565c-1.351,0-2.259-1.159-2.259-2.641C688.867,1957.27,689.835,1956.29,690.971,1956.29z
			 M691.019,1960.472c0.943,0,1.397-0.657,1.696-1.709c-0.263-0.908-0.86-1.397-1.602-1.397c-0.788-0.036-1.481,0.562-1.481,1.553
			C689.632,1959.862,690.218,1960.472,691.019,1960.472z M694.901,1957.58c-0.776,0-1.195,0.585-1.434,1.481
			c0.227,0.669,0.704,1.183,1.409,1.183c0.621,0,1.267-0.37,1.267-1.314C696.144,1958.058,695.57,1957.58,694.901,1957.58z"/>
            </g>
            <g>
                <path d="M689.74,1903.857c-0.024,0.227,0,0.489,0.035,0.848c0.084,0.609,0.335,1.183,0.753,1.625
			c0.466,0.514,1.147,0.884,2.067,1.027v-0.036c-0.526-0.43-0.837-1.051-0.837-1.827c0-1.398,1.052-2.294,2.378-2.294
			c1.47,0,2.76,1.063,2.76,2.652c0,1.589-1.29,2.568-3.273,2.568c-1.709,0-2.903-0.573-3.645-1.338
			c-0.585-0.598-0.943-1.422-1.039-2.259c-0.06-0.382-0.072-0.717-0.06-0.967H689.74z M694.208,1904.239
			c-0.968,0-1.648,0.585-1.648,1.493c0,0.705,0.347,1.255,0.813,1.529c0.096,0.06,0.215,0.096,0.382,0.096
			c1.326,0,2.342-0.489,2.342-1.589C696.096,1904.872,695.308,1904.239,694.208,1904.239z"/>
            </g>
            <g>
                <path d="M695.785,1843.912v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
                <path d="M692.966,1852.918c-2.641,0-4.099-0.979-4.099-2.7c0-1.518,1.422-2.545,3.991-2.569c2.604,0,4.038,1.123,4.038,2.7
			C696.896,1851.986,695.438,1852.918,692.966,1852.918z M692.846,1848.7c-2.019,0-3.166,0.621-3.166,1.577
			c0,1.075,1.255,1.589,3.238,1.589c1.911,0,3.166-0.489,3.166-1.577C696.084,1849.369,694.961,1848.7,692.846,1848.7z"/>
            </g>
            <g>
                <path d="M695.785,1790.35v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
                <path d="M695.785,1796.476v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
            </g>
            <g>
                <path d="M695.785,1736.788v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
                <path d="M688.999,1740.633h0.646l0.8,0.824c1.888,1.983,2.892,2.879,4.063,2.891c0.789,0,1.518-0.382,1.518-1.541
			c0-0.705-0.358-1.29-0.657-1.648l0.74-0.335c0.454,0.538,0.789,1.303,0.789,2.198c0,1.673-1.147,2.378-2.258,2.378
			c-1.434,0-2.593-1.039-4.17-2.676l-0.573-0.622h-0.024v3.489h-0.872V1740.633z"/>
            </g>
            <g>
                <path d="M695.785,1685.264v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
                <path d="M690.206,1689.358c-0.191,0.299-0.49,0.992-0.49,1.721c0,1.351,0.86,1.769,1.506,1.757
			c1.087-0.013,1.553-0.992,1.553-2.008v-0.585h0.789v0.585c0,0.765,0.394,1.732,1.313,1.732c0.621,0,1.171-0.394,1.171-1.361
			c0-0.622-0.274-1.219-0.514-1.554l0.765-0.274c0.299,0.406,0.598,1.194,0.598,2.031c0,1.529-0.908,2.222-1.852,2.222
			c-0.801,0-1.481-0.478-1.828-1.434h-0.024c-0.19,0.956-0.908,1.732-1.995,1.732c-1.242,0-2.33-0.968-2.33-2.832
			c0-0.872,0.275-1.637,0.526-2.019L690.206,1689.358z"/>
            </g>
            <g>
                <path d="M695.785,1629.662v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
                <path d="M688.999,1636.756h2.114v-3.607h0.693l4.958,3.464v1.136h-4.826v1.087h-0.825v-1.087h-2.114V1636.756z M691.938,1636.756
			h2.593c0.405,0,0.812,0.013,1.218,0.036v-0.036c-0.453-0.238-0.788-0.43-1.146-0.645l-2.641-1.9h-0.023V1636.756z"/>
            </g>
            <g>
                <path d="M695.785,1568.045v-0.023l-0.729-1.351l0.801-0.203l0.907,1.697v0.896h-7.766v-1.016H695.785z"/>
                <path d="M695.881,1576.524v-2.963l-1.995-0.298c0.023,0.179,0.048,0.346,0.048,0.633c0,0.598-0.132,1.194-0.418,1.673
			c-0.347,0.609-1.016,1.111-1.996,1.111c-1.517,0-2.652-1.207-2.652-2.892c0-0.849,0.239-1.565,0.479-1.936l0.801,0.263
			c-0.191,0.322-0.431,0.956-0.431,1.661c0,0.991,0.646,1.84,1.685,1.84c1.004-0.013,1.721-0.682,1.721-2.234
			c0-0.442-0.048-0.789-0.084-1.075l3.728,0.502v3.715H695.881z"/>
            </g>
            <g>
                <path d="M564.031,1917.109l7.601-2.481v1.061l-3.744,1.184c-1.026,0.327-1.951,0.609-2.842,0.812v0.022
			c0.88,0.215,1.838,0.53,2.83,0.869l3.756,1.285v1.049l-7.601-2.718V1917.109z"/>
                <path d="M564.031,1922.364h5.458v0.992h-5.458V1922.364z M571.022,1923.47c-0.338,0.011-0.608-0.237-0.608-0.632
			c0-0.35,0.271-0.598,0.608-0.598c0.35,0,0.62,0.259,0.62,0.62C571.643,1923.232,571.372,1923.47,571.022,1923.47z"/>
                <path d="M572.037,1925.848v0.992h-8.006v-0.992H572.037z"/>
                <path d="M572.037,1929.354v0.992h-8.006v-0.992H572.037z"/>
                <path d="M564.031,1935.883l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V1935.883z
			 M566.816,1935.736c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H566.816z"/>
                <path d="M565.046,1939.007c-0.191,0.294-0.395,0.813-0.395,1.309c0,0.722,0.361,1.06,0.812,1.06c0.474,0,0.733-0.281,1.004-1.015
			c0.35-0.981,0.891-1.443,1.545-1.443c0.88,0,1.602,0.71,1.602,1.883c0,0.553-0.158,1.038-0.339,1.342l-0.722-0.248
			c0.136-0.214,0.316-0.608,0.316-1.116c0-0.586-0.339-0.913-0.744-0.913c-0.451,0-0.654,0.327-0.925,1.037
			c-0.361,0.947-0.835,1.433-1.646,1.433c-0.959,0-1.635-0.744-1.635-2.041c0-0.598,0.146-1.15,0.372-1.534L565.046,1939.007z"/>
                <path d="M572.037,1952.403h-6.597c-0.484,0-1.037,0.011-1.409,0.045v-0.892l0.947-0.045v-0.022
			c-0.609-0.305-1.071-0.97-1.071-1.86c0-1.319,1.116-2.334,2.774-2.334c1.815-0.012,2.932,1.116,2.932,2.446
			c0,0.835-0.395,1.398-0.835,1.646v0.022h3.259V1952.403z M567.268,1951.41c0.124,0,0.293-0.011,0.417-0.045
			c0.632-0.146,1.15-0.688,1.15-1.432c0-1.026-0.902-1.636-2.108-1.636c-1.105,0-2.019,0.542-2.019,1.613
			c0,0.665,0.439,1.273,1.184,1.454c0.136,0.034,0.271,0.045,0.429,0.045H567.268z"/>
                <path d="M566.58,1955.448c-1.342,0.022-1.895,0.879-1.895,1.872c0,0.71,0.124,1.139,0.281,1.511l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.104-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.36-0.022-0.462-0.033V1955.448z M567.29,1958.357c0.632,0.011,1.612-0.26,1.612-1.376
			c0-1.004-0.925-1.443-1.612-1.522V1958.357z"/>
                <path d="M572.037,1961.391v0.992h-8.006v-0.992H572.037z"/>
                <path d="M564.279,1973.478c-0.181-0.36-0.36-1.082-0.36-2.007c0-2.143,1.353-3.755,3.845-3.755c2.379,0,3.992,1.612,3.992,3.969
			c0,0.947-0.203,1.545-0.339,1.805l-0.801-0.237c0.181-0.372,0.316-0.902,0.316-1.533c0-1.782-1.14-2.966-3.135-2.966
			c-1.861,0-3.057,1.071-3.057,2.921c0,0.598,0.124,1.206,0.316,1.601L564.279,1973.478z"/>
                <path d="M572.037,1975.52v0.992h-3.405v0.022c0.282,0.158,0.53,0.406,0.699,0.711c0.169,0.293,0.282,0.643,0.282,1.015
			c0,0.732-0.451,1.905-2.334,1.905h-3.248v-0.992h3.135c0.88,0,1.624-0.327,1.624-1.263c0-0.643-0.451-1.15-0.992-1.331
			c-0.136-0.056-0.282-0.067-0.474-0.067h-3.293v-0.992H572.037z"/>
                <path d="M566.806,1987.562c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C569.613,1986.502,568.474,1987.562,566.806,1987.562z M566.749,1983.231c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S567.786,1983.231,566.749,1983.231z"/>
                <path d="M564.031,1992.681l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V1992.681z
			 M566.816,1992.534c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H566.816z"/>
                <path d="M564.234,1999.831c-0.136-0.26-0.315-0.835-0.315-1.567c0-1.646,1.116-2.718,2.785-2.718c1.68,0,2.897,1.15,2.897,2.932
			c0,0.586-0.146,1.105-0.282,1.376l-0.767-0.226c0.136-0.237,0.26-0.609,0.26-1.15c0-1.252-0.925-1.929-2.063-1.929
			c-1.263,0-2.041,0.813-2.041,1.895c0,0.564,0.146,0.937,0.271,1.218L564.234,1999.831z"/>
                <path d="M566.806,2006.708c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C569.613,2005.648,568.474,2006.708,566.806,2006.708z M566.749,2002.378c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S567.786,2002.378,566.749,2002.378z"/>
                <path d="M567.786,2008.807c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.046-0.463-0.046h-2.909v-0.98H567.786z"/>
                <path d="M567.786,2013.385c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.046-0.463-0.046h-2.909v-0.98H567.786z"/>
                <path d="M564.031,2020.883l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V2020.883z
			 M566.816,2020.736c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H566.816z"/>
                <path d="M572.037,2024.142v0.992h-8.006v-0.992H572.037z"/>
                <path d="M570.437,2032.723v-0.022l-0.688-1.274l0.756-0.191l0.856,1.602v0.846h-7.329v-0.959H570.437z"/>
                <path d="M570.437,2039.354v-0.022l-0.688-1.274l0.756-0.191l0.856,1.602v0.846h-7.329v-0.959H570.437z"/>
            </g>
            <g>
                <path d="M578.486,814.779l7.601-2.48v1.061l-3.744,1.184c-1.026,0.327-1.951,0.609-2.842,0.812v0.022
			c0.88,0.215,1.838,0.53,2.83,0.869l3.756,1.285v1.049l-7.601-2.718V814.779z"/>
                <path d="M578.486,820.035h5.458v0.992h-5.458V820.035z M585.478,821.141c-0.338,0.011-0.608-0.237-0.608-0.632
			c0-0.35,0.271-0.598,0.608-0.598c0.35,0,0.62,0.259,0.62,0.62C586.098,820.903,585.827,821.141,585.478,821.141z"/>
                <path d="M586.492,823.519v0.992h-8.006v-0.992H586.492z"/>
                <path d="M586.492,827.025v0.992h-8.006v-0.992H586.492z"/>
                <path d="M578.486,833.554l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V833.554z
			 M581.271,833.407c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H581.271z"/>
                <path d="M579.501,836.678c-0.191,0.294-0.395,0.813-0.395,1.309c0,0.722,0.361,1.06,0.812,1.06c0.474,0,0.733-0.281,1.004-1.015
			c0.35-0.981,0.891-1.443,1.545-1.443c0.88,0,1.602,0.71,1.602,1.883c0,0.553-0.158,1.038-0.339,1.342l-0.722-0.248
			c0.136-0.214,0.316-0.608,0.316-1.116c0-0.586-0.339-0.913-0.744-0.913c-0.451,0-0.654,0.327-0.925,1.037
			c-0.361,0.947-0.835,1.433-1.646,1.433c-0.959,0-1.635-0.744-1.635-2.041c0-0.598,0.146-1.15,0.372-1.534L579.501,836.678z"/>
                <path d="M586.492,850.074h-6.597c-0.484,0-1.037,0.011-1.409,0.045v-0.891l0.947-0.046v-0.022c-0.609-0.305-1.071-0.97-1.071-1.86
			c0-1.319,1.116-2.334,2.774-2.334c1.815-0.012,2.932,1.116,2.932,2.446c0,0.835-0.395,1.398-0.835,1.646v0.022h3.259V850.074z
			 M581.723,849.081c0.124,0,0.293-0.011,0.417-0.045c0.632-0.146,1.15-0.688,1.15-1.432c0-1.026-0.902-1.636-2.108-1.636
			c-1.105,0-2.019,0.542-2.019,1.613c0,0.665,0.439,1.273,1.184,1.454c0.136,0.034,0.271,0.045,0.429,0.045H581.723z"/>
                <path d="M581.035,853.119c-1.342,0.022-1.895,0.879-1.895,1.871c0,0.711,0.124,1.14,0.281,1.512l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.104-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.36-0.022-0.462-0.033V853.119z M581.745,856.028c0.632,0.011,1.612-0.26,1.612-1.376c0-1.004-0.925-1.443-1.612-1.522
			V856.028z"/>
                <path d="M586.492,859.062v0.992h-8.006v-0.992H586.492z"/>
                <path d="M578.734,871.148c-0.181-0.36-0.36-1.082-0.36-2.007c0-2.143,1.353-3.755,3.845-3.755c2.379,0,3.992,1.612,3.992,3.969
			c0,0.947-0.203,1.545-0.339,1.805l-0.801-0.237c0.181-0.372,0.316-0.902,0.316-1.533c0-1.782-1.14-2.966-3.135-2.966
			c-1.861,0-3.057,1.071-3.057,2.921c0,0.598,0.124,1.206,0.316,1.601L578.734,871.148z"/>
                <path d="M586.492,873.19v0.992h-3.405v0.022c0.282,0.158,0.53,0.406,0.699,0.711c0.169,0.293,0.282,0.643,0.282,1.015
			c0,0.732-0.451,1.905-2.334,1.905h-3.248v-0.992h3.135c0.88,0,1.624-0.327,1.624-1.263c0-0.643-0.451-1.15-0.992-1.331
			c-0.136-0.056-0.282-0.067-0.474-0.067h-3.293v-0.992H586.492z"/>
                <path d="M581.261,885.232c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C584.068,884.173,582.929,885.232,581.261,885.232z M581.204,880.902c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S582.241,880.902,581.204,880.902z"/>
                <path d="M578.486,890.352l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V890.352z
			 M581.271,890.205c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H581.271z"/>
                <path d="M578.689,897.502c-0.136-0.26-0.315-0.835-0.315-1.567c0-1.646,1.116-2.718,2.785-2.718c1.68,0,2.897,1.15,2.897,2.932
			c0,0.586-0.146,1.105-0.282,1.376l-0.767-0.226c0.136-0.237,0.26-0.609,0.26-1.15c0-1.252-0.925-1.929-2.063-1.929
			c-1.263,0-2.041,0.813-2.041,1.895c0,0.564,0.146,0.937,0.271,1.218L578.689,897.502z"/>
                <path d="M581.261,904.379c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C584.068,903.319,582.929,904.379,581.261,904.379z M581.204,900.049c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S582.241,900.049,581.204,900.049z"/>
                <path d="M582.241,906.478c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.045-0.463-0.045h-2.909v-0.981H582.241z"/>
                <path d="M582.241,911.056c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.045-0.463-0.045h-2.909v-0.981H582.241z"/>
                <path d="M578.486,918.554l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V918.554z
			 M581.271,918.407c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H581.271z"/>
                <path d="M586.492,921.813v0.992h-8.006v-0.992H586.492z"/>
                <path d="M584.892,930.394v-0.022l-0.688-1.274l0.756-0.191l0.856,1.602v0.846h-7.329v-0.959H584.892z"/>
                <path d="M584.892,937.024v-0.022l-0.688-1.274l0.756-0.191l0.856,1.602v0.846h-7.329v-0.959H584.892z"/>
                <path d="M583.944,942.211l-2.774,0.722c-0.608,0.158-1.173,0.305-1.736,0.406v0.033c0.553,0.124,1.139,0.305,1.726,0.485
			l2.785,0.891v0.835l-2.729,0.846c-0.653,0.202-1.229,0.36-1.781,0.484v0.034c0.553,0.09,1.128,0.236,1.771,0.417l2.74,0.778v0.98
			l-5.458-1.759v-0.902l2.604-0.834c0.609-0.192,1.15-0.35,1.793-0.485v-0.022c-0.653-0.135-1.218-0.305-1.804-0.496l-2.594-0.88
			v-0.901l5.458-1.646V942.211z"/>
            </g>
            <g>
                <path d="M582.02,410.828l7.601-2.481v1.06l-3.744,1.184c-1.026,0.327-1.951,0.609-2.842,0.812v0.022
			c0.88,0.214,1.838,0.53,2.83,0.868l3.756,1.286v1.049l-7.601-2.718V410.828z"/>
                <path d="M582.02,416.083h5.458v0.992h-5.458V416.083z M589.011,417.188c-0.338,0.011-0.608-0.237-0.608-0.631
			c0-0.35,0.271-0.598,0.608-0.598c0.35,0,0.62,0.259,0.62,0.62C589.631,416.951,589.36,417.188,589.011,417.188z"/>
                <path d="M590.025,419.567v0.992h-8.006v-0.992H590.025z"/>
                <path d="M590.025,423.074v0.992h-8.006v-0.992H590.025z"/>
                <path d="M582.02,429.603l0.688-0.079v-0.034c-0.428-0.304-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.282h0.113c0.451,0,1.263-0.124,1.263-1.241c0-0.507-0.157-1.037-0.406-1.421l0.654-0.225
			c0.293,0.451,0.485,1.105,0.485,1.792c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V429.603z
			 M584.805,429.456c0.022-1.083-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.428-0.946,0.936c0,0.71,0.45,1.162,0.913,1.319
			c0.102,0.034,0.214,0.057,0.315,0.057H584.805z"/>
                <path d="M583.034,432.726c-0.191,0.293-0.395,0.812-0.395,1.308c0,0.722,0.361,1.06,0.812,1.06c0.474,0,0.733-0.282,1.004-1.015
			c0.35-0.981,0.891-1.443,1.545-1.443c0.88,0,1.602,0.71,1.602,1.883c0,0.552-0.158,1.037-0.339,1.342l-0.722-0.248
			c0.136-0.214,0.316-0.609,0.316-1.117c0-0.586-0.339-0.913-0.744-0.913c-0.451,0-0.654,0.327-0.925,1.037
			c-0.361,0.947-0.835,1.432-1.646,1.432c-0.959,0-1.635-0.744-1.635-2.041c0-0.598,0.146-1.15,0.372-1.533L583.034,432.726z"/>
                <path d="M590.025,446.122h-6.597c-0.484,0-1.037,0.011-1.409,0.045v-0.891l0.947-0.045v-0.023c-0.609-0.304-1.071-0.97-1.071-1.86
			c0-1.319,1.116-2.334,2.774-2.334c1.815-0.012,2.932,1.116,2.932,2.447c0,0.834-0.395,1.398-0.835,1.646v0.022h3.259V446.122z
			 M585.256,445.13c0.124,0,0.293-0.011,0.417-0.045c0.632-0.146,1.15-0.688,1.15-1.432c0-1.026-0.902-1.635-2.108-1.635
			c-1.105,0-2.019,0.541-2.019,1.612c0,0.666,0.439,1.274,1.184,1.455c0.136,0.034,0.271,0.045,0.429,0.045H585.256z"/>
                <path d="M584.568,449.166c-1.342,0.023-1.895,0.88-1.895,1.872c0,0.71,0.124,1.139,0.281,1.511l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.68,1.104-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.782-1.567,2.255-2.571,2.255
			c-0.203,0-0.36-0.023-0.462-0.034V449.166z M585.278,452.076c0.632,0.011,1.612-0.26,1.612-1.376c0-1.003-0.925-1.443-1.612-1.522
			V452.076z"/>
                <path d="M590.025,455.109v0.992h-8.006v-0.992H590.025z"/>
                <path d="M582.268,467.197c-0.181-0.361-0.36-1.083-0.36-2.007c0-2.143,1.353-3.755,3.845-3.755c2.379,0,3.992,1.613,3.992,3.969
			c0,0.947-0.203,1.545-0.339,1.804l-0.801-0.237c0.181-0.372,0.316-0.902,0.316-1.533c0-1.782-1.14-2.966-3.135-2.966
			c-1.861,0-3.057,1.071-3.057,2.92c0,0.598,0.124,1.207,0.316,1.602L582.268,467.197z"/>
                <path d="M590.025,469.238v0.992h-3.405v0.022c0.282,0.158,0.53,0.406,0.699,0.71c0.169,0.293,0.282,0.643,0.282,1.015
			c0,0.733-0.451,1.905-2.334,1.905h-3.248v-0.992h3.135c0.88,0,1.624-0.327,1.624-1.263c0-0.643-0.451-1.15-0.992-1.331
			c-0.136-0.057-0.282-0.068-0.474-0.068h-3.293v-0.992H590.025z"/>
                <path d="M584.794,481.281c-2.019,0-2.898-1.398-2.898-2.718c0-1.477,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C587.602,480.221,586.462,481.281,584.794,481.281z M584.737,476.951c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S585.774,476.951,584.737,476.951z"/>
                <path d="M582.02,486.4l0.688-0.079v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.282h0.113c0.451,0,1.263-0.124,1.263-1.241c0-0.507-0.157-1.037-0.406-1.421l0.654-0.225
			c0.293,0.451,0.485,1.105,0.485,1.792c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V486.4z
			 M584.805,486.253c0.022-1.083-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.428-0.946,0.936c0,0.71,0.45,1.162,0.913,1.319
			c0.102,0.034,0.214,0.057,0.315,0.057H584.805z"/>
                <path d="M582.223,493.549c-0.136-0.259-0.315-0.834-0.315-1.567c0-1.646,1.116-2.717,2.785-2.717c1.68,0,2.897,1.15,2.897,2.932
			c0,0.586-0.146,1.105-0.282,1.375l-0.767-0.226c0.136-0.236,0.26-0.609,0.26-1.15c0-1.251-0.925-1.928-2.063-1.928
			c-1.263,0-2.041,0.812-2.041,1.895c0,0.563,0.146,0.936,0.271,1.218L582.223,493.549z"/>
                <path d="M584.794,500.428c-2.019,0-2.898-1.398-2.898-2.718c0-1.477,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C587.602,499.368,586.462,500.428,584.794,500.428z M584.737,496.098c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S585.774,496.098,584.737,496.098z"/>
                <path d="M585.774,502.525c0.643,0,1.195-0.011,1.703-0.045v0.869l-1.071,0.034v0.045c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.113-0.012,0.192-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.338c0-0.699-0.529-1.195-1.273-1.331
			c-0.136-0.022-0.294-0.045-0.463-0.045h-2.909v-0.981H585.774z"/>
                <path d="M585.774,507.103c0.643,0,1.195-0.011,1.703-0.045v0.869l-1.071,0.034v0.045c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.113-0.012,0.192-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.338c0-0.699-0.529-1.195-1.273-1.331
			c-0.136-0.022-0.294-0.045-0.463-0.045h-2.909v-0.981H585.774z"/>
                <path d="M582.02,514.602l0.688-0.079v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.282h0.113c0.451,0,1.263-0.124,1.263-1.241c0-0.507-0.157-1.037-0.406-1.421l0.654-0.225
			c0.293,0.451,0.485,1.105,0.485,1.792c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V514.602z
			 M584.805,514.456c0.022-1.083-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.428-0.946,0.936c0,0.71,0.45,1.162,0.913,1.319
			c0.102,0.034,0.214,0.057,0.315,0.057H584.805z"/>
                <path d="M590.025,517.861v0.992h-8.006v-0.992H590.025z"/>
                <path d="M588.425,526.441v-0.022l-0.688-1.274l0.756-0.191l0.856,1.601v0.846h-7.329v-0.958H588.425z"/>
                <path d="M588.425,533.072v-0.022l-0.688-1.274l0.756-0.191l0.856,1.601v0.846h-7.329v-0.958H588.425z"/>
                <path d="M587.478,538.259l-2.774,0.722c-0.608,0.158-1.173,0.305-1.736,0.406v0.034c0.553,0.124,1.139,0.304,1.726,0.485
			l2.785,0.891v0.834l-2.729,0.846c-0.653,0.203-1.229,0.361-1.781,0.485v0.034c0.553,0.09,1.128,0.236,1.771,0.417l2.74,0.778
			v0.981l-5.458-1.759v-0.902l2.604-0.834c0.609-0.192,1.15-0.35,1.793-0.485v-0.022c-0.653-0.135-1.218-0.304-1.804-0.496
			l-2.594-0.879v-0.902l5.458-1.646V538.259z"/>
            </g>
            <g>
                <path d="M361.767,740.584l7.6-2.481v1.061l-3.744,1.184c-1.026,0.327-1.951,0.609-2.842,0.812v0.022
			c0.88,0.215,1.838,0.53,2.831,0.869l3.755,1.285v1.049l-7.6-2.718V740.584z"/>
                <path d="M361.767,745.839h5.458v0.992h-5.458V745.839z M368.758,746.944c-0.338,0.011-0.609-0.237-0.609-0.632
			c0-0.35,0.271-0.598,0.609-0.598c0.35,0,0.62,0.259,0.62,0.62C369.378,746.707,369.107,746.944,368.758,746.944z"/>
                <path d="M369.773,749.322v0.992h-8.006v-0.992H369.773z"/>
                <path d="M369.773,752.829v0.992h-8.006v-0.992H369.773z"/>
                <path d="M361.767,759.357l0.688-0.078v-0.034c-0.429-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.03,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.158-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.139,2.075-2.232,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V759.357z
			 M364.552,759.211c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.947,0.429-0.947,0.937c0,0.71,0.451,1.161,0.914,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H364.552z"/>
                <path d="M362.781,762.481c-0.191,0.294-0.395,0.813-0.395,1.309c0,0.722,0.361,1.06,0.812,1.06c0.474,0,0.733-0.281,1.003-1.015
			c0.35-0.981,0.891-1.443,1.545-1.443c0.879,0,1.601,0.71,1.601,1.883c0,0.553-0.158,1.038-0.338,1.342l-0.722-0.248
			c0.135-0.214,0.315-0.608,0.315-1.116c0-0.586-0.338-0.913-0.744-0.913c-0.451,0-0.654,0.327-0.925,1.037
			c-0.361,0.947-0.834,1.433-1.646,1.433c-0.958,0-1.635-0.744-1.635-2.041c0-0.598,0.146-1.15,0.372-1.534L362.781,762.481z"/>
                <path d="M369.773,775.878h-6.597c-0.485,0-1.038,0.011-1.41,0.045v-0.892l0.947-0.045v-0.022c-0.609-0.305-1.071-0.97-1.071-1.86
			c0-1.319,1.116-2.334,2.774-2.334c1.815-0.012,2.932,1.116,2.932,2.446c0,0.835-0.395,1.398-0.834,1.646v0.022h3.259V775.878z
			 M365.003,774.885c0.124,0,0.293-0.011,0.417-0.045c0.632-0.146,1.15-0.688,1.15-1.432c0-1.026-0.902-1.636-2.109-1.636
			c-1.105,0-2.018,0.542-2.018,1.613c0,0.665,0.439,1.273,1.184,1.454c0.136,0.034,0.271,0.045,0.429,0.045H365.003z"/>
                <path d="M364.315,778.923c-1.342,0.022-1.895,0.879-1.895,1.872c0,0.71,0.124,1.139,0.282,1.511l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.105-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.361-0.022-0.462-0.033V778.923z M365.025,781.832c0.631,0.011,1.612-0.26,1.612-1.376
			c0-1.004-0.924-1.443-1.612-1.522V781.832z"/>
                <path d="M369.773,784.865v0.992h-8.006v-0.992H369.773z"/>
                <path d="M362.015,796.952c-0.18-0.36-0.361-1.082-0.361-2.007c0-2.143,1.353-3.755,3.845-3.755c2.379,0,3.992,1.612,3.992,3.969
			c0,0.947-0.203,1.545-0.338,1.805l-0.8-0.237c0.18-0.372,0.315-0.902,0.315-1.533c0-1.782-1.139-2.966-3.135-2.966
			c-1.86,0-3.056,1.071-3.056,2.921c0,0.598,0.124,1.206,0.316,1.601L362.015,796.952z"/>
                <path d="M369.773,798.994v0.992h-3.406v0.022c0.282,0.158,0.53,0.406,0.699,0.711c0.169,0.293,0.282,0.643,0.282,1.015
			c0,0.732-0.451,1.905-2.334,1.905h-3.248v-0.992h3.135c0.879,0,1.624-0.327,1.624-1.263c0-0.643-0.451-1.15-0.993-1.331
			c-0.135-0.056-0.282-0.067-0.474-0.067h-3.292v-0.992H369.773z"/>
                <path d="M364.541,811.036c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.083-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C367.348,809.977,366.209,811.036,364.541,811.036z M364.484,806.706c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.924,0,2.097-0.462,2.097-1.635S365.521,806.706,364.484,806.706z"/>
                <path d="M361.767,816.155l0.688-0.078v-0.034c-0.429-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.03,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.158-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.139,2.075-2.232,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V816.155z
			 M364.552,816.009c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.947,0.429-0.947,0.937c0,0.71,0.451,1.161,0.914,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H364.552z"/>
                <path d="M361.97,823.306c-0.135-0.26-0.316-0.835-0.316-1.567c0-1.646,1.116-2.718,2.785-2.718c1.68,0,2.898,1.15,2.898,2.932
			c0,0.586-0.146,1.105-0.282,1.376l-0.767-0.226c0.135-0.237,0.259-0.609,0.259-1.15c0-1.252-0.925-1.929-2.063-1.929
			c-1.263,0-2.041,0.813-2.041,1.895c0,0.564,0.146,0.937,0.271,1.218L361.97,823.306z"/>
                <path d="M364.541,830.183c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.083-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C367.348,829.123,366.209,830.183,364.541,830.183z M364.484,825.853c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.924,0,2.097-0.462,2.097-1.635S365.521,825.853,364.484,825.853z"/>
                <path d="M365.521,832.281c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.733,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.011,0.191-0.034,0.282h-0.936c0.023-0.102,0.034-0.203,0.034-0.339c0-0.699-0.53-1.195-1.274-1.33
			c-0.135-0.022-0.293-0.046-0.462-0.046h-2.909v-0.98H365.521z"/>
                <path d="M365.521,836.859c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.733,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.011,0.191-0.034,0.282h-0.936c0.023-0.102,0.034-0.203,0.034-0.339c0-0.699-0.53-1.195-1.274-1.33
			c-0.135-0.022-0.293-0.046-0.462-0.046h-2.909v-0.98H365.521z"/>
                <path d="M361.767,844.357l0.688-0.078v-0.034c-0.429-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.03,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.158-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.139,2.075-2.232,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V844.357z
			 M364.552,844.211c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.947,0.429-0.947,0.937c0,0.71,0.451,1.161,0.914,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H364.552z"/>
                <path d="M369.773,847.616v0.992h-8.006v-0.992H369.773z"/>
                <path d="M368.171,856.197v-0.022l-0.688-1.274l0.755-0.191l0.857,1.602v0.846h-7.33v-0.959H368.171z"/>
                <path d="M368.171,862.828v-0.022l-0.688-1.274l0.755-0.191l0.857,1.602v0.846h-7.33v-0.959H368.171z"/>
                <path d="M367.224,868.015l-2.774,0.722c-0.609,0.158-1.172,0.305-1.736,0.406v0.033c0.552,0.124,1.139,0.305,1.725,0.485
			l2.785,0.891v0.835l-2.729,0.846c-0.654,0.202-1.229,0.36-1.782,0.484v0.034c0.552,0.09,1.127,0.236,1.771,0.417l2.74,0.778v0.98
			l-5.458-1.759v-0.902l2.605-0.834c0.609-0.192,1.15-0.35,1.793-0.485v-0.022c-0.654-0.135-1.218-0.305-1.804-0.496l-2.594-0.88
			v-0.901l5.458-1.646V868.015z"/>
                <path d="M364.157,881.264l-2.391-0.789v-1.015l7.6,2.582v1.184l-7.6,2.594v-1.049l2.391-0.812V881.264z M364.924,883.756
			l2.188-0.744c0.497-0.169,0.947-0.282,1.387-0.395v-0.022c-0.451-0.113-0.914-0.237-1.375-0.384l-2.199-0.744V883.756z"/>
                <path d="M365.747,887.714c0.564,0,1.026-0.012,1.477-0.045v0.879l-0.902,0.057v0.022c0.519,0.271,1.026,0.902,1.026,1.805
			c0,0.755-0.451,1.928-2.323,1.928h-3.259v-0.992h3.146c0.879,0,1.613-0.327,1.613-1.263c0-0.654-0.462-1.161-1.015-1.331
			c-0.124-0.045-0.293-0.067-0.462-0.067h-3.281v-0.992H365.747z"/>
                <path d="M364.315,895.371c-1.342,0.022-1.895,0.879-1.895,1.871c0,0.711,0.124,1.14,0.282,1.512l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.105-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.361-0.022-0.462-0.033V895.371z M365.025,898.28c0.631,0.011,1.612-0.26,1.612-1.376c0-1.004-0.924-1.443-1.612-1.522
			V898.28z"/>
                <path d="M367.224,901.741l-1.172,0.778c-0.305,0.203-0.586,0.372-0.891,0.553v0.034c0.327,0.18,0.609,0.36,0.902,0.541
			l1.161,0.767v1.071l-2.639-1.86l-2.819,1.917v-1.128l1.229-0.801c0.316-0.214,0.62-0.395,0.947-0.586v-0.022
			c-0.327-0.181-0.62-0.372-0.947-0.575l-1.229-0.79v-1.094l2.785,1.939l2.672-1.849V901.741z"/>
                <path d="M364.541,912.115c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.083-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C367.348,911.056,366.209,912.115,364.541,912.115z M364.484,907.785c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.924,0,2.097-0.462,2.097-1.635S365.521,907.785,364.484,907.785z"/>
                <path d="M368.171,919.287v-0.022l-0.688-1.274l0.755-0.191l0.857,1.602v0.846h-7.33v-0.959H368.171z"/>
            </g>
            <g>
                <path d="M69.721,734.93l7.6-2.48v1.061l-3.744,1.184c-1.026,0.327-1.951,0.609-2.842,0.812v0.022
			c0.88,0.215,1.838,0.53,2.831,0.869l3.755,1.285v1.049l-7.6-2.718V734.93z"/>
                <path d="M69.721,740.186h5.458v0.992h-5.458V740.186z M76.712,741.291c-0.338,0.011-0.609-0.237-0.609-0.632
			c0-0.35,0.271-0.598,0.609-0.598c0.35,0,0.62,0.259,0.62,0.62C77.332,741.054,77.062,741.291,76.712,741.291z"/>
                <path d="M77.727,743.669v0.992h-8.006v-0.992H77.727z"/>
                <path d="M77.727,747.176v0.992h-8.006v-0.992H77.727z"/>
                <path d="M69.721,753.704l0.688-0.078v-0.034c-0.429-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.03,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.158-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.139,2.075-2.232,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V753.704z
			 M72.506,753.558c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.947,0.429-0.947,0.937c0,0.71,0.451,1.161,0.914,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H72.506z"/>
                <path d="M70.735,756.828c-0.191,0.294-0.395,0.813-0.395,1.309c0,0.722,0.361,1.06,0.812,1.06c0.474,0,0.733-0.281,1.003-1.015
			c0.35-0.981,0.891-1.443,1.545-1.443c0.879,0,1.601,0.71,1.601,1.883c0,0.553-0.158,1.038-0.338,1.342l-0.722-0.248
			c0.135-0.214,0.315-0.608,0.315-1.116c0-0.586-0.338-0.913-0.744-0.913c-0.451,0-0.654,0.327-0.925,1.037
			c-0.361,0.947-0.834,1.433-1.646,1.433c-0.958,0-1.635-0.744-1.635-2.041c0-0.598,0.146-1.15,0.372-1.534L70.735,756.828z"/>
                <path d="M77.727,770.225H71.13c-0.485,0-1.038,0.011-1.41,0.045v-0.891l0.947-0.046v-0.022c-0.609-0.305-1.071-0.97-1.071-1.86
			c0-1.319,1.116-2.334,2.774-2.334c1.815-0.012,2.932,1.116,2.932,2.446c0,0.835-0.395,1.398-0.834,1.646v0.022h3.259V770.225z
			 M72.957,769.231c0.124,0,0.293-0.011,0.417-0.045c0.632-0.146,1.15-0.688,1.15-1.432c0-1.026-0.902-1.636-2.109-1.636
			c-1.105,0-2.018,0.542-2.018,1.613c0,0.665,0.439,1.273,1.184,1.454c0.136,0.034,0.271,0.045,0.429,0.045H72.957z"/>
                <path d="M72.269,773.27c-1.342,0.022-1.895,0.879-1.895,1.871c0,0.711,0.124,1.14,0.282,1.512l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.105-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.361-0.022-0.462-0.033V773.27z M72.979,776.179c0.631,0.011,1.612-0.26,1.612-1.376c0-1.004-0.924-1.443-1.612-1.522
			V776.179z"/>
                <path d="M77.727,779.212v0.992h-8.006v-0.992H77.727z"/>
                <path d="M69.969,791.299c-0.18-0.36-0.361-1.082-0.361-2.007c0-2.143,1.353-3.755,3.845-3.755c2.379,0,3.992,1.612,3.992,3.969
			c0,0.947-0.203,1.545-0.338,1.805l-0.8-0.237c0.18-0.372,0.315-0.902,0.315-1.533c0-1.782-1.139-2.966-3.135-2.966
			c-1.86,0-3.056,1.071-3.056,2.921c0,0.598,0.124,1.206,0.316,1.601L69.969,791.299z"/>
                <path d="M77.727,793.341v0.992h-3.406v0.022c0.282,0.158,0.53,0.406,0.699,0.711c0.169,0.293,0.282,0.643,0.282,1.015
			c0,0.732-0.451,1.905-2.334,1.905h-3.248v-0.992h3.135c0.879,0,1.624-0.327,1.624-1.263c0-0.643-0.451-1.15-0.993-1.331
			c-0.135-0.056-0.282-0.067-0.474-0.067h-3.292v-0.992H77.727z"/>
                <path d="M72.495,805.383c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.083-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C75.302,804.323,74.164,805.383,72.495,805.383z M72.438,801.053c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.924,0,2.097-0.462,2.097-1.635S73.476,801.053,72.438,801.053z"/>
                <path d="M69.721,810.502l0.688-0.078v-0.034c-0.429-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.03,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.158-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.139,2.075-2.232,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V810.502z
			 M72.506,810.355c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.947,0.429-0.947,0.937c0,0.71,0.451,1.161,0.914,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H72.506z"/>
                <path d="M69.924,817.652c-0.135-0.26-0.316-0.835-0.316-1.567c0-1.646,1.116-2.718,2.785-2.718c1.68,0,2.898,1.15,2.898,2.932
			c0,0.586-0.146,1.105-0.282,1.376l-0.767-0.226c0.135-0.237,0.259-0.609,0.259-1.15c0-1.252-0.925-1.929-2.063-1.929
			c-1.263,0-2.041,0.813-2.041,1.895c0,0.564,0.146,0.937,0.271,1.218L69.924,817.652z"/>
                <path d="M72.495,824.529c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.083-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C75.302,823.47,74.164,824.529,72.495,824.529z M72.438,820.199c-1.195,0-2.098,0.688-2.098,1.658c0,0.947,0.891,1.657,2.12,1.657
			c0.924,0,2.097-0.462,2.097-1.635S73.476,820.199,72.438,820.199z"/>
                <path d="M73.476,826.628c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.733,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.011,0.191-0.034,0.282h-0.936c0.023-0.102,0.034-0.203,0.034-0.339c0-0.699-0.53-1.195-1.274-1.33
			c-0.135-0.022-0.293-0.045-0.462-0.045h-2.909v-0.981H73.476z"/>
                <path d="M73.476,831.206c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.733,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.011,0.191-0.034,0.282h-0.936c0.023-0.102,0.034-0.203,0.034-0.339c0-0.699-0.53-1.195-1.274-1.33
			c-0.135-0.022-0.293-0.045-0.462-0.045h-2.909v-0.981H73.476z"/>
                <path d="M69.721,838.704l0.688-0.078v-0.034c-0.429-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.03,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.158-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.139,2.075-2.232,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V838.704z
			 M72.506,838.558c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.947,0.429-0.947,0.937c0,0.71,0.451,1.161,0.914,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H72.506z"/>
                <path d="M77.727,841.963v0.992h-8.006v-0.992H77.727z"/>
                <path d="M76.125,850.544v-0.022l-0.688-1.274l0.755-0.191l0.857,1.602v0.846h-7.33v-0.959H76.125z"/>
                <path d="M76.125,857.175v-0.022l-0.688-1.274l0.755-0.191l0.857,1.602v0.846h-7.33v-0.959H76.125z"/>
                <path d="M75.178,862.361l-2.774,0.722c-0.609,0.158-1.172,0.305-1.736,0.406v0.033c0.552,0.124,1.139,0.305,1.725,0.485
			l2.785,0.891v0.835l-2.729,0.846c-0.654,0.202-1.229,0.36-1.782,0.484v0.034c0.552,0.09,1.127,0.236,1.771,0.417l2.74,0.778v0.98
			l-5.458-1.759v-0.902l2.605-0.834c0.609-0.192,1.15-0.35,1.793-0.485v-0.022c-0.654-0.135-1.218-0.305-1.804-0.496l-2.594-0.88
			v-0.901l5.458-1.646V862.361z"/>
                <path d="M72.111,875.61l-2.391-0.789v-1.015l7.6,2.582v1.184l-7.6,2.594v-1.049l2.391-0.812V875.61z M72.878,878.103l2.188-0.744
			c0.497-0.169,0.947-0.282,1.387-0.395v-0.022c-0.451-0.113-0.914-0.237-1.375-0.384l-2.199-0.744V878.103z"/>
                <path d="M73.701,882.061c0.564,0,1.026-0.012,1.477-0.045v0.879l-0.902,0.057v0.022c0.519,0.271,1.026,0.902,1.026,1.805
			c0,0.755-0.451,1.928-2.323,1.928h-3.259v-0.992h3.146c0.879,0,1.613-0.327,1.613-1.263c0-0.654-0.462-1.161-1.015-1.331
			c-0.124-0.045-0.293-0.067-0.462-0.067h-3.281v-0.992H73.701z"/>
                <path d="M72.269,889.718c-1.342,0.022-1.895,0.879-1.895,1.872c0,0.71,0.124,1.139,0.282,1.511l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.105-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.361-0.022-0.462-0.033V889.718z M72.979,892.627c0.631,0.011,1.612-0.26,1.612-1.376c0-1.004-0.924-1.443-1.612-1.522
			V892.627z"/>
                <path d="M75.178,896.088l-1.172,0.778c-0.305,0.203-0.586,0.372-0.891,0.553v0.034c0.327,0.18,0.609,0.36,0.902,0.541l1.161,0.767
			v1.071l-2.639-1.86l-2.819,1.917v-1.128l1.229-0.801c0.316-0.214,0.62-0.395,0.947-0.586v-0.022
			c-0.327-0.181-0.62-0.372-0.947-0.575l-1.229-0.79v-1.094l2.785,1.939l2.672-1.849V896.088z"/>
                <path d="M72.495,906.462c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.083-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C75.302,905.402,74.164,906.462,72.495,906.462z M72.438,902.132c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.924,0,2.097-0.462,2.097-1.635S73.476,902.132,72.438,902.132z"/>
                <path d="M69.721,911.48h0.609l0.755,0.777c1.782,1.872,2.729,2.718,3.834,2.729c0.744,0,1.432-0.361,1.432-1.455
			c0-0.665-0.338-1.218-0.62-1.556l0.699-0.316c0.428,0.508,0.744,1.229,0.744,2.075c0,1.579-1.083,2.244-2.131,2.244
			c-1.353,0-2.447-0.981-3.935-2.526l-0.542-0.586h-0.022v3.293h-0.823V911.48z"/>
            </g>
            <g>
                <path d="M331.152,484.632v-2.312h0.834v5.627h-0.834v-2.323h-6.766v-0.992H331.152z"/>
                <path d="M326.777,490.022l-2.391-0.789v-1.015l7.6,2.583v1.184l-7.6,2.593v-1.049l2.391-0.812V490.022z M327.544,492.515
			l2.188-0.744c0.497-0.169,0.947-0.282,1.387-0.395v-0.023c-0.451-0.113-0.914-0.237-1.375-0.383l-2.199-0.744V492.515z"/>
                <path d="M331.987,496.54v0.981h-6.777v3.248h-0.823v-4.229H331.987z"/>
                <path d="M331.987,503.283h-4.499c-1.703,0-2.424,0.756-2.424,1.771c0,1.127,0.744,1.849,2.424,1.849h4.499v0.993h-4.432
			c-2.334,0-3.292-1.229-3.292-2.875c0-1.556,0.891-2.729,3.248-2.729h4.477V503.283z"/>
                <path d="M331.885,510.443c0.09,0.598,0.158,1.308,0.158,2.086c0,1.41-0.327,2.414-0.947,3.079c-0.62,0.677-1.5,1.071-2.729,1.071
			c-1.24,0-2.255-0.383-2.954-1.094c-0.71-0.71-1.094-1.883-1.094-3.36c0-0.699,0.034-1.286,0.09-1.782H331.885z M325.165,511.424
			c-0.045,0.248-0.056,0.609-0.056,0.993c0,2.097,1.173,3.236,3.225,3.236c1.793,0.012,2.932-1.003,2.932-3.078
			c0-0.507-0.045-0.891-0.102-1.15H325.165z"/>
                <path d="M331.885,522.035c0.09,0.598,0.158,1.308,0.158,2.086c0,1.41-0.327,2.414-0.947,3.079c-0.62,0.677-1.5,1.071-2.729,1.071
			c-1.24,0-2.255-0.383-2.954-1.094c-0.71-0.71-1.094-1.883-1.094-3.36c0-0.699,0.034-1.286,0.09-1.782H331.885z M325.165,523.016
			c-0.045,0.248-0.056,0.609-0.056,0.993c0,2.097,1.173,3.236,3.225,3.236c1.793,0.012,2.932-1.003,2.932-3.078
			c0-0.507-0.045-0.891-0.102-1.15H325.165z"/>
                <path d="M327.95,534.326v-2.955h-2.74v3.293h-0.823v-4.274h7.6v4.104h-0.823v-3.124h-2.402v2.955H327.95z"/>
                <path d="M331.017,543.854c0.011-0.203,0-0.462-0.045-0.744c-0.259-1.556-1.398-2.379-2.605-2.548v0.034
			c0.462,0.35,0.846,0.958,0.846,1.771c0,1.296-0.936,2.21-2.368,2.21c-1.342,0-2.582-0.914-2.582-2.436
			c0-1.567,1.218-2.594,3.124-2.594c1.443,0,2.582,0.519,3.304,1.24c0.598,0.609,0.97,1.421,1.083,2.346
			c0.045,0.293,0.057,0.541,0.057,0.722H331.017z M326.789,543.573c1.049,0,1.68-0.598,1.68-1.511c0-0.598-0.372-1.15-0.902-1.421
			c-0.112-0.067-0.259-0.113-0.439-0.113c-1.207,0.023-2.098,0.575-2.098,1.613C325.029,542.998,325.74,543.573,326.789,543.573z"/>
                <path d="M327.725,553.055c1.06-0.056,2.334-0.124,3.281-0.113v-0.034c-0.891-0.259-1.838-0.575-2.887-0.958l-3.688-1.342v-0.744
			l3.62-1.229c1.071-0.361,2.053-0.666,2.955-0.88v-0.022c-0.947-0.022-2.221-0.079-3.36-0.146l-3.259-0.203v-0.936l7.6,0.53v1.251
			l-3.676,1.297c-0.936,0.316-1.771,0.575-2.56,0.767v0.034c0.767,0.191,1.602,0.462,2.56,0.8l3.676,1.354v1.251l-7.6,0.474v-0.958
			L327.725,553.055z"/>
                <path d="M331.885,559.798c0.09,0.429,0.158,1.105,0.158,1.793c0,0.981-0.169,1.612-0.553,2.086
			c-0.293,0.395-0.744,0.632-1.342,0.632c-0.733,0-1.376-0.485-1.669-1.286h-0.022c-0.181,0.722-0.778,1.567-1.906,1.567
			c-0.654,0-1.15-0.259-1.522-0.643c-0.485-0.53-0.71-1.387-0.71-2.627c0-0.677,0.045-1.195,0.09-1.522H331.885z M325.131,560.779
			c-0.034,0.192-0.045,0.474-0.045,0.823c0,1.015,0.372,1.951,1.477,1.951c1.038,0,1.466-0.891,1.466-1.962v-0.812H325.131z
			 M328.773,560.779v0.891c0,1.037,0.542,1.646,1.274,1.646c0.891,0,1.24-0.676,1.24-1.669c0-0.451-0.034-0.71-0.067-0.868H328.773z
			"/>
                <path d="M326.777,567.985l-2.391-0.789v-1.015l7.6,2.583v1.184l-7.6,2.593v-1.048l2.391-0.812V567.985z M327.544,570.477
			l2.188-0.744c0.497-0.169,0.947-0.282,1.387-0.395v-0.023c-0.451-0.113-0.914-0.237-1.375-0.383l-2.199-0.744V570.477z"/>
                <path d="M325.582,574.367c-0.271,0.44-0.496,1.083-0.496,1.759c0,1.003,0.53,1.59,1.297,1.59c0.71,0,1.116-0.406,1.511-1.432
			c0.44-1.24,1.083-2.007,2.154-2.007c1.184,0,2.063,0.981,2.063,2.458c0,0.778-0.18,1.342-0.372,1.68l-0.801-0.271
			c0.136-0.248,0.361-0.755,0.361-1.443c0-1.037-0.62-1.432-1.139-1.432c-0.71,0-1.06,0.462-1.466,1.511
			c-0.496,1.286-1.116,1.939-2.233,1.939c-1.172,0-2.188-0.868-2.188-2.661c0-0.733,0.214-1.534,0.485-1.939L325.582,574.367z"/>
                <path d="M327.95,584.843v-2.955h-2.74v3.293h-0.823v-4.274h7.6v4.104h-0.823v-3.124h-2.402v2.955H327.95z"/>
            </g>
            <g>
                <path d="M331.152,951.004v-2.313h0.834v5.627h-0.834v-2.322h-6.766v-0.992H331.152z"/>
                <path d="M326.777,956.394l-2.391-0.789v-1.015l7.6,2.582v1.184l-7.6,2.594V959.9l2.391-0.812V956.394z M327.544,958.886
			l2.188-0.744c0.497-0.169,0.947-0.282,1.387-0.395v-0.022c-0.451-0.113-0.914-0.237-1.375-0.384l-2.199-0.744V958.886z"/>
                <path d="M331.987,962.911v0.98h-6.777v3.248h-0.823v-4.229H331.987z"/>
                <path d="M331.987,969.654h-4.499c-1.703,0-2.424,0.756-2.424,1.771c0,1.128,0.744,1.85,2.424,1.85h4.499v0.992h-4.432
			c-2.334,0-3.292-1.229-3.292-2.876c0-1.556,0.891-2.729,3.248-2.729h4.477V969.654z"/>
                <path d="M331.885,976.815c0.09,0.598,0.158,1.308,0.158,2.086c0,1.409-0.327,2.413-0.947,3.078c-0.62,0.677-1.5,1.071-2.729,1.071
			c-1.24,0-2.255-0.384-2.954-1.094c-0.71-0.711-1.094-1.883-1.094-3.36c0-0.699,0.034-1.285,0.09-1.781H331.885z M325.165,977.796
			c-0.045,0.248-0.056,0.609-0.056,0.992c0,2.098,1.173,3.236,3.225,3.236c1.793,0.012,2.932-1.003,2.932-3.078
			c0-0.508-0.045-0.891-0.102-1.15H325.165z"/>
                <path d="M331.885,988.406c0.09,0.598,0.158,1.308,0.158,2.086c0,1.409-0.327,2.413-0.947,3.078c-0.62,0.677-1.5,1.071-2.729,1.071
			c-1.24,0-2.255-0.384-2.954-1.094c-0.71-0.711-1.094-1.883-1.094-3.36c0-0.699,0.034-1.285,0.09-1.781H331.885z M325.165,989.387
			c-0.045,0.248-0.056,0.609-0.056,0.992c0,2.098,1.173,3.236,3.225,3.236c1.793,0.012,2.932-1.003,2.932-3.078
			c0-0.508-0.045-0.891-0.102-1.15H325.165z"/>
                <path d="M327.95,1000.697v-2.954h-2.74v3.293h-0.823v-4.273h7.6v4.104h-0.823v-3.124h-2.402v2.954H327.95z"/>
                <path d="M331.017,1010.225c0.011-0.202,0-0.462-0.045-0.744c-0.259-1.556-1.398-2.379-2.605-2.548v0.033
			c0.462,0.35,0.846,0.959,0.846,1.771c0,1.297-0.936,2.211-2.368,2.211c-1.342,0-2.582-0.914-2.582-2.437
			c0-1.567,1.218-2.593,3.124-2.593c1.443,0,2.582,0.519,3.304,1.24c0.598,0.608,0.97,1.421,1.083,2.346
			c0.045,0.293,0.057,0.541,0.057,0.721H331.017z M326.789,1009.943c1.049,0,1.68-0.598,1.68-1.511c0-0.598-0.372-1.15-0.902-1.421
			c-0.112-0.068-0.259-0.113-0.439-0.113c-1.207,0.022-2.098,0.575-2.098,1.612C325.029,1009.368,325.74,1009.943,326.789,1009.943z
			"/>
                <path d="M327.725,1019.427c1.06-0.057,2.334-0.124,3.281-0.112v-0.034c-0.891-0.259-1.838-0.575-2.887-0.958l-3.688-1.342v-0.745
			l3.62-1.229c1.071-0.361,2.053-0.665,2.955-0.88v-0.022c-0.947-0.022-2.221-0.079-3.36-0.146l-3.259-0.203v-0.936l7.6,0.529v1.252
			l-3.676,1.297c-0.936,0.315-1.771,0.575-2.56,0.767v0.034c0.767,0.191,1.602,0.462,2.56,0.801l3.676,1.353v1.252l-7.6,0.474
			v-0.959L327.725,1019.427z"/>
                <path d="M331.885,1026.17c0.09,0.428,0.158,1.104,0.158,1.793c0,0.98-0.169,1.612-0.553,2.086
			c-0.293,0.395-0.744,0.631-1.342,0.631c-0.733,0-1.376-0.484-1.669-1.285h-0.022c-0.181,0.722-0.778,1.567-1.906,1.567
			c-0.654,0-1.15-0.26-1.522-0.643c-0.485-0.53-0.71-1.387-0.71-2.628c0-0.676,0.045-1.195,0.09-1.521H331.885z M325.131,1027.15
			c-0.034,0.191-0.045,0.474-0.045,0.823c0,1.015,0.372,1.951,1.477,1.951c1.038,0,1.466-0.892,1.466-1.962v-0.813H325.131z
			 M328.773,1027.15v0.891c0,1.038,0.542,1.646,1.274,1.646c0.891,0,1.24-0.677,1.24-1.669c0-0.451-0.034-0.71-0.067-0.868H328.773z
			"/>
                <path d="M326.777,1034.355l-2.391-0.789v-1.015l7.6,2.582v1.184l-7.6,2.594v-1.049l2.391-0.812V1034.355z M327.544,1036.848
			l2.188-0.744c0.497-0.169,0.947-0.282,1.387-0.395v-0.022c-0.451-0.113-0.914-0.237-1.375-0.384l-2.199-0.744V1036.848z"/>
                <path d="M325.582,1040.738c-0.271,0.439-0.496,1.082-0.496,1.759c0,1.004,0.53,1.59,1.297,1.59c0.71,0,1.116-0.405,1.511-1.432
			c0.44-1.24,1.083-2.007,2.154-2.007c1.184,0,2.063,0.98,2.063,2.458c0,0.778-0.18,1.342-0.372,1.68l-0.801-0.271
			c0.136-0.248,0.361-0.755,0.361-1.443c0-1.037-0.62-1.432-1.139-1.432c-0.71,0-1.06,0.462-1.466,1.511
			c-0.496,1.285-1.116,1.939-2.233,1.939c-1.172,0-2.188-0.868-2.188-2.661c0-0.733,0.214-1.533,0.485-1.939L325.582,1040.738z"/>
                <path d="M327.95,1051.214v-2.954h-2.74v3.293h-0.823v-4.273h7.6v4.104h-0.823v-3.124h-2.402v2.954H327.95z"/>
            </g>
            <g>
                <path d="M200.341,1168.1c-0.354,0.074-1.046,0.181-1.831,0.072c-0.881-0.122-1.574-0.446-2.069-1.068
			c-0.434-0.553-0.637-1.372-0.512-2.279c0.249-1.733,1.614-2.837,3.565-2.567c0.674,0.093,1.18,0.313,1.413,0.468l-0.266,0.588
			c-0.292-0.182-0.664-0.348-1.251-0.429c-1.415-0.195-2.461,0.558-2.662,2.017c-0.204,1.476,0.565,2.47,1.92,2.657
			c0.492,0.067,0.837,0.046,1.023-0.017l0.239-1.735l-1.184-0.163l0.084-0.604l1.917,0.265L200.341,1168.1z"/>
                <path d="M202.897,1162.867c0.391-0.025,0.94,0.007,1.458,0.078c0.803,0.111,1.3,0.329,1.618,0.707
			c0.257,0.301,0.366,0.72,0.304,1.169c-0.106,0.769-0.66,1.21-1.301,1.333l-0.003,0.025c0.426,0.217,0.637,0.669,0.692,1.292
			c0.078,0.838,0.138,1.418,0.228,1.659l-0.776-0.107c-0.072-0.178-0.133-0.696-0.197-1.443c-0.062-0.826-0.331-1.172-1.009-1.292
			l-0.708-0.098l-0.348,2.521l-0.751-0.104L202.897,1162.867z M203.282,1165.621l0.768,0.105c0.803,0.111,1.373-0.259,1.464-0.923
			c0.104-0.751-0.394-1.154-1.186-1.272c-0.363-0.05-0.627-0.052-0.753-0.033L203.282,1165.621z"/>
                <path d="M208.635,1167.645l-0.857,1.746l-0.777-0.107l2.78-5.544l0.906,0.125l1.182,6.092l-0.803-0.111l-0.369-1.915
			L208.635,1167.645z M210.622,1167.321l-0.338-1.753c-0.076-0.397-0.115-0.755-0.155-1.104l-0.018-0.002
			c-0.134,0.333-0.277,0.674-0.438,1.012l-0.803,1.604L210.622,1167.321z"/>
                <path d="M214.167,1164.425c0.467-0.006,1.019,0.018,1.614,0.1c1.078,0.149,1.812,0.506,2.255,1.051
			c0.453,0.546,0.662,1.261,0.532,2.202c-0.131,0.949-0.532,1.686-1.15,2.146c-0.619,0.468-1.557,0.638-2.687,0.481
			c-0.535-0.074-0.98-0.161-1.354-0.258L214.167,1164.425z M214.207,1169.673c0.186,0.061,0.461,0.107,0.754,0.147
			c1.605,0.222,2.602-0.556,2.819-2.126c0.198-1.37-0.458-2.351-2.046-2.569c-0.389-0.054-0.688-0.06-0.892-0.044L214.207,1169.673z
			"/>
                <path d="M220.846,1169.332l-0.857,1.746l-0.776-0.107l2.779-5.544l0.907,0.125l1.181,6.092l-0.803-0.111l-0.369-1.915
			L220.846,1169.332z M222.834,1169.009l-0.339-1.753c-0.076-0.398-0.115-0.755-0.155-1.104l-0.018-0.002
			c-0.134,0.333-0.277,0.674-0.438,1.012l-0.802,1.604L222.834,1169.009z"/>
                <path d="M225.608,1170.923c0.307,0.253,0.776,0.494,1.294,0.565c0.768,0.106,1.273-0.237,1.354-0.824
			c0.075-0.544-0.192-0.897-0.937-1.308c-0.902-0.469-1.421-1.041-1.308-1.861c0.125-0.906,0.969-1.476,2.1-1.319
			c0.595,0.082,1.007,0.28,1.246,0.463l-0.291,0.584c-0.176-0.13-0.541-0.356-1.067-0.43c-0.794-0.109-1.161,0.323-1.216,0.721
			c-0.075,0.544,0.242,0.859,1.001,1.281c0.931,0.517,1.366,1.061,1.248,1.915c-0.124,0.897-0.896,1.582-2.269,1.393
			c-0.562-0.077-1.151-0.326-1.433-0.576L225.608,1170.923z"/>
                <path d="M234.523,1167.158l-0.336,2.434l2.814,0.389l0.336-2.434l0.76,0.105l-0.804,5.816l-0.76-0.104l0.376-2.728l-2.814-0.389
			l-0.376,2.728l-0.75-0.104l0.804-5.817L234.523,1167.158z"/>
                <path d="M240.441,1172.04l-0.858,1.746l-0.776-0.107l2.78-5.545l0.906,0.126l1.182,6.092l-0.804-0.111l-0.368-1.916
			L240.441,1172.04z M242.429,1171.717l-0.338-1.754c-0.076-0.397-0.115-0.755-0.155-1.103l-0.018-0.003
			c-0.134,0.334-0.278,0.675-0.438,1.013l-0.803,1.604L242.429,1171.717z"/>
                <path d="M249.143,1174.913c-0.295,0.1-0.866,0.162-1.574,0.064c-1.64-0.227-2.73-1.434-2.467-3.341
			c0.251-1.821,1.657-2.885,3.46-2.636c0.725,0.101,1.161,0.319,1.345,0.45l-0.266,0.588c-0.266-0.178-0.657-0.337-1.14-0.404
			c-1.363-0.188-2.39,0.559-2.602,2.086c-0.196,1.424,0.497,2.452,1.912,2.648c0.458,0.063,0.937,0.032,1.259-0.072
			L249.143,1174.913z"/>
                <path d="M252.262,1169.609l-0.804,5.817l-0.751-0.104l0.804-5.817L252.262,1169.609z"/>
                <path d="M254.613,1173.998l-0.857,1.746l-0.777-0.107l2.78-5.544l0.906,0.125l1.182,6.092l-0.803-0.111l-0.369-1.915
			L254.613,1173.998z M256.601,1173.675l-0.338-1.753c-0.076-0.398-0.115-0.755-0.155-1.104l-0.018-0.002
			c-0.134,0.333-0.277,0.674-0.438,1.012l-0.803,1.604L256.601,1173.675z"/>
                <path d="M195.639,1176.41l-0.857,1.746l-0.776-0.107l2.78-5.544l0.906,0.125l1.182,6.092l-0.804-0.11l-0.368-1.916
			L195.639,1176.41z M197.627,1176.087l-0.339-1.753c-0.076-0.397-0.115-0.755-0.155-1.104l-0.017-0.003
			c-0.135,0.334-0.278,0.675-0.439,1.013l-0.802,1.604L197.627,1176.087z"/>
                <path d="M201.171,1173.19c0.391-0.025,0.94,0.007,1.458,0.078c0.803,0.111,1.3,0.329,1.617,0.707
			c0.258,0.3,0.367,0.72,0.306,1.168c-0.106,0.769-0.66,1.211-1.301,1.333l-0.003,0.026c0.426,0.217,0.637,0.668,0.691,1.292
			c0.078,0.837,0.139,1.417,0.229,1.658l-0.776-0.107c-0.072-0.177-0.133-0.695-0.198-1.443c-0.061-0.826-0.33-1.171-1.008-1.291
			l-0.708-0.098l-0.348,2.52l-0.751-0.104L201.171,1173.19z M201.556,1175.943l0.768,0.106c0.803,0.111,1.373-0.259,1.464-0.924
			c0.104-0.75-0.394-1.154-1.187-1.271c-0.362-0.051-0.627-0.052-0.752-0.034L201.556,1175.943z"/>
                <path d="M209.062,1177.351l-2.262-0.313l-0.29,2.097l2.521,0.349l-0.087,0.63l-3.271-0.452l0.804-5.817l3.143,0.435l-0.087,0.63
			l-2.392-0.33l-0.254,1.839l2.262,0.313L209.062,1177.351z"/>
                <path d="M211.763,1178.638l-0.858,1.747l-0.776-0.107l2.78-5.545l0.906,0.126l1.182,6.092l-0.803-0.111l-0.368-1.916
			L211.763,1178.638z M213.75,1178.315l-0.338-1.754c-0.077-0.397-0.116-0.755-0.155-1.104l-0.018-0.002
			c-0.134,0.333-0.278,0.674-0.438,1.012l-0.803,1.605L213.75,1178.315z"/>
                <path d="M219.947,1181.634l-1.096-6.079l0.811,0.111l0.51,2.99c0.143,0.82,0.261,1.558,0.322,2.262l0.017,0.002
			c0.257-0.65,0.601-1.351,0.964-2.074l1.38-2.738l0.803,0.111l-2.884,5.529L219.947,1181.634z"/>
                <path d="M227.524,1179.901l-2.262-0.313l-0.29,2.098l2.521,0.348l-0.087,0.631l-3.271-0.452l0.804-5.817l3.142,0.435l-0.087,0.63
			l-2.392-0.33l-0.254,1.838l2.262,0.313L227.524,1179.901z"/>
                <path d="M229.825,1177.149c0.391-0.024,0.94,0.007,1.458,0.079c0.803,0.11,1.3,0.328,1.618,0.706
			c0.257,0.3,0.366,0.721,0.305,1.169c-0.106,0.769-0.66,1.21-1.301,1.333l-0.003,0.026c0.428,0.217,0.637,0.668,0.692,1.291
			c0.077,0.838,0.138,1.418,0.228,1.659l-0.776-0.107c-0.072-0.177-0.133-0.695-0.197-1.443c-0.062-0.826-0.331-1.172-1.009-1.291
			l-0.708-0.099l-0.348,2.521l-0.751-0.104L229.825,1177.149z M230.21,1179.903l0.768,0.106c0.804,0.11,1.374-0.26,1.465-0.924
			c0.104-0.751-0.395-1.154-1.187-1.272c-0.363-0.05-0.627-0.051-0.753-0.034L230.21,1179.903z"/>
                <path d="M235.12,1177.881c0.467-0.005,1.018,0.019,1.613,0.101c1.079,0.149,1.813,0.506,2.255,1.051
			c0.453,0.546,0.662,1.261,0.532,2.201c-0.131,0.949-0.531,1.686-1.15,2.146c-0.618,0.469-1.557,0.639-2.687,0.482
			c-0.534-0.074-0.98-0.162-1.354-0.258L235.12,1177.881z M235.159,1183.129c0.187,0.062,0.461,0.107,0.754,0.148
			c1.605,0.222,2.602-0.556,2.819-2.126c0.198-1.371-0.458-2.351-2.046-2.57c-0.388-0.054-0.688-0.06-0.892-0.043L235.159,1183.129z
			"/>
                <path d="M244.115,1182.194l-2.262-0.313l-0.29,2.097l2.521,0.349l-0.087,0.63l-3.271-0.452l0.804-5.817l3.143,0.435l-0.087,0.63
			l-2.392-0.33l-0.254,1.839l2.262,0.313L244.115,1182.194z"/>
            </g>
            <g>
                <path d="M965.994,1790.057l7.601-2.48v1.061l-3.744,1.184c-1.026,0.327-1.951,0.609-2.842,0.812v0.022
			c0.88,0.215,1.838,0.53,2.83,0.869l3.756,1.285v1.049l-7.601-2.718V1790.057z"/>
                <path d="M965.994,1795.313h5.458v0.992h-5.458V1795.313z M972.985,1796.418c-0.338,0.011-0.608-0.237-0.608-0.632
			c0-0.35,0.271-0.598,0.608-0.598c0.35,0,0.62,0.259,0.62,0.62C973.605,1796.181,973.335,1796.418,972.985,1796.418z"/>
                <path d="M974,1798.796v0.992h-8.006v-0.992H974z"/>
                <path d="M974,1802.303v0.992h-8.006v-0.992H974z"/>
                <path d="M965.994,1808.831l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V1808.831z
			 M968.779,1808.685c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H968.779z"/>
                <path d="M967.009,1811.955c-0.191,0.294-0.395,0.813-0.395,1.309c0,0.722,0.361,1.06,0.812,1.06c0.474,0,0.733-0.281,1.004-1.015
			c0.35-0.981,0.891-1.443,1.545-1.443c0.88,0,1.602,0.71,1.602,1.883c0,0.553-0.158,1.038-0.339,1.342l-0.722-0.248
			c0.136-0.214,0.316-0.608,0.316-1.116c0-0.586-0.339-0.913-0.744-0.913c-0.451,0-0.654,0.327-0.925,1.037
			c-0.361,0.947-0.835,1.433-1.646,1.433c-0.959,0-1.635-0.744-1.635-2.041c0-0.598,0.146-1.15,0.372-1.534L967.009,1811.955z"/>
                <path d="M974,1825.352h-6.597c-0.484,0-1.037,0.011-1.409,0.045v-0.891l0.947-0.046v-0.022c-0.609-0.305-1.071-0.97-1.071-1.86
			c0-1.319,1.116-2.334,2.774-2.334c1.815-0.012,2.932,1.116,2.932,2.446c0,0.835-0.395,1.398-0.835,1.646v0.022H974V1825.352z
			 M969.23,1824.358c0.124,0,0.293-0.011,0.417-0.045c0.632-0.146,1.15-0.688,1.15-1.432c0-1.026-0.902-1.636-2.108-1.636
			c-1.105,0-2.019,0.542-2.019,1.613c0,0.665,0.439,1.273,1.184,1.454c0.136,0.034,0.271,0.045,0.429,0.045H969.23z"/>
                <path d="M968.543,1828.396c-1.342,0.022-1.895,0.879-1.895,1.871c0,0.711,0.124,1.14,0.281,1.512l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.104-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.36-0.022-0.462-0.033V1828.396z M969.253,1831.306c0.632,0.011,1.612-0.26,1.612-1.376
			c0-1.004-0.925-1.443-1.612-1.522V1831.306z"/>
                <path d="M974,1834.339v0.992h-8.006v-0.992H974z"/>
                <path d="M966.242,1846.426c-0.181-0.36-0.36-1.082-0.36-2.007c0-2.143,1.353-3.755,3.845-3.755c2.379,0,3.992,1.612,3.992,3.969
			c0,0.947-0.203,1.545-0.339,1.805l-0.801-0.237c0.181-0.372,0.316-0.902,0.316-1.533c0-1.782-1.14-2.966-3.135-2.966
			c-1.861,0-3.057,1.071-3.057,2.921c0,0.598,0.124,1.206,0.316,1.601L966.242,1846.426z"/>
                <path d="M974,1848.468v0.992h-3.405v0.022c0.282,0.158,0.53,0.406,0.699,0.711c0.169,0.293,0.282,0.643,0.282,1.015
			c0,0.732-0.451,1.905-2.334,1.905h-3.248v-0.992h3.135c0.88,0,1.624-0.327,1.624-1.263c0-0.643-0.451-1.15-0.992-1.331
			c-0.136-0.056-0.282-0.067-0.474-0.067h-3.293v-0.992H974z"/>
                <path d="M968.769,1860.51c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C971.576,1859.45,970.437,1860.51,968.769,1860.51z M968.712,1856.18c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S969.749,1856.18,968.712,1856.18z"/>
                <path d="M965.994,1865.629l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V1865.629z
			 M968.779,1865.482c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H968.779z"/>
                <path d="M966.197,1872.779c-0.136-0.26-0.315-0.835-0.315-1.567c0-1.646,1.116-2.718,2.785-2.718c1.68,0,2.897,1.15,2.897,2.932
			c0,0.586-0.146,1.105-0.282,1.376l-0.767-0.226c0.136-0.237,0.26-0.609,0.26-1.15c0-1.252-0.925-1.929-2.063-1.929
			c-1.263,0-2.041,0.813-2.041,1.895c0,0.564,0.146,0.937,0.271,1.218L966.197,1872.779z"/>
                <path d="M968.769,1879.656c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C971.576,1878.597,970.437,1879.656,968.769,1879.656z M968.712,1875.326c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S969.749,1875.326,968.712,1875.326z"/>
                <path d="M969.749,1881.755c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.045-0.463-0.045h-2.909v-0.981H969.749z"/>
                <path d="M969.749,1886.333c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.045-0.463-0.045h-2.909v-0.981H969.749z"/>
                <path d="M965.994,1893.831l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V1893.831z
			 M968.779,1893.685c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H968.779z"/>
                <path d="M974,1897.09v0.992h-8.006v-0.992H974z"/>
                <path d="M972.399,1905.671v-0.022l-0.688-1.274l0.756-0.191l0.856,1.602v0.846h-7.329v-0.959H972.399z"/>
                <path d="M969.738,1915.02c-2.492,0-3.868-0.925-3.868-2.549c0-1.432,1.342-2.401,3.767-2.424c2.458,0,3.811,1.06,3.811,2.548
			C973.447,1914.14,972.072,1915.02,969.738,1915.02z M969.625,1911.039c-1.905,0-2.988,0.586-2.988,1.488
			c0,1.015,1.185,1.5,3.056,1.5c1.805,0,2.988-0.463,2.988-1.488C972.681,1911.67,971.621,1911.039,969.625,1911.039z"/>
            </g>
            <g>
                <path d="M965.994,900.846l7.601-2.481v1.061l-3.744,1.184c-1.026,0.327-1.951,0.609-2.842,0.812v0.022
			c0.88,0.215,1.838,0.53,2.83,0.869l3.756,1.285v1.049l-7.601-2.718V900.846z"/>
                <path d="M965.994,906.101h5.458v0.992h-5.458V906.101z M972.985,907.206c-0.338,0.011-0.608-0.237-0.608-0.632
			c0-0.35,0.271-0.598,0.608-0.598c0.35,0,0.62,0.259,0.62,0.62C973.605,906.969,973.335,907.206,972.985,907.206z"/>
                <path d="M974,909.584v0.992h-8.006v-0.992H974z"/>
                <path d="M974,913.091v0.992h-8.006v-0.992H974z"/>
                <path d="M965.994,919.619l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V919.619z
			 M968.779,919.473c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H968.779z"/>
                <path d="M967.009,922.743c-0.191,0.294-0.395,0.813-0.395,1.309c0,0.722,0.361,1.06,0.812,1.06c0.474,0,0.733-0.281,1.004-1.015
			c0.35-0.981,0.891-1.443,1.545-1.443c0.88,0,1.602,0.71,1.602,1.883c0,0.553-0.158,1.038-0.339,1.342l-0.722-0.248
			c0.136-0.214,0.316-0.608,0.316-1.116c0-0.586-0.339-0.913-0.744-0.913c-0.451,0-0.654,0.327-0.925,1.037
			c-0.361,0.947-0.835,1.433-1.646,1.433c-0.959,0-1.635-0.744-1.635-2.041c0-0.598,0.146-1.15,0.372-1.534L967.009,922.743z"/>
                <path d="M974,936.14h-6.597c-0.484,0-1.037,0.011-1.409,0.045v-0.892l0.947-0.045v-0.022c-0.609-0.305-1.071-0.97-1.071-1.86
			c0-1.319,1.116-2.334,2.774-2.334c1.815-0.012,2.932,1.116,2.932,2.446c0,0.835-0.395,1.398-0.835,1.646v0.022H974V936.14z
			 M969.23,935.146c0.124,0,0.293-0.011,0.417-0.045c0.632-0.146,1.15-0.688,1.15-1.432c0-1.026-0.902-1.636-2.108-1.636
			c-1.105,0-2.019,0.542-2.019,1.613c0,0.665,0.439,1.273,1.184,1.454c0.136,0.034,0.271,0.045,0.429,0.045H969.23z"/>
                <path d="M968.543,939.185c-1.342,0.022-1.895,0.879-1.895,1.872c0,0.71,0.124,1.139,0.281,1.511l-0.71,0.169
			c-0.158-0.35-0.338-0.947-0.338-1.815c0-1.681,1.104-2.684,2.751-2.684s2.943,0.97,2.943,2.56c0,1.781-1.567,2.255-2.571,2.255
			c-0.203,0-0.36-0.022-0.462-0.033V939.185z M969.253,942.094c0.632,0.011,1.612-0.26,1.612-1.376c0-1.004-0.925-1.443-1.612-1.522
			V942.094z"/>
                <path d="M974,945.127v0.992h-8.006v-0.992H974z"/>
                <path d="M966.242,957.214c-0.181-0.36-0.36-1.082-0.36-2.007c0-2.143,1.353-3.755,3.845-3.755c2.379,0,3.992,1.612,3.992,3.969
			c0,0.947-0.203,1.545-0.339,1.805l-0.801-0.237c0.181-0.372,0.316-0.902,0.316-1.533c0-1.782-1.14-2.966-3.135-2.966
			c-1.861,0-3.057,1.071-3.057,2.921c0,0.598,0.124,1.206,0.316,1.601L966.242,957.214z"/>
                <path d="M974,959.256v0.992h-3.405v0.022c0.282,0.158,0.53,0.406,0.699,0.711c0.169,0.293,0.282,0.643,0.282,1.015
			c0,0.732-0.451,1.905-2.334,1.905h-3.248v-0.992h3.135c0.88,0,1.624-0.327,1.624-1.263c0-0.643-0.451-1.15-0.992-1.331
			c-0.136-0.056-0.282-0.067-0.474-0.067h-3.293v-0.992H974z"/>
                <path d="M968.769,971.298c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C971.576,970.238,970.437,971.298,968.769,971.298z M968.712,966.968c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S969.749,966.968,968.712,966.968z"/>
                <path d="M965.994,976.417l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V976.417z
			 M968.779,976.271c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H968.779z"/>
                <path d="M966.197,983.567c-0.136-0.26-0.315-0.835-0.315-1.567c0-1.646,1.116-2.718,2.785-2.718c1.68,0,2.897,1.15,2.897,2.932
			c0,0.586-0.146,1.105-0.282,1.376l-0.767-0.226c0.136-0.237,0.26-0.609,0.26-1.15c0-1.252-0.925-1.929-2.063-1.929
			c-1.263,0-2.041,0.813-2.041,1.895c0,0.564,0.146,0.937,0.271,1.218L966.197,983.567z"/>
                <path d="M968.769,990.444c-2.019,0-2.898-1.397-2.898-2.717c0-1.478,1.082-2.616,2.808-2.616c1.827,0,2.898,1.195,2.898,2.706
			C971.576,989.385,970.437,990.444,968.769,990.444z M968.712,986.114c-1.195,0-2.098,0.688-2.098,1.658
			c0,0.947,0.891,1.657,2.12,1.657c0.925,0,2.098-0.462,2.098-1.635S969.749,986.114,968.712,986.114z"/>
                <path d="M969.749,992.543c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.046-0.463-0.046h-2.909v-0.98H969.749z"/>
                <path d="M969.749,997.121c0.643,0,1.195-0.012,1.703-0.045v0.868l-1.071,0.033v0.046c0.732,0.248,1.195,0.846,1.195,1.511
			c0,0.112-0.012,0.191-0.034,0.282h-0.936c0.022-0.102,0.033-0.203,0.033-0.339c0-0.699-0.529-1.195-1.273-1.33
			c-0.136-0.022-0.294-0.046-0.463-0.046h-2.909v-0.98H969.749z"/>
                <path d="M965.994,1004.619l0.688-0.078v-0.034c-0.428-0.305-0.812-0.891-0.812-1.669c0-1.105,0.778-1.669,1.567-1.669
			c1.319,0,2.041,1.173,2.029,3.281h0.113c0.451,0,1.263-0.124,1.263-1.24c0-0.507-0.157-1.037-0.406-1.421l0.654-0.226
			c0.293,0.451,0.485,1.105,0.485,1.793c0,1.669-1.14,2.075-2.233,2.075h-2.041c-0.474,0-0.936,0.022-1.308,0.09V1004.619z
			 M968.779,1004.473c0.022-1.082-0.169-2.312-1.229-2.312c-0.643,0-0.946,0.429-0.946,0.937c0,0.71,0.45,1.161,0.913,1.319
			c0.102,0.033,0.214,0.056,0.315,0.056H968.779z"/>
                <path d="M974,1007.878v0.992h-8.006v-0.992H974z"/>
                <path d="M972.399,1016.459v-0.022l-0.688-1.274l0.756-0.191l0.856,1.602v0.846h-7.329v-0.959H972.399z"/>
                <path d="M969.738,1025.808c-2.492,0-3.868-0.925-3.868-2.549c0-1.432,1.342-2.401,3.767-2.424c2.458,0,3.811,1.06,3.811,2.548
			C973.447,1024.928,972.072,1025.808,969.738,1025.808z M969.625,1021.827c-1.905,0-2.988,0.586-2.988,1.488
			c0,1.015,1.185,1.5,3.056,1.5c1.805,0,2.988-0.463,2.988-1.488C972.681,1022.458,971.621,1021.827,969.625,1021.827z"/>
            </g>
            <g>
                <path d="M680.956,1365.544l-5.03-1.661v-2.136l15.992,5.434v2.492l-15.992,5.457v-2.207l5.03-1.708V1365.544z M682.569,1370.788
			l4.604-1.566c1.044-0.356,1.993-0.593,2.918-0.83v-0.048c-0.949-0.237-1.922-0.498-2.895-0.807l-4.627-1.566V1370.788z"/>
                <path d="M683.827,1379.116c1.353,0,2.515-0.024,3.583-0.096v1.827l-2.255,0.071v0.095c1.543,0.522,2.516,1.78,2.516,3.18
			c0,0.237-0.023,0.403-0.071,0.594h-1.97c0.048-0.214,0.071-0.428,0.071-0.712c0-1.472-1.115-2.516-2.681-2.8
			c-0.285-0.048-0.617-0.096-0.973-0.096h-6.122v-2.063H683.827z"/>
                <path d="M681.288,1389.58c-2.823,0.048-3.986,1.851-3.986,3.939c0,1.494,0.261,2.396,0.594,3.179l-1.495,0.356
			c-0.332-0.735-0.712-1.993-0.712-3.82c0-3.535,2.325-5.647,5.789-5.647c3.465,0,6.193,2.041,6.193,5.387
			c0,3.749-3.298,4.745-5.41,4.745c-0.427,0-0.759-0.048-0.973-0.071V1389.58z M682.783,1395.702
			c1.328,0.023,3.393-0.546,3.393-2.895c0-2.112-1.945-3.037-3.393-3.203V1395.702z"/>
                <path d="M675.926,1408.442l1.447-0.166v-0.071c-0.901-0.641-1.708-1.874-1.708-3.512c0-2.325,1.637-3.512,3.298-3.512
			c2.776,0,4.295,2.468,4.271,6.905h0.237c0.949,0,2.658-0.261,2.658-2.61c0-1.067-0.332-2.183-0.854-2.989l1.376-0.475
			c0.617,0.949,1.021,2.325,1.021,3.772c0,3.512-2.396,4.366-4.698,4.366h-4.295c-0.996,0-1.969,0.047-2.752,0.189V1408.442z
			 M681.786,1408.134c0.048-2.277-0.355-4.863-2.586-4.863c-1.353,0-1.993,0.901-1.993,1.969c0,1.495,0.949,2.444,1.922,2.776
			c0.214,0.071,0.451,0.118,0.664,0.118H681.786z"/>
                <path d="M663.231,1362.958c0.214,1.044,0.333,2.538,0.333,3.962c0,2.207-0.403,3.631-1.306,4.627
			c-0.712,0.807-1.803,1.258-3.037,1.258c-2.111,0-3.512-1.329-4.081-3.014h-0.071c-0.427,1.234-1.565,1.97-3.227,2.349
			c-2.23,0.522-3.772,0.902-4.39,1.234v-2.136c0.451-0.261,1.827-0.617,3.82-1.067c2.206-0.475,3.037-1.329,3.108-3.203v-1.946
			h-6.929v-2.063H663.231z M655.947,1365.021v2.112c0,2.206,1.21,3.606,3.037,3.606c2.064,0,2.966-1.495,2.99-3.678
			c0-0.997-0.096-1.708-0.19-2.041H655.947z"/>
                <path d="M652.815,1378.688c-2.823,0.048-3.986,1.851-3.986,3.938c0,1.495,0.261,2.396,0.594,3.18l-1.495,0.356
			c-0.332-0.735-0.712-1.993-0.712-3.82c0-3.535,2.325-5.647,5.789-5.647c3.465,0,6.193,2.041,6.193,5.387
			c0,3.749-3.298,4.745-5.41,4.745c-0.427,0-0.759-0.048-0.973-0.071V1378.688z M654.311,1384.811
			c1.328,0.023,3.393-0.546,3.393-2.895c0-2.112-1.945-3.037-3.393-3.203V1384.811z"/>
                <path d="M647.88,1399.379c-0.284-0.546-0.664-1.756-0.664-3.298c0-3.465,2.349-5.719,5.86-5.719c3.536,0,6.099,2.421,6.099,6.169
			c0,1.234-0.309,2.326-0.594,2.896l-1.613-0.475c0.285-0.498,0.546-1.281,0.546-2.421c0-2.633-1.945-4.057-4.342-4.057
			c-2.658,0-4.295,1.708-4.295,3.986c0,1.186,0.309,1.969,0.569,2.563L647.88,1399.379z"/>
                <path d="M655.354,1403.603c1.353,0,2.515-0.024,3.583-0.096v1.827l-2.255,0.071v0.095c1.543,0.522,2.516,1.78,2.516,3.18
			c0,0.237-0.023,0.403-0.071,0.594h-1.97c0.048-0.214,0.071-0.428,0.071-0.712c0-1.472-1.115-2.516-2.681-2.8
			c-0.285-0.048-0.617-0.096-0.973-0.096h-6.122v-2.063H655.354z"/>
                <path d="M652.815,1414.065c-2.823,0.048-3.986,1.851-3.986,3.938c0,1.495,0.261,2.396,0.594,3.18l-1.495,0.356
			c-0.332-0.735-0.712-1.993-0.712-3.82c0-3.535,2.325-5.647,5.789-5.647c3.465,0,6.193,2.041,6.193,5.387
			c0,3.749-3.298,4.745-5.41,4.745c-0.427,0-0.759-0.048-0.973-0.071V1414.065z M654.311,1420.188
			c1.328,0.023,3.393-0.546,3.393-2.895c0-2.112-1.945-3.037-3.393-3.203V1420.188z"/>
                <path d="M647.453,1432.929l1.447-0.166v-0.071c-0.901-0.641-1.708-1.874-1.708-3.512c0-2.325,1.637-3.512,3.298-3.512
			c2.776,0,4.295,2.468,4.271,6.905h0.237c0.949,0,2.658-0.261,2.658-2.61c0-1.067-0.332-2.183-0.854-2.989l1.376-0.475
			c0.617,0.949,1.021,2.325,1.021,3.772c0,3.512-2.396,4.366-4.698,4.366h-4.295c-0.996,0-1.969,0.047-2.752,0.189V1432.929z
			 M653.313,1432.62c0.048-2.277-0.355-4.863-2.586-4.863c-1.353,0-1.993,0.901-1.993,1.969c0,1.495,0.949,2.444,1.922,2.776
			c0.214,0.071,0.451,0.118,0.664,0.118H653.313z"/>
                <path d="M662.235,1442.206h-3.298v2.99h-1.59v-2.99h-6.193c-1.424,0-2.23,0.403-2.23,1.566c0,0.546,0.071,0.949,0.143,1.21
			l-1.565,0.095c-0.166-0.403-0.285-1.044-0.285-1.851c0-0.973,0.309-1.756,0.878-2.254c0.617-0.594,1.637-0.807,2.989-0.807h6.265
			v-1.78h1.59v1.78h2.752L662.235,1442.206z"/>
                <path d="M647.453,1449.324h11.484v2.088h-11.484V1449.324z M662.164,1451.649c-0.712,0.023-1.281-0.498-1.281-1.329
			c0-0.735,0.569-1.258,1.281-1.258c0.735,0,1.305,0.546,1.305,1.306C663.469,1451.151,662.899,1451.649,662.164,1451.649z"/>
                <path d="M658.938,1457.463l-6.454,2.254c-1.044,0.38-1.993,0.688-2.942,0.926v0.07c0.949,0.262,1.898,0.594,2.942,0.974
			l6.454,2.23v2.183l-11.484-4.509v-1.993l11.484-4.365V1457.463z"/>
                <path d="M647.453,1476.111l1.447-0.166v-0.071c-0.901-0.641-1.708-1.874-1.708-3.512c0-2.325,1.637-3.512,3.298-3.512
			c2.776,0,4.295,2.468,4.271,6.905h0.237c0.949,0,2.658-0.261,2.658-2.61c0-1.067-0.332-2.183-0.854-2.989l1.376-0.475
			c0.617,0.949,1.021,2.325,1.021,3.772c0,3.512-2.396,4.366-4.698,4.366h-4.295c-0.996,0-1.969,0.047-2.752,0.189V1476.111z
			 M653.313,1475.803c0.048-2.277-0.355-4.863-2.586-4.863c-1.353,0-1.993,0.901-1.993,1.969c0,1.495,0.949,2.444,1.922,2.776
			c0.214,0.071,0.451,0.118,0.664,0.118H653.313z"/>
            </g>
            <g>
                <path d="M685.677,1259.582c0.921-0.018,2.347,0.109,3.769,0.381c2.027,0.388,3.265,0.986,4.093,1.966
			c0.7,0.762,1.012,1.787,0.775,3.022c-0.289,1.515-1.545,2.652-3.315,2.941l-0.01,0.047c1.421,0.657,2.934,2.228,2.488,4.558
			c-0.258,1.352-0.99,2.274-1.929,2.893c-1.287,0.793-3.147,0.921-5.711,0.432c-1.398-0.267-2.453-0.565-3.111-0.788
			L685.677,1259.582z M685.038,1273.93c0.383,0.146,0.962,0.279,1.684,0.418c2.099,0.4,4.179,0.001,4.615-2.284
			c0.409-2.144-1.263-3.381-3.477-3.804l-1.679-0.32L685.038,1273.93z M686.476,1266.401l1.842,0.352
			c2.144,0.409,3.616-0.469,3.905-1.983c0.352-1.842-0.909-2.831-2.96-3.223c-0.933-0.178-1.48-0.211-1.821-0.203L686.476,1266.401z
			"/>
                <path d="M708.423,1274.047c-0.796,4.172-4.034,5.438-6.761,4.917c-3.054-0.583-4.979-3.27-4.299-6.836
			c0.721-3.775,3.614-5.518,6.737-4.921C707.34,1267.825,709.082,1270.598,708.423,1274.047z M699.452,1272.454
			c-0.472,2.471,0.593,4.606,2.597,4.989c1.958,0.374,3.778-1.188,4.264-3.728c0.364-1.911-0.129-4.518-2.553-4.98
			C701.336,1268.273,699.861,1270.31,699.452,1272.454z"/>
                <path d="M721.689,1279.334c-0.223,1.165-0.395,2.194-0.495,3.094l-1.817-0.347l0.234-1.863l-0.046-0.009
			c-0.709,0.806-2.125,1.768-4.13,1.385c-1.771-0.338-3.705-1.722-2.948-5.684l1.26-6.596l2.051,0.392l-1.192,6.246
			c-0.41,2.144-0.033,3.714,1.831,4.069c1.375,0.263,2.514-0.51,3.059-1.348c0.176-0.281,0.317-0.641,0.388-1.014l1.322-6.922
			l2.051,0.392L721.689,1279.334z"/>
                <path d="M729.413,1266.846l2.051,0.393l-3.16,16.547l-2.051-0.391L729.413,1266.846z"/>
                <path d="M735.648,1279.729c-0.482,2.782,1.07,4.264,3.121,4.654c1.469,0.281,2.402,0.193,3.234,0.014l0.069,1.535
			c-0.784,0.188-2.091,0.325-3.886-0.018c-3.473-0.663-5.111-3.343-4.461-6.745c0.649-3.403,3.166-5.7,6.452-5.073
			c3.683,0.703,4.043,4.13,3.646,6.204c-0.08,0.419-0.19,0.736-0.253,0.942L735.648,1279.729z M741.941,1279.408
			c0.273-1.301,0.101-3.435-2.206-3.875c-2.075-0.396-3.349,1.342-3.783,2.731L741.941,1279.408z"/>
                <path d="M749.872,1276.213l1.003,6.762c0.178,1.097,0.303,2.087,0.357,3.064l0.068,0.013c0.437-0.884,0.94-1.753,1.51-2.708
			l3.4-5.921l2.145,0.41l-6.583,10.435l-1.958-0.374l-2.134-12.1L749.872,1276.213z"/>
                <path d="M766.035,1290.991l0.108-1.453l-0.07-0.014c-0.798,0.766-2.161,1.327-3.77,1.02c-2.284-0.437-3.142-2.267-2.83-3.898
			c0.521-2.727,3.229-3.755,7.583-2.9l0.045-0.232c0.178-0.933,0.242-2.659-2.065-3.1c-1.049-0.2-2.207-0.083-3.097,0.278
			l-0.209-1.44c1.049-0.429,2.476-0.566,3.897-0.295c3.449,0.658,3.84,3.173,3.408,5.434l-0.806,4.218
			c-0.188,0.979-0.323,1.943-0.331,2.739L766.035,1290.991z M766.831,1285.176c-2.228-0.474-4.843-0.563-5.262,1.629
			c-0.254,1.328,0.511,2.126,1.56,2.326c1.469,0.281,2.579-0.474,3.088-1.366c0.11-0.197,0.2-0.421,0.24-0.631L766.831,1285.176z"/>
                <path d="M774.253,1284.516c0.254-1.328,0.447-2.475,0.578-3.537l1.794,0.343l-0.353,2.228l0.093,0.018
			c0.803-1.417,2.221-2.136,3.596-1.874c0.232,0.045,0.392,0.1,0.57,0.182l-0.37,1.935c-0.201-0.087-0.406-0.15-0.686-0.204
			c-1.445-0.276-2.68,0.624-3.253,2.108c-0.101,0.271-0.21,0.589-0.276,0.938l-1.148,6.013l-2.027-0.387L774.253,1284.516z"/>
                <path d="M794.81,1279.334l-2.604,13.635c-0.191,1.002-0.387,2.148-0.464,2.932l-1.842-0.353l0.281-1.976l-0.046-0.009
			c-0.87,1.139-2.428,1.832-4.269,1.48c-2.728-0.521-4.385-3.229-3.73-6.655c0.693-3.757,3.465-5.619,6.215-5.094
			c1.725,0.33,2.735,1.367,3.073,2.375l0.048,0.009l1.286-6.736L794.81,1279.334z M790.876,1288.802
			c0.049-0.257,0.092-0.61,0.07-0.881c-0.053-1.363-0.967-2.648-2.505-2.942c-2.121-0.404-3.735,1.22-4.211,3.713
			c-0.437,2.284,0.321,4.386,2.535,4.809c1.375,0.262,2.807-0.406,3.473-1.873c0.124-0.267,0.202-0.541,0.264-0.868
			L790.876,1288.802z"/>
            </g>
        </g>
</svg>


<!--SVG MAP END-->


</div> <!-- /container -->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tituloModal">Control de disponibilidad</h4>
            </div>
            <div class="modal-body" style="background-color: #3fb3ff">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Vendedor</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Vendedor" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Proyecto</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Proyecto 1" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Casa No. <span id="ctrFormCaasaNoLabelNumber"></span> </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="ctrFormCaasaNoInput" placeholder="Casa" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Estado de la casa</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ctrFormCasaEstadoSelect">
                                <option value="disponible">Disponible</option>
                                <option value="ocupado">Ocupado</option>
                            </select>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success" id="ctrFormGauardarBtn">Guardar</button>
            </div>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {

function dbStateChanger(casaNo, estado){

    $.ajax({
        method: "POST",
        url: "includes/dbHelper.php",
        data: { casaNo: casaNo, estado: estado }
    })
        .done(function( html ) {
            console.log(html);
            if(html== 'ok'){
                location.reload();
            }

            $( "#results" ).append( html );
        });
}

function toggleState (AttrColor){

    switch (AttrColor) {
        case "#4BD609":
            AttrColor = "#D8D8D8";
            break;
        case "#FFFFFF":
            AttrColor = "#4BD609";
            break;
        case "#D8D8D8":
            AttrColor = "#4BD609";
            break;
    }

   return AttrColor;
}



    $(".casa").click(function() {
        $("#myModal").modal(open);
        var AttrColor = $(this).attr( "fill");
        newColor = toggleState(AttrColor);
        $(this).attr( "fill", newColor );

    });

    /*$(".casa").click(function() {
        // obtenemos y mostramos el numero de la casa
        var idCasa = $(this).attr("id");
        $("#myModal #tituloModal").html('Casa número '+idCasa);
        $("#ctrFormCaasaNoInput").val(idCasa);

        //Obtenemos y mostramos el estado de la casa
        var estadoCasa = $(this).attr("estado");
        $("#ctrFormCasaEstadoSelect").val(estadoCasa);
        console.log(estadoCasa);
        $("#myModal").modal(open);
        var AttrColor = $(this).attr( "fill");
        newColor = toggleState(AttrColor);

       //$(this).attr( "fill", newColor );

    });*/
    $("#ctrFormGauardarBtn").click(function() {

        var inputIdCasa = $("#ctrFormCaasaNoInput").val();
        var inputEstadoCasa = $("#ctrFormCasaEstadoSelect").val();
        dbStateChanger(inputIdCasa, inputEstadoCasa);

    });

});


</script>
</body>
</html>
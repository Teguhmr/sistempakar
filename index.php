<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MyWebsite</title>

        <link href="style/ganjil.css" type="text/css" rel="stylesheet"/>
    </head>

    <body>
        <div id="container">
        <div id="sidebar">
                <ul id="navmenu">
                    <li><a href="?module=home#pos">Beranda</a></li>
                    <li><a href="?module=profile#pos">Profil</a></li>
                    <li><a href="?module=galeri#pos">Galeri</a></li>
                    <li><a href="?module=jadwal#pos">Jadwal Kuliah</a></li>
                </ul>
            </div>
            <div id="header">       
                <h1>PERTEMUAN IV -- SISTEM PAKAR</h1>
            </div>

            <div id="page">
                        <?php if(isset($_GET['module']))
                    include "konten/$_GET[module].php";
                else
                    include "konten/home.php";?>
            </div>

            <div id="clear"></div>
            <div id="footer">
                <p>&copy; 2020 Licenced</p>
            </div>
        </div>
    </body>
</html>
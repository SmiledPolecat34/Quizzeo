<?php


$etape = $_POST["etape"];

if($etape==1){
    echo ("informations");
    $nombre++;
    for($i=1; $i!=$nombre; $i++){
        $b = "$i";
        $categorie = $b;
        echo ("categorie");
    }
    echo ("...");
}

if($etape==2)
{
    $db = mysql_connect($serveur, $name, $pass) or die("Erreur" . mysql_error());
    mysql_select_db($base, $db) or die("Erreur");
    $sql = "???";
    $req = mysql_query($sql);
    $data = mysql_fetch_assoc($req);

    $no = $data['nom'] + 1;
    $cat = $_POST['cat'];
    $titre = $_POST['titre'];
    $titre = addslashes("$titre");
    $niveau = $_POST['niv'];
    $fond = $_POST['fond'];
    $couleur = $_POST['couleur'];

    $sql = "fff";
    mysql_query($sql);

    $sql = "ddd";
    mysql_query($sql);

    $sql = "ppp";
    mysql_query($sql);

    echo ("ssssssssssss");
}

if ($etape == 3) {
    $db = mysql_connect($serveur, $name, $pass) or die('Erreur de connexion ' . mysql_error());
    mysql_select_db($base, $db) or die('Erreur de selection ' . mysql_error());

    $qu1 = $_POST['qu1'];
    $qu1 = addslashes("$qu1");
    $rep1 = $_POST['rep1'];
    $rep1 = addslashes("$rep1");
    $qu2 = $_POST['qu2'];
    $qu2 = addslashes("$qu2");
    $rep2 = $_POST['rep2'];
    $rep2 = addslashes("$rep2");
    $qu3 = $_POST['qu3'];
    $qu3 = addslashes("$qu3");
    $rep3 = $_POST['rep3'];
    $rep3 = addslashes("$rep3");
    $qu4 = $_POST['qu4'];
    $qu4 = addslashes("$qu4");
    $rep4 = $_POST['rep4'];
    $rep4 = addslashes("$rep4");
    $qu5 = $_POST['qu5'];
    $qu5 = addslashes("$qu5");
    $rep5 = $_POST['rep5'];
    $rep5 = addslashes("$rep5");
    $qu6 = $_POST['qu6'];
    $qu6 = addslashes("$qu6");
    $rep6 = $_POST['rep6'];
    $rep6 = addslashes("$rep6");
    $qu7 = $_POST['qu7'];
    $qu7 = addslashes("$qu7");
    $rep7 = $_POST['rep7'];
    $rep7 = addslashes("$rep7");
    $qu8 = $_POST['qu8'];
    $qu8 = addslashes("$qu8");
    $rep8 = $_POST['rep8'];
    $rep8 = addslashes("$rep8");
    $qu9 = $_POST['qu9'];
    $qu9 = addslashes("$qu9");
    $rep9 = $_POST['rep9'];
    $rep9 = addslashes("$rep9");
    $qu10 = $_POST['qu10'];
    $qu10 = addslashes("$qu10");
    $rep10 = $_POST['rep10'];
    $rep10 = addslashes("$rep10");

    $couleur = $_POST['couleur'];
    $niv = $_POST['niv'];
    $fond = $_POST['fond'];
    $no = $_POST['no'];

    $sql1 = "INSERT INTO `$no` VALUES (1, '$qu1', '$rep1')";
    $sql2 = "INSERT INTO `$no` VALUES (2, '$qu2', '$rep2')";
    $sql3 = "INSERT INTO `$no` VALUES (3, '$qu3', '$rep3')";
    $sql4 = "INSERT INTO `$no` VALUES (4, '$qu4', '$rep4')";
    $sql5 = "INSERT INTO `$no` VALUES (5, '$qu5', '$rep5')";
    $sql6 = "INSERT INTO `$no` VALUES (6, '$qu6', '$rep6')";
    $sql7 = "INSERT INTO `$no` VALUES (7, '$qu7', '$rep7')";
    $sql8 = "INSERT INTO `$no` VALUES (8, '$qu8', '$rep8')";
    $sql9 = "INSERT INTO `$no` VALUES (9, '$qu9', '$rep9')";
    $sql10 = "INSERT INTO `$no` VALUES (10, '$qu10', '$rep10')";
    $sql11 = "INSERT INTO `$no` VALUES (100, '$fond', '$couleur')";
    $sql12 = "INSERT INTO `$no` VALUES (127, '', '$niv')";
    
    mysql_query($sql1) or die('Erreur de insert1 ' . mysql_error());
    mysql_query($sql2) or die('Erreur de insert2 ' . mysql_error());
    mysql_query($sql3) or die('Erreur de insert3 ' . mysql_error());
    mysql_query($sql4) or die('Erreur de insert4 ' . mysql_error());
    mysql_query($sql5) or die('Erreur de insert5 ' . mysql_error());
    mysql_query($sql6) or die('Erreur de insert6 ' . mysql_error());
    mysql_query($sql7) or die('Erreur de insert7 ' . mysql_error());
    mysql_query($sql8) or die('Erreur de insert8 ' . mysql_error());
    mysql_query($sql9) or die('Erreur de insert9 ' . mysql_error());
    mysql_query($sql10) or die('Erreur de insert10 ' . mysql_error());
    mysql_query($sql11) or die('Erreur de insert11 ' . mysql_error());
    mysql_query($sql12) or die('Erreur de insert12 ' . mysql_error());

    echo ("mmm");
    // fopen("ggg");
}
?>
<?php
    $error;
    $info;
//les champs son obligation
if(empty($_POST["nom"])){
    $error[]="le nom son obligé !!";
}
if(empty($_POST["prenom"])){
    $error[]="le prenom son obligé !!";
}
if(empty($_POST["date"])){
    $error[]="Date de naissance son obligé !!";
}
if(empty($_POST["mail"])){
    $error[]=" E-mail son obligé !!";
}
if(empty($_POST["sexe"])){
    $error[]=" sexe son obligé !!";
}
if(empty($_POST["questions"])){
    $error[]=" Questions son obligé !!";
}
if(empty($_FILES["fichier"]["name"])){
    $error[]="La sélection de fichier son obligé !!";
}
//le format de saisir 
if(!empty($_POST["nom"])){
if(!preg_match('#^[a-zA-Z]+$#',$_POST['nom'])){
$error[]="le format de nom ne pas valider seulement des lettres !!";
}}

if(!empty($_POST["prenom"])){
if(!preg_match('#^[a-zA-Z]+$#',$_POST['prenom'])){
    $error[]="le format de nom ne pas valider seulement des lettres !!";
}}

if(!empty($_POST["mail"])){
if(!preg_match('#@#',$_POST['mail'])){
    $error[]="le format de nom ne pas valider doit exister @exempl !!";
}}
//Une seule case à cocher
if(empty($_POST["loisir"]) && empty($_POST["ecole"])){
    $error[]=" le type d'étude son obligé !!";}
if (!empty($_POST["loisir"]) && !empty($_POST["ecole"])) {
    $error[]=" couche une seule (loisir ou ecole)  !!";}
else {
    if(!empty($_POST["loisir"])&& empty($_POST["ecole"])) $TypeEt="loisir";
    else $TypeEt="ecole";
}

//l'extension de fichier 
$extension= array(".pdf",".doc",".png");
$ext=strrchr($_FILES["fichier"]["name"],'.');
if(!empty($_FILES["fichier"]["name"])){
if(!in_array($ext, $extension)){
    $error[]=" Vous devez uploader un fichier de type pdf,doc ou png !!";
}}

//Remplissez les données dans table
if(empty($error)){
    $info["Le nom "]=$_POST["nom"];
    $info["Le prenom "]=$_POST["prenom"];
    $info["E-mail  "]=$_POST["mail"];
    $info["Date de naissance "]=$_POST["date"];
    $info["Sexe "]=$_POST["sexe"];
    $info["Type d'etude "]=$TypeEt;
    $info["Activité sportive "]=$_POST["ball"];
    $info["piéce d'identité "]=$_FILES["fichier"]["name"];
    $info["questions "]=$_POST["questions"];
}
//Afficher les données saisies 
if(isset($error)){
    echo '<table caption-side="bottom" border="1">';
    foreach($error as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
//Afficher la table des erreurs 
if(isset($info)){
    echo '<table caption-side="bottom" border="1">';
    foreach($info as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td bgcolor='red'>".$value."</td>";
        echo "</tr>";
    }
    echo "</table>";
}



?>
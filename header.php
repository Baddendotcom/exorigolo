<?php
	$TitrePage = 'exo de PHP';
	$DescriptionPage = 'C\'est de la lolade !';
	$KeywordsPage = 'ce,que,tu,veux';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $TitrePage ?></title>
<meta name="description" content="<?php echo $DescriptionPage ?>" />
<meta name="keywords" content="<?php echo $KeywordsPage ?>">

<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/menufullpage.css" rel="stylesheet" type="text/css">

<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.12.3.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.cropit.js"></script>

<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
<a href="#menu" class="menu-link">
        <span>toggle menu</span>
</a>
<!-- Début menu à remplacer avec les tableaux de config.php -->
    
    
<?php
        
for ($NbreElementLigne=1) {
    foreach($menu as $value){
        ?>
        <option value="<?php echo strtolower($value); ?>"><?php echo $value; ?></option>
    <?php
    
};
    
for   ($NbreElementLigne=2) {
    
};
for   ($NbreElementLigne=3){
       
   };
       
 for  ($NbreElementLigne=4) {
    
};
    
    
$menu['Les helpers'] = array();
$menu['Les helpers']['link'] = '/helpers/';
$menu['Les helpers']['titre'] = 'Les helpers';
$menu['Les helpers']['description'] = 'Exercice sur le PHP';
$menu['Les helpers']['keywords'] = 'php,exo,exercice';
$menu['La classe']= array();
$menu['La classe']['link'] = '/classe/';
$menu['La classe']['titre'] = 'La classe';
$menu['La classe']['description'] = 'Exercice sur le PHP';
$menu['La classe']['keywords'] = 'php,exo,exercice';
$menu['La note'] = array();
$menu['La note']['link'] = '/note/';
$menu['La note']['titre'] = 'La note';
$menu['La note']['description'] = 'Exercice sur le PHP';
$menu['La note']['keywords'] = 'php,exo,exercice';
$menu['Le menu'] = array();
$menu['Le menu']['link'] = '/menu/';
$menu['Le menu']['titre'] = 'Le menu';
$menu['Le menu']['description'] = 'Exercice sur le PHP';
$menu['Le menu']['keywords'] = 'php,exo,exercice';
$menu['Le référencement'] = array();
$menu['Le référencement']['link'] = '/referencement/';
$menu['Le référencement']['titre'] = 'Référencement';
$menu['Le référencement']['description'] = 'Exercice sur le PHP';
$menu['Le référencement']['keywords'] = 'php,exo,exercice';
$menu['Les vignettes'] = array();
$menu['Les vignettes']['link'] = '/vignettes/';
$menu['Les vignettes']['titre'] = 'Les vignettes';
$menu['Les vignettes']['description'] = 'Exercice sur le PHP';
$menu['Les vignettes']['keywords'] = 'php,exo,exercice';
$menu['Le morpion'] = array();
$menu['Le morpion']['link'] = '/morpion/';
$menu['Le morpion']['titre'] = 'Le morpion';
$menu['Le morpion']['description'] = 'Exercice sur le PHP';
$menu['Le morpion']['keywords'] = 'php,exo,exercice';
$menu['news'] = array();
$menu['news']['link'] = '/news/';
$menu['news']['titre'] = 'Les news';
$menu['news']['description'] = 'Exercice sur le PHP';
$menu['news']['keywords'] = 'php,exo,exercice';
$menu['fichierCSV'] = array();
$menu['fichierCSV']['link'] = '/fichier-csv/';
$menu['fichierCSV']['titre'] = 'Fichier CSV';
$menu['fichierCSV']['description'] = 'Exercice sur le PHP';
$menu['fichierCSV']['keywords'] = 'php,exo,exercice';
  ?>
    
<!-- Fin menu à remplacer avec les tableaux de config.php -->

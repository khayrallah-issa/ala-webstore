<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
    
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
        <link href="../style/style2.css" rel="stylesheet" type="text/css">
		<link href="../style/style1.css" rel="stylesheet" type="text/css">
        
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <div class="navbar">
    <a href="home.php">HomePage</a>
    <a href="products.php">Producten</a>
    <a href="index2.php?page=cart">Winkelwagentje</a>
    <a href="InloggegevensPage.php">Mijn account</a>
</div>

        <main>
EOT;

}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
 
    </body>
</html>
EOT;
}
?>


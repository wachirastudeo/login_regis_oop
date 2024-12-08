<?php include_once 'header.php'; ?>

<?php include_once 'nav.php'; ?>

<?php include_once 'config/Database.php';
$db = new Database();
$conn = $db->getConnection();


?>

<div class="container">
    <h1 class="dislay-4"> Regis OOP</h1>
</div>

<?php include_once 'footer.php'; ?>
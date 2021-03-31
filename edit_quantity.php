
<?php
session_start();
$id = $_GET['id'];
$edit = $_GET['edit'];
var_dump($_SESSION['cart'][$id]);

switch($edit){
    case 'add':
        $_SESSION['cart'][$id]['quantity']++;
        break;
    case 'remove':
        $_SESSION['cart'][$id]['quantity']--;
        if($_SESSION['cart'][$id]['quantity'] === 0){
            unset($_SESSION['cart'][$id]);
        }
        break;
}

header('Location: cart.php');
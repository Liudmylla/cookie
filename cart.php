<?php require 'inc/head.php'; 
  if (!isset($_SESSION['loginname'])) {
    header('Location: index.php');
} 
$cart = $_SESSION['cart'];

?>
<section class="cookies container-fluid">
<div class="row">
        <?php foreach($cart as $id => $cookie): ?>
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $cookie['name']; ?></h3>
                    <p><?= $cookie['description']; ?></p>
                    <p>Quantity : <?=$cookie['quantity']; ?></p>
                    <a href="/edit_quantity.php?id=<?= $id; ?>&edit=remove">-</a>
                    <a href="/edit_quantity.php?id=<?= $id; ?>&edit=add">+</a>
                </figcaption>
            </figure>
        <?php endforeach ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

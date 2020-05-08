
<?php
require 'inc/head.php';
require 'inc/data/products.php';

if (!isset($_SESSION["name"])){
    header("Location: index.php");
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <h3>Currently in cart</h3>
        <ul>
        <?php
            foreach ($_SESSION['cart'] as $key => $id){
                $name = $catalog[$key]['name'];
                echo "<li>$name : $id</li>";
            }
        ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

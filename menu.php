<?php define("TITLE", "Menu | Franklin's Fine Dining"); ?>
<?php include('./assets/includes/header.php'); ?>

<div id="menu-items">
    <h1>Our Delicious Menu</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, consequatur explicabo vel laudantium cum necessitatibus omnis corporis distinctio minus perferendis inventore libero. Inventore earum maxime placeat nobis sit facere tempora.</p>
    <p><em>Click any menu item to learn more about it.</em></p>

    <hr>

    <ul>
        <?php
        foreach ($menuItems as $dish => $item) {
            ?>
            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?></a> <sup>$</sup><?php echo $item[price]; ?></li>
        <?php
        }
        ?>
    </ul>

    <hr>

</div>

<?php include('./assets/includes/footer.php'); ?>
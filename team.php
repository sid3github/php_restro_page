<?php define("TITLE", "Team | Franklin's Fine Dining");
include('./assets/includes/header.php'); ?>

<div id="team-members" class="cf">
    <h1>Our Team at Franklin's</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem enim reprehenderit neque explicabo ut libero consequatur, maxime cupiditate nesciunt non odit temporibus veritatis, assumenda excepturi. Eligendi distinctio deleniti soluta eius. <strong>The best food you have ever had!!</strong></p>

    <hr>
    <?php
    foreach ($teamMembers as $member) {
        ?>

        <div class="member">
            <img src="assets/img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
            <h2><?php echo $member[name]; ?></h2>
            <p><?php echo $member[bio]; ?></p>
        </div>

    <?php
    }
    ?>

</div>
<hr>

<?php include('./assets/includes/footer.php'); ?>
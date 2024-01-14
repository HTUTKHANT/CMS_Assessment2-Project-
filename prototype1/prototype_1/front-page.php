<?php get_header();?>


    Test

    <div class="container">
        <div class="row">
            <div class="col">
                Left Side
            </div>

            <div class="col">
                Right Side
            </div>
        </div>
        
    </div>

    <?php
    // Testing echo
    echo "<p>This demonstrates the process of echoing HTML using PHP.</p>";

    // Testing decisions
    $number = 4;

    if ($number > 5) {
        echo "You see this because the number is bigger than 5 <br>";
    } else {
        echo "You are seeing this text because the number is smaller than 5. <br>";
    }

    // Testing Rep
    echo "<br>Using for loop:<br>";

    for ($i = 1; $i <= 8; $i++) {
        echo "<br>Number $i<br>";
    }

    ?>

<?php get_footer();?>
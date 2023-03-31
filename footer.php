<?php

wp_footer();

echo get_template_part( 'template-parts/recent' , 'portfolio' );

?>



<footer class="footer">
    <div class="container columnGrid">
        <div class="columnGrid__column columnGrid__column_6">
            <p>© 2023 - Data Crunch Corp. All Rights Reserved.</p>
        </div>
        <div class="columnGrid__column columnGrid__column_6 columnGrid__column_rightAlign">
            <?php 

                if( is_user_logged_in() ) {
                    $admin_url = admin_url();

                    echo '<a href="' . $admin_url . '" target="_blank">Go To Dashboard</a>';
                }


            
            ?>
        </div>
    </div>
</footer>
    
</body>
</html>
<?php

echo '<footer>
    <div class="footer">
        <div class="container-fluid" style="margin-top: 50px; padding: 0;">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h3 style="bottom: 0;">Więcej o blogu</h3>
                    <ul class="footerList">
                        <li><a href="#">Page1</a></li>
                        <li><a href="#">Page2</a></li>
                        <li><a href="#">Page3</a></li>
                        <li><a href="#">Page4</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h3>Dodatkowe funkcje</h3>
                    <ul class="footerList">
                        <li><a href="#">Page1</a></li>
                        <li><a href="#">Page2</a></li>
                        <li><a href="#">Page3</a></li>
                        <li><a href="#">Page4</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h3>Media społecznościowe</h3>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a><br>
                    <a href="https://github.com/WARDASIU"><i class="fab fa-github-square"></i></i></a><br>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></i></a>

                </div>
            </div>
        </div>
    </div>

    <?php include("controllers/RegisterAndLoginFormController.php"); ?>

    <div class="footer-bottom">
        <div class="container">
            <p style="float: left"> 2021 © Wszelkie prawa zastrzeżone.</p>
            <p style="float: right">P_S</p>
        </div>
    </div>
</footer>';

?>
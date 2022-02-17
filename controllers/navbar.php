<?php

if(empty($_SESSION['user'])){
    echo '<header>
    <nav class="navbar navbar-expand-lg navbar fixed-top myFixed">
        <!--        <a class="navbar-brand" href="#">Icon</a>-->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" id="myNavbar">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Strona Główna</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Articels.php?page=1">Artykuły</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="allPosts.php">Posty</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" onclick="createRegisterForm()">Zarejestruj się</a>
                </li>  
                <li class="nav-item active">
                    <a class="nav-link" onclick="logIn()">Zaloguj się</a>
                </li>
                
            </ul>
        </div>
    </nav>
</header>';
}else if($_SESSION['user'] == 'admin'){
    echo '<header>
    <nav class="navbar navbar-expand-lg navbar fixed-top myFixed">
        <!--        <a class="navbar-brand" href="#">Icon</a>-->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" id="myNavbar">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Strona Główna</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Articels.php?page=1">Artykuły</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="allPosts.php">Posty</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="controllers/accountController.php">Wyloguj sie</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="accountManagment.php">Zarzadzanie</a>
                </li>
            </ul>
        </div>
    </nav>
</header>';
}else{
    echo '<header>
    <nav class="navbar navbar-expand-lg navbar fixed-top myFixed">
        <!--        <a class="navbar-brand" href="#">Icon</a>-->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" id="myNavbar">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Strona Główna</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Articels.php?page=1">Artykuły</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="allPosts.php">Posty</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="controllers/accountController.php">Wyloguj sie</a>
                </li>
            </ul>
        </div>
    </nav>
</header>';
}

?>
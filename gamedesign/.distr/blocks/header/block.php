<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__logo">
               <img src="img/header/logo.svg" alt="Synergy" class="header__logo-img">
            </div>
            <nav class="header__nav nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#" class="nav__link">Программа</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">ОБ университете</a></li>
                </ul>
            </nav>
            <div class="header__phone">
                <a href="tel:<?=$phone_link?>" class="header__phone-number"><?=$phone?></a><br>
            </div>
            <div class="burger"><span></span></div>
    
        <div class="burger-menu">
        <ul class="burger-menu__links ">
            <li><a href="#" class="burger-menu__link">Программа</a></li>
            <li><a href="#" class="burger-menu__link">ОБ университете</a></li>
            <li><a href="tel:<?=$phone_link?>" class="header__phone-number"><?=$phone?></a></li>
        </ul>
        <span class="burger-menu__close"></span> 
    </div>
        </div>
    </div>
</header>
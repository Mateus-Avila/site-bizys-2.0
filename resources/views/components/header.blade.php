<header class="header">
    <div>
        <label class="hamburger">
            <input type="checkbox" id="checkbox">
            <svg viewBox="0 0 32 32">
              <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
              <path class="line" d="M7 16 27 16"></path>
            </svg>
        </label>
        <ul class="menu_list inactive" id="menuList">
            <li class="menu_list__title">Páginas</li>
            <li class="menu_list__item">
                <a href="/" class="menu_list__link">Página principal</a>
            </li>
            <li class="menu_list__item">
                <a href="/beneficios" class="menu_list__link">Benefícios</a>
            </li>
            <li class="menu_list__item">
                <a href="/comousar" class="menu_list__link">Como Usar</a>
            </li>
            <li class="menu_list__item">
                <a href="/quemsomos" class="menu_list__link">Quem somos</a>
            </li>
            <li class="menu_list__item">
                <a href="/contato" class="menu_list__link">Contato</a>
            </li>
        </ul>
    </div>
    <a href="https://sistema.lespeau.com.br/">
        <button class="header__button">
            Log in
        </button>
    </a>
    <nav class="header__navlinks">
        <a href="/beneficios" class="header__navlinks_link">Benefícios</a>
        <a href="/comousar" class="header__navlinks_link">Como Usar</a>
        <a href="/quemsomos" class="header__navlinks_link">Quem Somos</a>
        <a href="/contato" class="header__navlinks_link">Contato</a>
    </nav>
    <a href="/" class="header__image_link"><img src="{{ asset('images/logo final editavel 3.png')}}" alt="Bizys Logo" class="header__image"></a>
</header>
<nav class="navbar navbar-dark navbar-expand-md bg-secondary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}">ZPAI</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav mr-auto text-center">

                <li class="nav-item {if $active=='Home'}active{/if}">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}"> Home </a>
                </li>

            </ul>
            <ul class="navbar-nav text-center">

                <li class="nav-item">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}logowanie/"> Zaloguj się </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}rejestracja/"> Zarejestruj się </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

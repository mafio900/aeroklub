<nav class="navbar navbar-light navbar-expand-md">
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
                {if !isset($rank)}
                <li class="nav-item">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-logowania/"> Zaloguj się </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-rejestracji/"> Zarejestruj się </a>
                </li>
                {else}
                <li class="nav-item">
                    <a class="nav-link">Jesteś zalogowany jako: {$name}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wyloguj/"> Wyloguj się </a>
                </li>
                {/if}

            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-dark navbar-expand-md bg-secondary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}">ZPAI</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav mr-auto text-center">

                <li class="nav-item {if $active=='User'}active{/if}">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}user/"> Użytkownicy </a>
                </li>

                <li class="nav-item {if $active=='Rezerwacja'}active{/if}">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}rezerwacja/"> Rezerwacje </a>
                </li>

                <li class="nav-item {if $active=='Status'}active{/if}">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}status/"> Statusy </a>
                </li>

                <li class="nav-item {if $active=='Usluga'}active{/if}">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}usluga/"> Usługi </a>
                </li>

                <li class="nav-item {if $active=='Samolot'}active{/if}">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}samolot/"> Samolot </a>
                </li>

                <li class="nav-item {if $active=='Producent'}active{/if}">
                    <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}producent/"> Producent </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

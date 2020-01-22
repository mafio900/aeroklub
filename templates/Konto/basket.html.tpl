{extends file="../tableTemplate.html.tpl"}

{block name=title}Twój koszyk{/block}

{block name=thead}
	<th>Nazwa usługi</th>
    <th>Cena za jednostkę</th>
    <th>Ilość</th>
    <th>Jednostka miary</th>
{/block}
{block name=tbody}
	<td>{$uslugi[$row['0']]['UslugaNazwa']}</td>
    <td>{$uslugi[$row['0']]['CenaJedn']}</td>
    <td>{$row['1']}</td>
    <td>{$uslugi[$row['0']]['JednMiary']}</td>
{/block}
{block name=tfoot}
{/block}

{block name=editButton}<button data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}konto/basket/{$row['0']}"
role="button" type="button" class="edit-button btn btn-sm ml-2" title="Pokaż szczegółowe informacje">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</button>
{/block}

{block name=deleteButton}<a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}konto/basket/usun/{$row['0']}" class="btn btn-danger btn-sm ml-1">
    <i class="fa fa-times" aria-hidden="true"></i></a>{/block}

{block name=footButton}<button data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}konto/basket/formularz"
role="button" class="add-button btn btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> Dodaj do koszyka</button>{/block}
{block name=footButtonFinish}<button data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}konto/basket/formularz-rezerwacji"
role="button" class="edit-button btn btn-sm mt-2 ml-2"><i class="fa fa-check" aria-hidden="true"></i> Zarezerwuj usługi</button>{/block}

{block name=emptyTable}Koszyk jest pusty!{/block}

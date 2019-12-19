{extends file="../tableTemplate.html.tpl"}

{block name=title}Lista producentów{/block}

{block name=thead}
	<th>Nazwa</th>
{/block}
{block name=tbody}
	<td>{$row['ProducentNazwa']}</td>

{/block}
{block name=tfoot}
{/block}
{block name=footUrlName}producent{/block}
{block name=footButtonName}Dodaj producenta{/block}

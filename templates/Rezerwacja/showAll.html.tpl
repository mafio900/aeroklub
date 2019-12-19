{extends file="../tableTemplate.html.tpl"}

{block name=title}Lista rezerwacji{/block}

{block name=thead}
	<th>Id rezerwacji</th>
    <th>Złożona przez</th>
    <th>Status</th>
    <th>Data złożenia</th>
{/block}
{block name=tbody}
	<td>{$row['id']}</td>
    <td>{$users[$row['IdKlient']]['Imie']} {$users[$row['IdKlient']]['Nazwisko']}</td>
    <td>{$statusy[$row['IdStatus']]['StatusNazwa']}</td>
    <td>{$row['DataZlozenia']}</td>
{/block}
{block name=tfoot}
{/block}
{block name=footUrlName}rezerwacja{/block}
{block name=footButtonName}Dodaj rezerwację{/block}

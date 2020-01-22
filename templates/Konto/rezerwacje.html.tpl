{extends file="../tableTemplate.html.tpl"}

{block name=title}Twoje rezerwacje{/block}

{block name=thead}
	<th>Data złożenia</th>
    <th>Termin realizacji</th>
    <th>Kwota łączna(zł)</th>
    <th>Status</th>
{/block}
{block name=tbody}
	<td>{$row['DataZlozenia']}</td>
    <td>{$row['TerminRealizacji']}</td>
    <td>{$row['KwotaLaczna']}</td>
    <td>{$statusy[$row['IdStatus']]['StatusNazwa']}</td>
{/block}
{block name=tfoot}
{/block}
{block name=footUrlName}konto/rezerwacje{/block}
{block name=footButtonName}Dodaj rezerwacje{/block}

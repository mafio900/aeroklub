{extends file="../tableTemplate.html.tpl"}

{block name=title}Lista samolotów{/block}

{block name=thead}
	<th>Producent</th>
    <th>Model</th>
    <th>Rejestracja</th>
{/block}
{block name=tbody}
	<td>{$producenci[$row['IdProducent']]['ProducentNazwa']}</td>
    <td>{$row['Model']}</td>
    <td>{$row['Rejestracja']}</td>
{/block}
{block name=tfoot}
{/block}
{block name=footUrlName}samolot{/block}
{block name=footButtonName}Dodaj samolot{/block}

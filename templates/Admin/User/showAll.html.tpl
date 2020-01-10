{extends file="../tableTemplate.html.tpl"}

{block name=title}Lista użytkowników{/block}

{block name=thead}
	<th>Imie</th>
    <th>Nazwisko</th>
    <th>Login</th>
{/block}
{block name=tbody}
	<td>{$row['Imie']}</td>
    <td>{$row['Nazwisko']}</td>
    <td>{$row['Login']}</td>
{/block}
{block name=tfoot}
{/block}
{block name=footUrlName}user{/block}
{block name=footButtonName}Dodaj użytkownika{/block}

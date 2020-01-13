{extends file="../tableTemplate.html.tpl"}

{block name=title}Lista statusów{/block}

{block name=thead}
	<th>Status</th>
{/block}
{block name=tbody}
	<td>{$row['StatusNazwa']}</td>
{/block}
{block name=tfoot}
{/block}
{block name=deleteDescription}status {$row['StatusNazwa']}{/block}
{block name=footUrlName}status{/block}
{block name=footButtonName}Dodaj status{/block}

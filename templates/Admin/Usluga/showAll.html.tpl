{extends file="../tableTemplate.html.tpl"}

{block name=title}Lista usług{/block}

{block name=thead}
	<th>Usługa</th>
{/block}
{block name=tbody}
	<td>{$row['UslugaNazwa']} ({$row['CenaJedn']}zł za {$row['JednMiary']})</td>
{/block}
{block name=tfoot}
{/block}
{block name=deleteDescription}usługę: {$row['UslugaNazwa']}{/block}
{block name=footUrlName}usluga{/block}
{block name=footButtonName}Dodaj usługę{/block}

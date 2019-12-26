{extends file="../modals/formBlock.html.tpl"}
{block name=action}producent/dodaj/{/block}
{block name=title}Nowy producent{/block}
{block name=body}{include file="../Producent/form.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}

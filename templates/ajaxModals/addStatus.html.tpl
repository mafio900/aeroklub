{extends file="../modals/formBlock.html.tpl"}
{block name=action}status/dodaj/{/block}
{block name=title}Nowy status{/block}
{block name=body}{include file="../Status/form.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}

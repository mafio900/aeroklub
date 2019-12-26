{extends file="../modals/formBlock.html.tpl"}
{block name=action}usluga/dodaj/{/block}
{block name=title}Nowy usługa{/block}
{block name=body}{include file="../Usluga/form.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}

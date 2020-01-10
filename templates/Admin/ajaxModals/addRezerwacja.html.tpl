{extends file="../modals/formBlock.html.tpl"}
{block name=action}rezerwacja/dodaj/{/block}
{block name=title}Nowa rezerwacja{/block}
{block name=body}{include file="../Rezerwacja/form.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}

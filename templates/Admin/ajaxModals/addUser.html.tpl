{extends file="../modals/formBlock.html.tpl"}
{block name=action}user/dodaj/{/block}
{block name=title}Nowy użytkownik{/block}
{block name=body}{include file="../User/form.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}

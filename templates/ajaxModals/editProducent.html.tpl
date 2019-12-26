{extends file="../modals/formBlock.html.tpl"}
{block name=action}producent/edytuj/{/block}
{block name=title}Edycja producenta{/block}
{block name=body}
  {include file="../Producent/form.html.tpl"}
{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Edytuj</button>{/block}

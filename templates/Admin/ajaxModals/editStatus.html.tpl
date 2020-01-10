{extends file="../modals/formBlock.html.tpl"}
{block name=action}status/edytuj/{/block}
{block name=title}Edycja statusu{/block}
{block name=body}
  {include file="../Status/form.html.tpl"}
{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Edytuj</button>{/block}

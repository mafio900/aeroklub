{extends file="../modals/formBlock.html.tpl"}
{block name=action}rezusluga/edytuj/{/block}
{block name=title}Edycja usługi w rezerwacji{/block}
{block name=body}
  {include file="../RezUsluga/form.html.tpl"}
{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Edytuj</button>{/block}

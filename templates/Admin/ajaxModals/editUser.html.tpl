{extends file="../modals/formBlock.html.tpl"}
{block name=action}user/edytuj/{/block}
{block name=title}Edycja użytkownika{/block}
{block name=body}
  {include file="../User/form.html.tpl"}
{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Edytuj</button>{/block}

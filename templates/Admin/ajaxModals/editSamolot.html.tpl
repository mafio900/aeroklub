{extends file="../modals/formBlock.html.tpl"}
{block name=action}samolot/edytuj/{/block}
{block name=otherOptions}enctype="multipart/form-data"{/block}
{block name=title}Edycja samolotu{/block}
{block name=body}
  {include file="../Samolot/form.html.tpl"}
{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Edytuj</button>{/block}

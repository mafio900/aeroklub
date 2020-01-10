{extends file="../baseForm.html.tpl"}

{block name=title}Nowy producent{/block}

{block name=action}
producent/dodaj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Dodaj{/block}
{block name=where}producent{/block}

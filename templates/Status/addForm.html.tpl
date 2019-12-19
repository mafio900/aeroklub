{extends file="../baseForm.html.tpl"}

{block name=title}Nowy status{/block}

{block name=action}
status/dodaj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Dodaj{/block}
{block name=where}status{/block}

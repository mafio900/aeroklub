{extends file="../baseForm.html.tpl"}

{block name=title}Nowy samolot{/block}

{block name=action}
samolot/dodaj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Dodaj{/block}
{block name=where}samolot{/block}

{extends file="../baseForm.html.tpl"}

{block name=title}Edytowanie samolotu{/block}

{block name=action}
samolot/edytuj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Edytuj{/block}
{block name=where}samolot{/block}

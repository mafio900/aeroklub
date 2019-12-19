{extends file="../baseForm.html.tpl"}

{block name=title}Edytowanie statusu{/block}

{block name=action}
status/edytuj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Edytuj{/block}
{block name=where}status{/block}

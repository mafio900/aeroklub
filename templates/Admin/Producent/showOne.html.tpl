{extends file="../baseForm.html.tpl"}

{block name=title}Edytowanie producenta{/block}

{block name=action}
producent/edytuj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Edytuj{/block}
{block name=where}producent{/block}

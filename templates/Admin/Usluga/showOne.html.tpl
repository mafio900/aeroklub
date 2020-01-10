{extends file="../baseForm.html.tpl"}

{block name=title}Edytowanie usługi{/block}

{block name=action}
usluga/edytuj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Edytuj{/block}
{block name=where}usluga{/block}

{extends file="../baseForm.html.tpl"}

{block name=title}Nowa usługa{/block}

{block name=action}
usluga/dodaj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Dodaj{/block}
{block name=where}usluga{/block}

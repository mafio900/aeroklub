{extends file="../baseForm.html.tpl"}

{block name=title}Edytowanie użytkownika{/block}

{block name=action}
user/edytuj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Edytuj{/block}
{block name=where}user{/block}

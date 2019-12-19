{extends file="../baseForm.html.tpl"}

{block name=title}Nowy użytkownik{/block}

{block name=action}
user/dodaj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Dodaj{/block}
{block name=where}user{/block}

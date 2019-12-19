{extends file="../baseForm.html.tpl"}

{block name=title}Nowa rezerwacja{/block}

{block name=action}
rezerwacja/dodaj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Dodaj{/block}
{block name=where}rezerwacja{/block}

{extends file="../baseForm.html.tpl"}

{block name=title}Edytowanie rezerwacji{/block}

{block name=action}
rezerwacja/edytuj/
{/block}
{block name=submitName}Edytuj{/block}
{block name=where}rezerwacja{/block}

{block name=formBody}
  {include file="./form.html.tpl"}
{/block}

{block name=rezusl}
  {include file="./rezuslTable.html.tpl"}
{/block}

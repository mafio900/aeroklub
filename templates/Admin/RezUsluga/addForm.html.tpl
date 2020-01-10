{extends file="../baseForm.html.tpl"}

{block name=title}Dodawanie usługi do rezerwacji{/block}

{block name=action}
rezusluga/dodaj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Dodaj{/block}
{block name=where}rezerwacja/{$data['id']}{/block}

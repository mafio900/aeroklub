{extends file="../baseForm.html.tpl"}

{block name=title}Edytowanie zarezerwowanej usługi{/block}

{block name=action}
rezusluga/edytuj/
{/block}
{block name=formBody}
  {include file="./form.html.tpl"}
{/block}
{block name=submitName}Edytuj{/block}
{block name=where}rezerwacja/{$data['IdRezerwacja']}{/block}

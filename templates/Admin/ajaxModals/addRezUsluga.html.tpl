{extends file="../modals/formBlock.html.tpl"}
{block name=action}rezusluga/dodaj/{/block}
{block name=title}Nowa usługa w rezerwacji{/block}
{block name=body}{include file="../RezUsluga/form.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}

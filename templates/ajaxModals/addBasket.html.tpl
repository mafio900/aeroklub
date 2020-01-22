{extends file="../modals/formBlock.html.tpl"}
{block name=action}konto/basket/dodaj{/block}
{block name=title}Dodawanie usługi do koszyka{/block}
{block name=body}{include file="../Konto/addBasket.html.tpl"}{/block}
{block name=acceptButton}<button id="submit-button" type="submit" class="btn">Dodaj</button>{/block}

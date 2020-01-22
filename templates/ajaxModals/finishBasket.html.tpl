{extends file="../modals/formBlock.html.tpl"}
{block name=action}konto/basket/zarezerwuj{/block}
{block name=title}Rezerwowanie koszyka{/block}
{block name=body}{include file="../Konto/finishBasket.html.tpl"}{/block}
{block name=acceptButton}<button id="submit-button" type="submit" class="btn">Dodaj</button>{/block}

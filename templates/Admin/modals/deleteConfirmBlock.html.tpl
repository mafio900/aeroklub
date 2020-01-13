{extends file="./base.html.tpl"}
{block name=modalid}delete-confirm-modal{/block}
{block name=title}Usuwanie danych{/block}
{block name=modalcontent}
{include file='./formBlock.html.tpl'}
{/block}
{block name=acceptButton}
  <button type="submit" class="btn btn-danger">Usuń</button>
{/block}

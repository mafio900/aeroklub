{extends file="../modals/formBlock.html.tpl"}
{block name=action}samolot/dodaj/{/block}
{block name=otherOptions}enctype="multipart/form-data"{/block}
{block name=title}Nowy samolot{/block}
{block name=body}{include file="../Samolot/form.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}

{extends file="./baseTemplate.html.tpl"}

{block name=body}
<div class="parallax">
    <h1>{block name=title}Formularz{/block}</h1>
</div>
<div class="container">
    <form id="formularz" class="col-12" action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=action}{/block}" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                {block name=formBody}{/block}
            </div>
            <div class="panel-footer text-center">
                <button id="submit-button" type="submit" class="btn">{block name=submitName}{/block}</button>
                <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=where}{/block}" role="button" class="btn btn-outline-dark">Cofnij</a>
            </div>
        </div>
    </form>
</div>
{block name=rezusl}{/block}
{/block}

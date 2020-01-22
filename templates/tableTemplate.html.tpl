{extends file="./baseTemplate.html.tpl"}
{block name=body}
<div class="parallax appear">
    <h1>{block name=title}Formularz{/block}</h1>
</div>
{if isset($data) && $data!=null}
<div class="container-fluid center appear">
    <!-- BEGIN TABLE WITH DATA -->
    <table id="mainTable" class="display table table-striped table-bordered w-auto">
        <thead>
            <tr>
                {block name=thead}
                {/block}
                <th class="hidden-print"></th>
            </tr>
        </thead>
        <tbody>
            {foreach $data as $key => $row}
            <tr>
                {block name=tbody}
                <th></th>
                {/block}
                <td><span class="btn-group">
                {block name=editButton}
                <button data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=buttonUrlName}{/block}/{$row['id']}"
                role="button" type="button" class="edit-button btn btn-sm ml-2" title="Pokaż szczegółowe informacje">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                {/block}
                {block name=deleteButton}
                {/block}
                </span></td>
            </tr>
            {/foreach}
        </tbody>
        <tfoot>
            <tr>
                {block name=tfoot}{/block}
            </tr>
        </tfoot>
    </table><!-- END TABLE WITH DATA -->
</div>
{else}
<div class="container-fluid center appear">
    {block name=emptyTable}Brak danych!{/block}
</div>
{/if}
<div class="container-fluid center mb-1 appear">
    {block name=footButton}{/block}
    {block name=footButtonFinish}{/block}
</div>
{/block}

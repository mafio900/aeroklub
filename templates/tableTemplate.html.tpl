{extends file="./baseTemplate.html.tpl"}
{block name=body}
<div class="parallax">
    <h1>{block name=title}Formularz{/block}</h1>
</div>
{if isset($data)}
<div class="container-fluid center row">
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
                <button data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=footUrlName}{/block}/{$row['id']}"
                role="button" type="button" class="edit-button btn btn-sm ml-2" title="Pokaż szczegółowe informacje">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
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
<div class="row center mb-2">
    <button data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=footUrlName}{/block}/formularz"
    role="button" class="add-button btn btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> {block name=footButtonName}{/block}</button>
</div>
{/if}

{/block}

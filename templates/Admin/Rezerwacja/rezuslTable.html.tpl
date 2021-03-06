<h2 class="mt-5">Usługi</h2>
{if !empty($rezuslugi)}
<form action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}rezusluga/usunwiele/{$data['id']}" method="post">
<table id="mainTable" class="display table table-striped table-bordered w-auto text-light">
    <thead>
        <tr>
            <th></th>
            <th>Nazwa</th>
            <th>Ilość</th>
            <th>Samolot</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {foreach $rezuslugi as $id => $rezusluga}
            <tr>
                <td class="text-center"><input type="checkbox" value="{$id}" name="ids[]" /></td>
                <td>{$uslugi[$rezusluga['IdUsluga']]['UslugaNazwa']} ({$uslugi[$rezusluga['IdUsluga']]['CenaJedn']}zł za {$uslugi[$rezusluga['IdUsluga']]['JednMiary']})</td>
                <td>{$rezusluga['Ilosc']}</td>
                <td>{if $rezusluga['IdSamolot']==null}Brak{else}{$producenci[$samoloty[$rezusluga['IdSamolot']]['IdProducent']]['ProducentNazwa']}{$samoloty[$rezusluga['IdSamolot']]['Model']}{/if}</td>
                <td><span class="btn-group">
                    <button type="button" data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}rezusluga/formedytuj/{$id}"
                    role="button" class="edit-button btn btn-primary btn-sm ml-2" title="Pokaż szczegółowe informacje">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm delete-button"
                          data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}rezusluga/usun/{$id}/"
                          data-description="{$uslugi[$rezusluga['IdUsluga']]['UslugaNazwa']} ({$uslugi[$rezusluga['IdUsluga']]['CenaJedn']}zł za {$uslugi[$rezusluga['IdUsluga']]['JednMiary']})"
                          data-toggle="tooltip" data-placement="top" title="Usuń">
                          <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </span></td>
            </tr>
        {/foreach}
    </tbody>
    <tfoot>
    </tfoot>
</table>
<button type="submit" class="btn btn-danger btn-sm" title="Usuń zaznaczone"><i class="fa fa-times" aria-hidden="true"></i> Usuń zaznaczone</button></br>
</form>
{/if}
<button data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}rezusluga/formularz/{$data['id']}"
role="button" class="add-button btn btn-primary btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> Dodaj usługę</button>

{include file='../modals/deleteConfirmBlock.html.tpl'}

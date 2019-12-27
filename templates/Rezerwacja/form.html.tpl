{if isset($data['DataZlozenia'])}
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left">Data złożenia rezerwacji</label>
    <input id="DataZlozenia" class="col-12 col-md-6" value="{if isset($data['DataZlozenia'])}{$data['DataZlozenia']}{/if}" type="text" readonly>
</div>
{/if}
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="TerminRealizacji">Termin realizacji</label>
    <input class="date col-12 col-md-6" name="TerminRealizacji" value="{if isset($data['TerminRealizacji'])}{$data['TerminRealizacji']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
{if isset($data['KwotaLaczna'])}
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="KwotaLaczna">Kwota łączna (zł)</label>
    <input class="col-12 col-md-6" name="KwotaLaczna" value="{if isset($data['KwotaLaczna'])}{$data['KwotaLaczna']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
{/if}
{if isset($statusy)}
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="IdStatus">Status</label>
    <select class="col-12 col-md-6 js-select2" name="IdStatus">
        {foreach $statusy as $id => $status}
            <option value="{$id}" {if isset($data['IdStatus']) && $data['IdStatus']==$id}selected{/if}>{$status['StatusNazwa']}</option>
        {/foreach}
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>
{/if}
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="IdKlient">Klient</label>
    <select class="col-12 col-md-6 js-select2" style="width: 50%;" name="IdKlient">
        {if !isset($data)}<option value="def">Wybierz klienta...</option>{/if}
        {foreach $klienci as $id => $klient}
            <option value="{$id}" {if isset($data['IdKlient']) && $data['IdKlient']==$id}selected{/if}>{$klient['Imie']} {$klient['Nazwisko']}</option>
        {/foreach}
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="IdPracownik">Pracownik</label>
    <select class="col-12 col-md-6 js-select2" style="width: 50%;" name="IdPracownik">
        {if !isset($data)}<option value="def">Wybierz pracownika...</option>{/if}
        {foreach $pracownicy as $id => $pracownik}
            <option value="{$id}" {if isset($data['IdPracownik']) && $data['IdPracownik']==$id}selected{/if}>{$pracownik['Imie']} {$pracownik['Nazwisko']}</option>
        {/foreach}
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>

<input name="id" value="{if isset($data['id'])}{$data['id']}{/if}" type="hidden" required>

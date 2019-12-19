<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="IdUsluga">Wybierz usługę</label>
    <select class="col-12 col-md-3 js-example-basic-single js-example-language" name="IdUsluga">
        <option value="def">Wybierz usługę...</option>
        {foreach $uslugi as $id => $usluga}
            <option value="{$id}" {if isset($data['IdUsluga']) && $data['IdUsluga']==$id}selected{/if}>{$usluga['UslugaNazwa']} ({$usluga['CenaJedn']}zł za {$usluga['JednMiary']})</option>
        {/foreach}
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Ilosc">Ilość</label>
  <input class="col-12 col-md-3" name="Ilosc" value="{if isset($data['Ilosc'])}{$data['Ilosc']}{/if}" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="IdSamolot">Wybierz samolot</label>
    <select class="col-12 col-md-3 js-example-basic-single js-example-language" name="IdSamolot">
        <option value="0" selected>Żaden</option>
        {foreach $samoloty as $id => $samolot}
        <option value="{$id}" {if isset($data['IdSamolot']) && $data['IdSamolot']==$id}selected{/if}>{$producenci[$samolot['IdProducent']]['ProducentNazwa']} {$samolot['Model']}</option>
        {/foreach}
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>

<input name="id" value="{if isset($data['id'])}{$data['id']}{/if}" type="hidden" required>

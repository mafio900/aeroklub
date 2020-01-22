<div class="form-group row mb-2">
    <label class="col-sm-4 col-form-label" for="IdUsluga">Usługa</label>
    <div class="col-sm-8">
        <select type="text" class="form-control js-select2" name="IdUsluga" style="width:15rem !important;">
        {if !isset($data)}<option value="def">Wybierz usługę...</option>{/if}
        {foreach $uslugi as $id => $usluga}
            <option value="{$id}">{$usluga['UslugaNazwa']}</option>
        {/foreach}
        </select>
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-4 col-form-label" for="Ilosc">Ilość</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="Ilosc">
        <div class=""></div>
    </div>
</div>

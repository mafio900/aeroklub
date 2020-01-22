<div class="col-12">
    <div class="row line">
        <div class="col-6">
            Data Złożenia:
        </div>
        <div class="col-6">
            {$data['DataZlozenia']}
        </div>
    </div>
    <div class="row line">
        <div class="col-6">
            Termin realizacji:
        </div>
        <div class="col-6">
            {$data['TerminRealizacji']}
        </div>
    </div>
    <div class="row line">
        <div class="col-6">
            Kwota łączna (zł):
        </div>
        <div class="col-6">
            {$data['KwotaLaczna']}
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            Status:
        </div>
        <div class="col-6">
            {$statusy[$data['IdStatus']]['StatusNazwa']}
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-12 center">
            <h5>Zarezerwowane usługi</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-3 center">
            <b>Nazwa usługi</b>
        </div>
        <div class="col-3 center">
            <b>Cena za jednostkę(zł)</b>
        </div>
        <div class="col-3 center">
            <b>Ilość</b>
        </div>
        <div class="col-3 center">
            <b>Jednostka miary</b>
        </div>
    </div>
    {foreach $rezuslugi as $key => $rezusluga}
    <div class="row">
        <div class="col-3 center">
            {$uslugi[$rezusluga['IdUsluga']]['UslugaNazwa']}
        </div>
        <div class="col-3 center">
            {$uslugi[$rezusluga['IdUsluga']]['CenaJedn']}
        </div>
        <div class="col-3 center">
            {$rezusluga['Ilosc']}
        </div>
        <div class="col-3 center">
            {$uslugi[$rezusluga['IdUsluga']]['JednMiary']}
        </div>
    </div>
    {/foreach}
</div>

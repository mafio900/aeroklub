{extends file="../baseTemplate.html.tpl"}

{block name=title}Oferty{/block}

{block name=body}
<div class="center appear mt-1"><h1>Nasze Oferty</h1></div>
<div class="container">
    <div class="row mt-5 center slide-top">
        {if isset($data) && $data!=null}
        {foreach $data as $key => $row}
            <div class="card mt-1 ml-1" style="width: 18rem; height: 22rem;">
                <img class="card-img-top" src="./images/{if $row['ZdjecieNazwa']!=null}oferty/{$row['ZdjecieNazwa']}.{$row['Rozszerzenie']}{else}bg.jpg{/if}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{$row['UslugaNazwa']}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Cena: {$row['CenaJedn']} za {$row['JednMiary']}</h6>
                    <p class="card-text">{$row['Opis']}</p>
                </div>
            </div>
        {/foreach}
        {else}
            <p>Brak danych!</p>
        {/if}
    </div>
</div>
{/block}


  <form id="{block name=modalid}modal{/block}-form" {block name=otherOptions}{/block} 
        action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=action}{/block}" method="{block name=modalMethod}POST{/block}">
    <div class="modal-header">
        <h4 class="modal-title pull-left" id="{block name=modalid}modal-id{/block}-title">{block name=title}Tytuł{/block}</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>

    </div>
    <div class="modal-body">
        {block name=body}{/block}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Anuluj</button>
        {block name=acceptButton}{/block}
    </div>
  </form>

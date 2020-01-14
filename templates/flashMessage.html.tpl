  {if isset($success) && $success|count > 0}
  	<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close pr-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {foreach $success as $v}
        <p class="my-auto">{$v}</p>
      {/foreach}
    </div>
  {/if}
  {if isset($warning) && $warning|count > 0}
  	<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close pr-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {foreach $warning as $v}
        <p class="my-auto">{$v}</p>
      {/foreach}
    </div>
  {/if}
  {if isset($error) && $error|count > 0}
  	<div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {foreach $error as $v}
        <p class="my-auto">{$v}</p>
      {/foreach}
    </div>
  {/if}

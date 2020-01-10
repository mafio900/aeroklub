    <!-- FOOTER -->
    {block name=footer}
        <footer class="footer mt-auto py-3">
            <div class="container text-center">
                <span class="text-muted">Projekt ZPAI Bartosz Brzychciński</span>
            </div>
        </footer>
        {/block}
        {block name=javascript}
            {if isset($jsFile)}
                {foreach $jsFile as $script}
                    <script src="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}js/{$script}"></script>
                {/foreach}
            {/if}
    {/block}
    </body>
</html>

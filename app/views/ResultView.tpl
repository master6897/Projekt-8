{extends file="main.tpl"}


{block name=logout}
    <a href="{$config->app_url}" class="button">Wróć!</a>
{/block}
{block name=content}
    <table class="table-wrapper">
        <tr>
            <td>Kwota</td>
            <td>Lata</td>
            <td>Procent</td>
            <td>Rata</td>
            <td>Data</td>
        </tr>
        {foreach $datas as $data}
            <tr>
                <td>{$data["kwota"]}</td>
                <td>{$data["lat"]}</td>
                <td>{$data["procent"]}</td>
                <td>{$data["rata"]}</td>
                <td>{$data["data"]}</td>
            </tr>
        {/foreach}
    </table>
{if $messages->isError()}
    {foreach $messages->getErrors() as $mess }
        {strip}
        <h3 style="color:red;">{$mess}</h3>
        {/strip}
        {/foreach}
{/if}

{/block}
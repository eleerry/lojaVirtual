<h3>Lista de Produtos</h3>
<hr>

<section id="paginacao" class="row">
    <center>PAGINAS</center>
</section>

<section id="produtos" class="row">
    <ul style="list-style: none;">
        <div class="row" id="pularlinha">

            {foreach from=$PRO item=P}
                
            <li class="thumbnail">
                <a href="">
                    <img src="" alt="" />
                    <div class="caption">
                        <h4 class="text-center">{$P.pro_nome}</h4>
                        <h3 class="text-center text-danger">{$P.pro_valor}</h3>
                    </div>
                </a>
            </li>

            {/foreach}

        </div>
    </ul>
</section>

<section id="paginacao" class="row">
    <center>PAGINAS</center>
</section>


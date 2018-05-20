<?php
/**
 * @package Projeto Integrado (PI)
 */
require_once("header.php");
?>
<section class="container">

    <div class="item1">
        <img src="images/logo.png" />
    </div> <!-- .item1 -->

    <div class="posts">

        <div class="post_image">
            <div style="padding: 1%; position: absolute; color: #fff;">CHAMADA PARA A NOTICIA RESUMIDA</div>
            <img alt="" src="images/romario.jpg" />
        </div> <!-- .post_image -->

        <br />
        <div class="post_text">

            <div class="post_fist_title">NOME DO CANDIDATO</div>
            <br />
            <div class="post_second_title">CHAMADA PARA A NOTICIA COMPLETA</div>

            <div class="post_text_content">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua...
            </div> <!-- .post_text_content -->

            <input class="post_button" type="button" value="CONTINUAR LENDO" />
            <br />
            <div class="post_separator"></div>
            <div class="post_author">Por Victor Rodrigues - 03/05/2017 13:27</div>
        </div> <!-- .post_text -->

    </div> <!-- .posts -->

</section> <!-- .container -->
<?php
require_once("footer.php");
?>
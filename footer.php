        </main>


        <footer>
            <div class="logo-rodape">
                <a href="index.html">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo-tag-rodape.svg" alt="Logo tag rodapé">
                </a>

                <p><?php echo date('d-D/M/Y'); ?> Todos os Direitos Reservados</p>
                    <p>Altered by: Caio H. Santos</p>
                    <p><a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a></p>

            </div>
        </footer>
    </div>

    <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>

    <script>
        $(function(){
            $('.toggle').click(function(){
                $('.layout').toggleClass('ativo');
                $('.menu-responsivo').toggleClass('ativo');
                $(this).toggleClass('ativo');
            });
            new WOW().init();
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
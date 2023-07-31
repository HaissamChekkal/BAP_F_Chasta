<!-- Scripts -->
<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/build/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/build/main.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/lib/owlcarrousel/owl.carousel.min.js"></script>

<?php global $tax; ?>
<script type="text/javascript">
    var currentTax = '<?php echo $tax; ?>';
    $(document).ready(function(){
        displayGoodMenu();
    });
    $('#menu-top').find('a').on('click',function(){
        var id = $(this).attr('id');
        if(id != undefined){
            currentTax = id;
            displayGoodMenu();
        }
    });

    /**
     * Display the sub menu of the current taxonomy
     */
    function displayGoodMenu(){
        $('#submenu').find('li').each(function(){
            if(!$(this).hasClass(currentTax))
                $(this).hide();
            else
                $(this).show();
        });

        var subsubmenu = $('#subsubmenu');

        var subsubmenuTax = subsubmenu.attr('data-tax');

        if(subsubmenuTax != currentTax)
            subsubmenu.hide();
        else
            subsubmenu.show();
    }
</script>
<!-- Google analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72854704-1', 'auto');
    ga('send', 'pageview');

</script>


</body>
</html>

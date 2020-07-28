
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
	
	function loadMore(e) {
        var theGrid = $('.blog-posts'),
            PostURL = $(this).attr('href');

        $(this).parent().remove();
        e.preventDefault();

        $.get(PostURL, function(data) {
            var jResult = $("<div></div>").append(data.replace( /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, ""));
            jResult.find('.blog-posts').children().appendTo(theGrid);
        });
    }
    $(document.body).on('click', '.more-button-container a', loadMore);

</script>

<?php wp_footer(); ?>

</body>
</html>
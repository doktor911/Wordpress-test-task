function load_films_ajax(page) {
    
    'use strict';
    let ajax_content = $('#ajax_films');
    //animation start here
    $.ajax({
        type: 'POST',
        url: ajaxurl,
        dataType: 'text',
        data: {
            action: 'load_films_ajax',
            paged: page
            
        },
        
        
        success: function (html) {
            
            if (page !== 1) {
                $('#load_films_ajax_more').remove();
                 // $('#examples_posts').removeClass('examples_row');
                ajax_content.append(html);
            } else {
                 // $('#examples_posts').removeClass('examples_row');
                 (this).preventDefault();
                $('#load_films_ajax_more').remove();
                ajax_content.html(html);
            }
        }

       



    });

    return false;
};


$(document).ready(function($){

    $(this).on('click', '#load_films_ajax_more', function () {
          $(this).parent().find('.show_box').addClass('is_loading');
          var pg = $(this).attr('data-href');
          load_films_ajax(pg === 1 ? 2 : pg);
          $(this).parent().remove();

          return false;
      });
})


    count_row= 0;
    function addcheckup(){
        count_row++;
        var table = $('#btn').append("<tr id='"+count_row+"'><td><input type='Date' class='form-control' name='date'></td><td><input type='text' class='form-control' name='fundoscopy'></td><td><button title='Remove input field' class='btn btn-danger' onclick='removerow("+count_row+")'>X</button></td></tr>");
    }

    function removerow(row_id){
            $('#'+row_id).remove();
        }


        jQuery(document).ready(function($){

            $('.live-search-list li').each(function(){
            $(this).attr('data-search-term', $(this).text().toLowerCase());
            });
            
            $('.live-search-box').on('keyup', function(){
            
            var searchTerm = $(this).val().toLowerCase();
            
                $('.live-search-list li').each(function(){
            
                    if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
            
                });
            
            });
            
            });
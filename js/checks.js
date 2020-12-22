

// hidded
var table='#employee_table'
$('#maxRows').on('change', function(){
    $('.pagination').html('')
    var trnum=0
    var maxRows=parseInt($(this).val())
    var totalRows= $(table+' tbody tr').length
    $(table+' tr:gt(0)').each(function(){
        trnum++
        if(trnum > maxRows){
            $(this).hide()
        }
        if(trnum <= maxRows){
            $(this).show()
        }
    })
    if(totalRows > maxRows){
        var pagenum = Math.ceil(totalRows/maxRows)
        for(var i=1;i<=pagenum;){
            $('.pagination').append('<li class="page-item" data-page="'+i+'"><span class="page-link">'+ i++ +'</span>\</li>').show()
        }
    }
    $('.pagination li:first-child').addClass('active')
    $('.pagination li').on('click',function(){
        var pageNum = $(this).attr('data-page')
        var trIndex=0;
        $('.pagination li').removeClass('active')
        $(this).addClass('active')
        $(table+' tr:gt(0)').each(function(){
            trIndex++
            if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                $(this).hide()
            } else {
                $(this).show()
            }
        
        })

    })
})
$(function(){
    $('table tr:eq(0)').prepend('<th>ID</th>')
    var id=0;
    $('table tr:gt(0)').each(function(){
        id++
        $(this).prepend('<td>'+id+'</td>')
    })
})

$(document).ready(function(){  
    $('#search').keyup(function(){  
         search_table($(this).val());  
    });  
    function search_table(value){  
         $('#employee_table tbody tr').each(function(){  
              var found = 'false';  
              $(this).each(function(){  
                   if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                   {  
                        found = 'true';  
                   }  
              });  
              if(found == 'true')  
              {  
                   $(this).show();  
              }  
              else  
              {  
                   $(this).hide();  
              }  
         });  
    }  
}); 
$(function () {
    $("#showhide").click(function () {
        if ($(this).is(":checked")) {
            $(".show").show();
            $(".btns").hide();
            $(".docx").show();
           

        } else {
            $(".show").hide();
            $(".btns").show();
            $(".docx").hide();

        }
    });
});

$("#checkall").change(function(){
    $(".checkboxitem").prop("checked", $(this).prop("checked"));
})
$(document).ready(()=>{
    $('#Search').click(()=>{
        $('#dialog').dialog({
            buttons:{
                "close":()=>{
                    $(this).dialog("close");
                }
            }
        });
    })
    $("#submit").button();   

    $('#settings').on('click',()=>{
        $('#contant').slideToggle()
    })
})
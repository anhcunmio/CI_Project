$(document).ready(function(){
    $(".link1").click(function(){
        var id = $(this).data("p-id");
        // console.log(id);
        var pid = "#p_toggle_" + id;
        $(pid).toggle(500);
    }) ;      
    	 
/**/
   
});


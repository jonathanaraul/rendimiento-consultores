function crearAjax()
{
    var xmlhttp=false;
     try
    {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
        try
        {
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
        catch (E)
        {
               xmlhttp = false;
          }
     }

    if (!xmlhttp && typeof XMLHttpRequest!='undefined')
    {
          xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function loadRelatorio()
{
        $( '#view-content' ).css({
        "min-width" : "1000px",
        "height" : "400px",
        "margin" : "0 auto",
        "max-width" : "1000px"
        });
    // creamos un nuevo objeto ajax
    ajax=crearAjax();

    ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
            document.getElementById('view-content').innerHTML=ajax.responseText;
        }
    }

    ajax.open("GET", "relatorio", true);
    ajax.send();
   
}
<h2>Lista de emails atualizada a cada segundo</h2>

<div class="box">
    <div id="lista_emails">
    </div>
</div>

<script type="text/javascript">
    function get_emails(){
        var feedback = $.ajax({
            type: "POST",
            url: "pages/ajax_response",
            success : function(data) {
               $('#lista_emails').html(data);
            }
        });

        console.log('teste');        
    }    

    $(function(){
        setInterval(function(){
            get_emails();
        }, 1000);
    });    
</script>
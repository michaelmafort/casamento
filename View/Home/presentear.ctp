<div id="gift-form">
    <span class="subtitle">Presentear</span>
    <?php
        echo $this->Form->create('Presente');
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->input('name', array('label' => 'Nome'));
        echo $this->Form->input('email', array('label' => 'Email'));
        echo $this->Form->input('comment', array('label' => 'Comentário'));
        echo $this->Form->submit('Cancelar', array('type' => 'reset'));
        echo $this->Form->end('Presentear.');
        
    ?>
</div>
<div id="presentes">
    
</div>
<div id="photo-legend">
    Todos os links dos produtos é apenas uma referencia, não sendo necessáriamente obrigatório comprar na loja que o produto foi linkado, este link serve apenas para facilitar a visualização dos detalhes do produto.<br><br>
    Endereço para entrega:
    <p>Rua João de Castro, 74 - Progresso<br>
    Brumadinho - Minas Gerais<br>
    CEP: 30460-000</p>
    Ao <strong>decidir qual presente</strong>, clique em <strong>vou presentear</strong>. <p>Abrirá uma janelinha para caso queira, vc poder informar seu nome, email e deixar um comentário.<br>É importante confirmar, para que não sejam comprados presentes iguais/repetidos.</p><p>Iremos responder a <strong>todos individualmente</strong> por cada presente.</p>
</div>
<style>
    .garantido{
        width:120px;
        color:#900;
        opacity:.7;
        position:absolute;
        height:80px;
        text-align: center;
        font-size:14px;
        padding-top:140px;
        font-weight: bold;
        background: url(/flavia_michael/img/bg-presente.png) no-repeat #FFF;
        
    }
    
    #photo-legend{
        opacity: 1;
        font-weight: normal;
    }
    span.subtitle{
        font-size:14px;
        color:#333;
        font-weight: bold;
    }
    #gift-form{
        font-size:12px;
        border:2px solid #ccc;
        border-radius:4px;
        background: #FFF;
        width: 400px;
        height:270px; 
        padding:10px 20px 10px 20px;
        position: absolute;
        top:0px;
        left:0px;
        display:none;
        z-index: 9999;
    }
    
    #gift-form label{
        clear: both;
        display:block;
    }
    
    #gift-form input, #gift-form textarea{
        width:400px;
    }
    
    #gift-form input[type='submit'], #gift-form input[type='reset']{
        width:160px;
        height:40px;
        float:left;
        margin-top:5px;
        margin-left:5px;
        border:0;
    }
    
    #gift-form input[type='submit']{
        background:#5BA150;
    }
    
    #gift-form input[type='reset']{
        background:#C00;
    }
    
    div.submit:first-child{
        position:relative;
        left: 100px;
    }
    #photo-legend{
        font-size:14px;
    }
    #presentes{
        padding:20px;
        display:table;
        background: #ddd;
        width:920px;
    }
    #presentes a{
        color:#333;
        text-decoration:none;
    }
    .presente{
        width: 120px;
        height:220px;
        text-align: center;
        font-size:12px;
        float:left;
        margin-right: 20px;
        border:1px solid #ccc;
        border-radius:3px;
        background:#FFF;
        padding:2px;
        margin-bottom: 20px;
    }
    
    .presente img{
        margin-bottom:5px;
    }
    .presente span.title{
        font-weight: bold;
    }
    
    .presente span.price{
        color:#C00;
    }
</style>
<script>
    $(document).ready(function(){
        $("#presentes").load("<?php echo $this->Html->url(array('controller' => 'presentes', 'action' => 'list_presentes'));?>");
        $(".bought").live('click', function(){
            var id = $(this).val();
            $("#PresenteId").val(id);
            var y = (window.screen.availHeight) + $(document).scrollTop();
            var x = (window.screen.availWidth);
            var label = $(this).parent().prev().find(".title").text();
            $("#gift-form span.subtitle").text(label);
            $("#gift-form").show().animate({
                left: ((x / 2) - 200) + "px",
                top: ((y / 2) - 150) + "px"
            }, 300);
        });
        
        $("#gift-form input[type='reset']").live('click', function(){
            $("#gift-form").hide();
        });
        
        $("#gift-form form").submit(function(){
            data = $(this).serialize();
            $.ajax({
                data: data,
                url: "<?php echo $this->Html->url(array('controller' => 'presentes', 'action' => 'gift'));?>",
                dataType: 'json',
                type: 'post',
                success: function(json) {
                    if(json.success) {
                        $("#gift-form").hide();
                        $("#presentes").load("<?php echo $this->Html->url(array('controller' => 'presentes', 'action' => 'list_presentes'));?>");
                    }
                    alert(json.message);
                }
            });
            
            return false;
        });
        
        $(".garantido").parent().find("input").attr('checked', 'checked');
    });
</script>
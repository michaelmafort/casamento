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
    <?php foreach($presentes as $presente) :?>
    <div class="presente">
        <a href="<?php echo $presente['Presente']['url'];?>" target="_blank"><?php echo $this->Html->image($presente['Presente']['image_url'], array('width' => 120));?><br>
        <span class="title"><?php echo $presente['Presente']['title'];?></span><br>
        <span class="price"><?php echo "R$", $presente['Presente']['price'];?></span></a>
        <?php echo $this->Form->input('bought', array('type' => 'checkbox', 'class' => 'bought', 'label' => 'Vou presentear', 'value' => $presente['Presente']['id']));?>
    </div>
    <?php endforeach;?>
</div>
<div id="photo-legend">
    Ao <strong>decidir qual presente</strong>, clique em <strong>vou presentear</strong>. <p>Abrirá uma janelinha para caso queira, vc poder informar seu nome, email e deixar um comentário.</p><p>Iremos responder a <strong>todos individualmente</strong> por cada presente.</p>
</div>
<style>
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
        height:250px; 
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
        $(".bought").click(function(){
            var id = $(this).val();
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
            var id = $("#gift-form")
            $.ajax({
                data: data,
                url: "<?php echo $this->Html->url(array('controller' => 'presentes', 'action' => 'gift'));?>" + "/" + id,
                dataType: 'json',
                type: 'post',
                success: function(json) {
                    if(json.success) {
                        $("#gift-form").hide();
                    }
                    alert(json.message);
                }
            });
        });
    });
</script>
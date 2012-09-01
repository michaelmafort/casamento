<div id="presentes">
    <?php foreach($presentes as $presente) :?>
    <div class="presente">
        <?php echo $this->Html->image($presente['Presente']['image_url'], array('width' => 120));?><br>
        <span class="title"><?php echo $presente['Presente']['title'];?></span><br>
        <span class="price"><?php echo "R$", $presente['Presente']['price'];?></span>
    </div>
    <?php endforeach;?>
</div>
<div id="photo-legend">
    Agradecemos a todos pela amizade.
</div>
<style>
    #presentes{
        padding:20px;
        display:table;
        background: #ddd;
        width:920px;
    }
    .presente{
        width: 120px;
        height:200px;
        text-align: center;
        font-size:12px;
        float:left;
        margin-right: 20px;
        border:1px solid #ccc;
        border-radius:3px;
        background:#FFF;
        padding:2px;
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
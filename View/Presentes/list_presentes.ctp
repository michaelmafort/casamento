<?php foreach($presentes as $presente) :?>
<div class="presente">
    <?php if($presente['Presente']['checked']) : ?>
    <div class="garantido">Presente garantido! <br><?php echo !empty($presente['Presente']['name']) ? "Obrigado " . $presente['Presente']['name'] : "";?></div>
    <?php endif; ?>
    <a href="<?php echo $presente['Presente']['url'];?>" target="_blank"><?php echo $this->Html->image($presente['Presente']['image_url'], array('width' => 120));?><br>
    <span class="title"><?php echo $presente['Presente']['title'];?></span><br>
    <span class="price"><?php echo "R$", $presente['Presente']['price'];?></span></a>
    <?php echo $this->Form->input('bought', array('type' => 'checkbox', 'class' => 'bought', 'label' => 'Vou presentear', 'value' => $presente['Presente']['id']));?>
</div>
<?php endforeach;?>
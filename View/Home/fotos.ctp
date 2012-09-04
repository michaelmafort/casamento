<div id="photos">
    <div id="nav-left">
        <div id="button-back" class="photo-arrow arrow-left"></div>
    </div>
    <div id="nav-right">
        <div id="button-next" class="photo-arrow arrow-right"></div>
    </div>
</div>
<div id="photo-legend">
</div>
<script>
    var photos = [
        {id: 1, label: "Nada é tão grande quanto o nosso amor!"},
        {id: 2, label: "Um sorriso, um olhar, diz mais do que mil palavras."},
        {id: 3, label: "Felizes como nunca!"},
        {id: 4, label: "Me seguraaaaaaa!"},
        {id: 5, label: "Porque quando estou com você, tudo fica mais feliz!"},
        {id: 6, label: "Com o seu beijo, fico o homem mais forte do mundo."},
        {id: 7, label: "Não importa quanta luz tenha no ambiente, você sempre me ilumina."},
        {id: 8, label: ""},
        {id: 9, label: ""},
        {id: 10, label: "Alimentando peixinhos na lagoa do Vale Verde."},
        {id: 11, label: "Preparando para carregar a noiva."},
        {id: 12, label: "Medalhista da natação brasileira :P"},
        {id: 13, label: "SIM!"},
        {id: 31, label: "Quer ser minha noiva!"},
        {id: 30, label: "Olha lá a foto meu amor!"},
        {id: 29, label: "Sempre juntos."},
        {id: 27, label: "Te levo aonde você quiser."},
        {id: 22, label: "Olha lá nosso(a) convidado(a)."},
        {id: 16, label: "Que beleza é estar em sua companhia."},
        {id: 14, label: "Simplesmente a mulher mais linda do mundo. Desculpem-me todas as convidadas, mas ela é D+"}
    ];
    var webroot = '<?php echo $this->Html->url('/img/fotos/');?>';
    
    var current = 0;
    $("#photos").css({'background': 'url('+webroot+'/'+(photos.length-1)+'.jpg)', backgroundPosition: '0 0'});
    var passagem = function(){
        $("#photos").css({'background': 'url('+webroot+'/'+photos[current].id+'.jpg)', backgroundPosition: '0 0'});
        $("#photo-legend").text(photos[current].label);
    }
    
    $("#button-next, #button-back").click(function(){
        if($(this).attr('id') == 'button-next') {
            current = (current >= (photos.length -1)) ? 0 : current+1;
        }else{
            current = (current <= 0) ? (photos.length -1) : current-1;
        }
        passagem();
    });
</script>
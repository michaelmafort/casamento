<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Casamento Flávia e Michael
	</title>
    <meta name="keywords" content="Casamento, Flávia, Michael, Flávia e Michael, Flávia & Michael"/>
    <meta name="description" content="Site do casamento da Flávia Romualdo e Michael Mafort"/>  
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <?php echo $this->Html->script('jquery-1.8.0.min.js');?>
    <?php echo $this->Html->script('jquery.backgroundpos.js');?>
    <style>
        body{
            background:url(img/bg.png) #D5D4C0;
            margin:0px;
            padding:0px;
            font-family: 'Trebuchet MS', 'arial';
        }
        
        #container{
            width:100%;
            display:table;
        }
        
        #header{
            height:270px;
            width:100%;
            background:#D5D4C0;
        }
        
        #subheader{
            width:960px;
            margin:0 auto;
        }
        
        #date{
            font-size:70px;
            color:#fff;
            background:#EBE7D4;
            width:310px;
            height:180px;
            float:left;
        }
        
        #date #calendar{
            text-align:center;
            height:100px;
            padding-top:20px;
        }
        
        #date #counting{
            background: #DDDAC8;
            text-align:center;
            font-size:32px;
            height:48px;
            padding-top:12px;
        }
        
        #bar{
            width:40px;
            height:180px;
            background:#D0CDBC;
            float:left;
        }
        
        #names{
            width:610px;
            height:180px;
            float:left;
            background:#B4B2A1 url(img/flavia_michael.png) no-repeat center;
        }
        
        #names h1{
            display:none;
        }
        
        #menus{
            width:960px;
            margin:0 auto;
            height:85px;
            border:1px solid #D5D4C0;
        }
        #menus ul li{
            height:85px;
            width:120px;
            list-style-type: none;
            display: inline;
            padding:0px 10px;
        }
        
        #content{
            width:960px;
            display:table;
            margin:0 auto;
        }
        
        #footer{
            width:960px;
            font-size:10px;
            color:#333;
            margin:0 auto;
            text-align: center;
            padding:30px;
        }
        #photos{
            border:4px solid #000;
            width:952px;
            height:492px;
            overflow:hidden;
            background-position: 0 0;
        }

        #photo-legend{
            background:#333;
            opacity:0.6;
            width:938px;
            padding:20px 7px;
            color:#fff;
            border:4px solid #000;
            font-size: 12px;
        }
        
        #nav-left, #nav-right{
            width:476px;
            height:500px;
            float:left;
        }
        
        a,a:hover{
            font-weight: bold;
            color: #FFF;
        }
        
        li.selected{
            border-bottom: 1px solid #333;
            height:60px;
        }
        
        #header-all{
            height:180px;
            background:#D0CDBC;
            width:100%;
        }
        
        h1{
            margin-top:0px;
        }
        
        .photo-arrow{
            width:83px;
            height:154px;
            margin-top:175px;
            cursor:pointer;
        }
        
        .arrow-left{
            float:left;
            background:url(img/setas-fotos.png) no-repeat -84px 0px;
        }
        
        .arrow-left:hover{
            float:left;
            background:url(img/setas-fotos.png) no-repeat -252px 0px;
        }
        
        .arrow-right{
            float:right;
            background:url(img/setas-fotos.png) no-repeat 0px 0px;
        }
        
        .arrow-right:hover{
            float:right;
            background:url(img/setas-fotos.png) no-repeat -168px 0px;
        }
        
        img{
            border:0px;
        }
        
        
        
        #feedback{
			position: fixed;
			top:100px;
			left:-362px;
                        background:#FFF;
		}
		#feedback form{
			float: left;
			border: 1px solid #999;
			padding: 10px;
			border-radius:5px;
		}
		#feedback form label{
			display: block;
			float: left;
			text-align:right;
			margin-right:20px;
			width:70px;
			font-weight:bold;
			color: 019AC6;
			font-size:14px;
		}
		#feedback a, #feedback a:hover{
			background:url(img/contact.jpg)  no-repeat center left transparent;
			display: block;
			width:40px;
			height:175px;
			float: left;
			text-indent:-9999em;
			position: absolute;
			top:120px;
			right:-40px;
		}
		#feedback form .btn{
			float: right;
			background:url("img/enviar.jpg")  no-repeat 0px 0px transparent;
			text-indent:-9999em;
			width:80px;
			height:28px;
			border:none;

		}
		#feedback form textarea{
			width:250px;
			height:140px;
			border: 1px solid #019AC6;
		}
		#feedback form input[type="text"]{
			width:250px;
			height:30px;
			border: 1px solid #019AC6;
		}
		#feedback h2{
			text-align:center;
			color: #019AC6;
			/*text-shadow:0.2px 0.3px 0.3px #000;*/
			font-size:22px;
		}
    </style>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2086904-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
	<div id="container">
		<div id="header">
                    <div id="menus">
                        <ul>
                            <li class="selected"><?php echo $this->Html->link($this->Html->image('home.png'), '/home', array('escape' => false));?></li>
                            <li><?php echo $this->Html->link($this->Html->image('igreja.png', array('style' => 'position:relative; top:10px;')), '/igreja', array('escape' => false));?></li>
                            <li><?php echo $this->Html->link($this->Html->image('luademel.png'), '/lua-de-mel', array('escape' => false));?></li>
                            <li><?php echo $this->Html->link($this->Html->image('padrinhos.png'), '/padrinhos', array('escape' => false));?></li>
                            <li><?php echo $this->Html->link($this->Html->image('fotos.png'), '/fotos', array('escape' => false));?></li>
                            <li><?php echo $this->Html->link($this->Html->image('presentear.png'), '/presentear', array('escape' => false));?></li>
                        </ul>
                    </div>
                    <div id="header-all">
                        <div id="subheader">
                            <div id="date">
                                <div id="calendar">13/10</div>
                                <div id="counting"><?php 
                                $dias = (date("z", strtotime("2012-10-13")) - date("z"));
                                $dias = ($dias > 1) ? "$dias dias." : "$dias dia.";
                                echo "Faltam ", $dias;?></div>
                            </div>
                            <div id="bar"></div>
                            <div id="names"><h1>Flávia & Michael</h1></div>
                        </div>
                    </div>
		</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
                    Flávia & Michael - Todos os direitos reservados - 2012.
		</div>
	</div>
        <div id="feedback">

            <form action="<?php echo $this->Html->url(array('controller' => 'contacts', 'action' => 'send'));?>" method="post">
			<h2>Mande sua mensagem!</h2>
			<p><label>Nome: </label><input name="data[Contact][name]" type="text" /></p>
			<p><label>Email: </label><input name="data[Contact][email]" type="text" /></p>
			<p><label>Assunto: </label><input name="data[Contact][subject]" type="text" /></p>
			<p><label>Mensagem: </label><textarea name="data[Contact][message]"></textarea></p>
			<p><input type="submit" value="Send&raquo;" class="btn"/></p>
		</form>
		<a href="#" class="pull_feedback" title="Envie sua mensagem">Contato</a>
	</div>
    <script>
        $(document).ready(function(){
            var loc = location.href;
            $("#menus li").removeClass('selected');
            $("#menus li").each(function(i){
                if(loc.indexOf($(this).find("a").attr('href')) != -1) {
                    $(this).addClass('selected');
                }
            });
            
            jQuery(".pull_feedback").toggle(function(){
                    jQuery("#feedback").animate({left:"0px"});
                    return false;
                },
                function(){
                    jQuery("#feedback").animate({left:"-362px"});	
                    return false;
                }
            );
                
            $("#feedback form").submit(function(){
                $.ajax({
                    url: $(this).attr('action'),
                    dataType: 'json',
                    data: $(this).serialize(),
                    type: 'post',
                    success: function(json) {
                        if(json.success) {
                            document.forms[0].reset();
                        }
                        alert(json.message);
                    }
                })
                return false;
            });
        });
    </script>
    
</body>
</html>

Olá {$this->request->data['Presente']['name']} é com grande prazer que 
                        agradecemos o sua preocupação em nos presentear. Ficamos muito contentes
                        primeiramente com sua amizade e generosidade em estar nos presenteando.<html>
    <head>
        <title>Casamento Flávia e Michael</title>
        <style>
            #convite{
                width:500px;
                margin:0 auto;
            }
            #photos{
                width:500px;
                margin:0 auto;
                border:2px solid #333;
            }
            
            p{
                font-family: 'Trebuchet MS', Arial, Verdana;
                font-size:13px;
            }
            
            h1{
                font-size:26px;
                font-weight: bold;
                color:#775128;
                font-family: 'Trebuchet MS';
                letter-spacing: -1px;
            }
        </style>
    </head>
<body>
    <div id="convite">
        <h1>Casamento Flávia & Michael</h1>
        <p>
            Olá <?php echo $this->request->data['Presente']['name'];?> é com grande prazer que agradecemos a sua preocupação em nos presentear.
        </p>
        <p>Ficamos muito contentes primeiramente por sua amizade e consideração e por nos presentear, mostrando um gesto de importância para conosco.</p>
        <p>Agora o que não pode faltar de forma alguma é a sua presença em nosso casamento.</p>
        <p>
            <strong>Quando?</strong> 13 de outubro de 2012 as 20:30.
        </p>
        <p>
            <strong>Onde?</strong> Igreja Matriz de São Sebastião (Brumadinho/MG). Rua Barão do Rio Branco, 165 - Centro - Brumadinho/MG.
        </p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDFToolKit - Info</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16"  href="/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <!-- Styles -->
        <style>
            *{
                padding: 0;
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            body{
                width: 100%;
                height: 100%;
            }

            .content{
                max-width: 700px;
                min-height: 100vh;
                margin: 0 auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .content-child{
                position: relative;
                min-height: 700px;
                width: 100%;
                background-color: #495b71;
                border-radius: 10px;
                box-shadow: 2px 24px 55px -28px rgba(72,90,112,1);
                display: flex;
                align-items: center;
                flex-direction: column;
                gap: 40px;
                padding: 20px
            }

            h1{
                color: rgb(226, 225, 225);
            }

            a{
                position: absolute;
                bottom: 0;
                right: 0;
                color: rgb(226, 225, 225);
                font-weight: 500;
                margin-right: 15px;
                margin-bottom: 5px;
                text-decoration: none;
            }

            p{
                color: rgb(226, 225, 225);
                font-size: 16px;
            }
            .sangria-1{
                margin-left: 20px; 
            }
            .sangria-2{
                margin-left: 40px; 
            }
            b{
                font-weight: 500;
                font-size: 18px;
            }

            .content-info{
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            h4{
                color: rgb(226, 225, 225);
            }

            @media monly screen and (max-width: 500px){
                .content{
                    margin: 10px 5px;
                }
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="content-child">
                <h1>PDFToolKit - Info</h1>
                
                <div class="content-info">
                    <h4>
                        Manejo de Objeto del file .txt:
                    </h4>
                    <p>
                        Cada {} es un objeto nuevo, siempre debe terminar en ",". Es lo mas recomendable y seguir la estructura que se ve a continuacion:
                    </p>
                    <p>
                        [<br>
                            <span class="sangria-1">{</span><br>
                                <span class="sangria-2"><b>"title":</b> "Titulo, recomendable no pasar de los 50 caracteres.",</span><br>
                                <span class="sangria-2"><b>"text":</b> "Texto largo, recomendable no pasar de los 350 caracteres.",</span><br>
                                <span class="sangria-2"><b>"ticket":</b> "Imagen del Ticket, recomendable no pasar de los 21 caracteres.",</span><br>
                                <span class="sangria-2"><b>"interaction":</b> "Imagen de Interaccion, recomendable no pasar de los 32 caracteres.",</span><br>
                                <span class="sangria-2"><b>"payment":</b> "Imagen de pago, recomendable no pasar de los 10 caracteres.",</span><br>
                                <span class="sangria-2"><b>"gift":</b> "Imagen de regalo, recomendable no pasar de los 12 caracteres."</span><br>
                            <span class="sangria-1">},</span><br>
                        ]
                    </p>

                    <p>
                        Si se desea agregar otro pdf con mas informacion, solo debe agregar otro:
                    </p>
                    <p>
                        <span>{</span><br>
                            <span class="sangria-1"><b>"title":</b> "Titulo, recomendable no pasar de los 50 caracteres.",</span><br>
                            <span class="sangria-1"><b>"text":</b> "Texto largo, recomendable no pasar de los 350 caracteres.",</span><br>
                            <span class="sangria-1"><b>"ticket":</b> "Imagen del Ticket, recomendable no pasar de los 21 caracteres.",</span><br>
                            <span class="sangria-1"><b>"interaction":</b> "Imagen de Interaccion, recomendable no pasar de los 32 caracteres.",</span><br>
                            <span class="sangria-1"><b>"payment":</b> "Imagen de pago, recomendable no pasar de los 10 caracteres.",</span><br>
                            <span class="sangria-1"><b>"gift":</b> "Imagen de regalo, recomendable no pasar de los 12 caracteres."</span><br>
                        <span>},</span><br>
                    </p>
                    <p style="margin: 0 0 10px 0;">
                        Como puede ver se agregar sin [], ya que solo se tiene que agregar el objeto. La cantidad de objetos determina la cantidad de PDFs.
                    </p>
                </div>

                <a href="/">Home</a>
            </div>
        </div>
    </body>
</html>

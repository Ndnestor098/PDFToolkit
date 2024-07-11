<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDFToolKit - Gallery Images</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16"  href="/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        
        <script src="https://kit.fontawesome.com/8f34396e62.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            *{
                padding: 0;
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-decoration: none;
                color: #000;
            }

            body{
                width: 100%;
                height: 100%;
            }

            .content{
                padding: 20px;
                display: flex;
                width: 100%;
                align-items: center;
                flex-direction: column;
                gap: 25px;
            }

            .contenedor{
                width: 100%;
                height: 100%;
                box-shadow: 2px 24px 55px -28px rgba(72,90,112,1);
                display: flex;
                justify-content: center;
            }

            .content-img{
                max-width: 900px;
                height: 100%;
                display: flex;
                flex-direction: column;
                gap: 15px;
                padding: 15px 0px; 
            }

            .imagenes{
                height: 200px;
                width: 140px;
                object-fit: cover;
                display: flex;
                flex-direction: column;
            }

            .icons{
                height: 90px;
                width: 90px;
                object-fit: cover;
                display: flex;
                flex-direction: column;
            }
            
            .images{
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center;
            }

            .title{
                width: 100%;

                h2{
                    color: #495b71;
                    font-weight: 600;
                    text-align: center;
                }
            }

            span{
                display: block;
                width: 100%;
                text-align: center;
            }

            a{
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .adding{
                position: fixed;
                top: 0;
                margin-top: 20px;
                left: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 30px;
                height: 120px;
            }

            .form-image, .form-icon{
                label {
                    cursor: pointer;
                    display: flex;
                    flex-direction: column;
                    position: relative;
                }

                i {
                    font-size: 20px;
                    color: #495b71;
                    text-align: center;
                }

                i:hover + span {
                    display: block;
                    position: absolute;
                    white-space: nowrap;
                    right: -28px;
                    top: -3px;
                }

                label span {
                    display: none;
                }
                input{
                    display: none;
                }
            }
            
        </style>
    </head>
    <body>
        <div class="content">
            <div class="contenedor">
                <div class="content-img">
                    <div class="title">
                        <h2>
                            Imagenes de Contenedores
                        </h2>
                    </div>
                    <div class="images">
                        @foreach ($images as $item)
                            <div>
                                <a href="/images/{{ $item }}" target="__blanck">
                                    <img class="imagenes" src="/images/{{ $item }}" alt="Image - {{ $item }}">
                                    <span>{{ $item }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="contenedor">
                <div class="content-img">
                    <div class="title">
                        <h2>
                            Iconos de Contenedores
                        </h2>
                    </div>
                    <div class="images">
                        @foreach ($icons as $item)
                            <div>
                                <a href="/icon/{{ $item }}" target="__blanck">
                                    <img class="icons" src="/icon/{{ $item }}" alt="Image - {{ $item }}">
                                    <span>{{ $item }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="adding">
            <form class="form-icon">
                @csrf
                <label>
                    <a href="/">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </label>
            </form>

            <form action="/upload/images-icons" method="post" class="form-image" id="form-image">
                @csrf
                <label for="image">
                    <i class="fa-regular fa-image"></i>
                    <span>Agregar Imagen</span>
                </label>
                <input type="file" id="image" name="image[]" accept="image/*" multiple>
                <button type="submit" style="display:none;">Subir Imágenes</button>
            </form>

            <form action="/upload/images-icons" method="post" class="form-icon" id="form-icon">
                @csrf
                <label for="icon">
                    <i class="fa-solid fa-icons"></i>
                    <span>Agregar Icono</span>
                </label>
                <input type="file" id="icon" name="icon[]" accept="image/*" multiple>
                <button type="submit" style="display:none;">Subir Iconos</button>
            </form>
        </div>
    </body>

    <script src="/js/send.js"></script>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDFToolKit</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16"  href="/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <!-- Styles -->
        <link rel="stylesheet" href="/styles/style.css">
    </head>
    <body>
        <div class="content">
            <div class="content-child">
                <h1>PDFToolKit</h1>
                <form id="form" action="/FilePDF" method="post" enctype="multipart/form-data" class="file-upload-form">
                    @csrf
                    <label for="file" class="file-upload-label">
                        <div class="file-upload-design">
                        <svg viewBox="0 0 640 512" height="1em">
                            <path
                                d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                            ></path>
                        </svg>
                        <span style="color: #000">Arrastra y Suelta</span>
                        <span style="color: #000">o</span>
                        <span class="browse-button">Browse file</span>
                        </div>
                        <input id="file" type="file" name="file" accept=".xlsx, .xls"/>
                    </label>

                    <span id="name" style="height:20px;color:#fff;font-weight: 500;"></span>

                    <div class="div-button">
                        <button  type="button"class="btn" id="uploadButton">
                            <i class="animation"></i>Enviar<i class="animation"></i>
                        </button>
                    </div>
                </form>
                <a href="#" style="margin-right: 15px;margin-bottom: 5px;bottom: 0;right: 0;">Informacion de uso</a>
                <a href="{{ route("images") }}" style="margin-left: 15px;margin-bottom: 5px;bottom: 0;left: 0;">Areas de imagenes</a>
            
                <div id="loading" class="content-load hidden">
                    <div class="banter-loader">
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                        <div class="banter-loader__box"></div>
                    </div>
    
                    <p>Los PDFs se están procesando, espere un momento por favor.</p>
                </div>
            </div>
        </div>
    </body>
    <script src="/js/control.js"></script>
</html>

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
        <link rel="stylesheet" href="/styles/style-gallery.css">
    </head>
    <body>
        <div id="content-images" class="content-add hidden">
            <div class="content-child">
                <h3 style="margin-bottom:20px; color:#495b71; font-weight:700;">Agregar Imagenes</h3>
                <form id="form" action="/upload/images-icons" method="post" enctype="multipart/form-data" class="file-upload-form">
                    @csrf
                    <div> 
                        <select name="pdf-images" id="pdf-images">
                            <option value="" disabled selected>Seleccionar un PDF</option>
                            @foreach ($htmls as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="image" class="file-upload-label-images">
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
                        <input type="file" id="image" name="image[]" accept="image/*" multiple>
                    </label>

                    <span id="error-image" style="height:20px;color:#e64747;font-weight: 500;"></span>

                    <div class="div-button">
                        <button type="button" class="btn" id="uploadButton-1">
                            <i class="animation"></i>Enviar<i class="animation"></i>
                        </button>
                    </div>
                </form>
            </div>

            <i id="close-images" style="position: absolute;right:30px;top:30px;font-size:30px;cursor:pointer;color:#5d7ea7;" class="fa-solid fa-xmark"></i>
        </div>

        <div id="content-icons" class="content-add hidden">
            <div class="content-child">
                <h3 style="margin-bottom:20px; color:#495b71; font-weight:700;">Agregar Iconos</h3>
                <form id="form-icon" action="/upload/images-icons" method="post" enctype="multipart/form-data" class="file-upload-form">
                    @csrf
                    <div> 
                        <select name="pdf-icon" id="pdf-icon">
                            <option value="" disabled selected>Seleccionar un PDF</option>
                            @foreach ($htmls as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="icon" class="file-upload-label-icon">
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
                        <input type="file" id="icon" name="icon[]" accept="image/*" multiple>
                    </label>

                    <span id="error-icon" style="height:20px;color:#e64747;font-weight: 500;"></span>

                    <div class="div-button">
                        <button type="button" class="btn" id="uploadButton-2">
                            <i class="animation"></i>Enviar<i class="animation"></i>
                        </button>
                    </div>
                </form>
            </div>

            <i id="close-icons" style="position: absolute;right:30px;top:30px;font-size:30px;cursor:pointer;color:#5d7ea7;" class="fa-solid fa-xmark"></i>
        </div>

        <div id="content-update" class="content-add hidden">
            <div class="content-child">
                <h3 style="margin-bottom:20px; color:#495b71; font-weight:700;">Actualizar las imagenes.</h3>
                <form id="form-icon" action="/FilePDF" method="post" enctype="multipart/form-data" class="file-upload-form">
                    @csrf
                    <div> 
                        <select name="pdf-update" id="pdf-update">
                            <option value="" disabled selected>Seleccionar un PDF</option>
                            @foreach ($htmls as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="file" class="file-upload-label-update">
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

                    <span id="error-update" style="height:20px;color:#e64747;font-weight: 500;">
                        Subir el excel guia y selecciona su plantilla.
                    </span>

                    <div class="div-button">
                        <button type="button" class="btn" id="uploadButton-3">
                            <i class="animation"></i>Enviar<i class="animation"></i>
                        </button>
                    </div>
                </form>
            </div>

            <i id="close-update" style="position: absolute;right:30px;top:30px;font-size:30px;cursor:pointer;color:#5d7ea7;" class="fa-solid fa-xmark"></i>
        </div>

        <div class="content">
            <div class="nav">
                @foreach ($htmls as $item)
                    <a href="{{ route('images',['template'=>$item->slug]) }}">{{ $item->name }}</a>
                @endforeach 
            </div>
            
            @if ($content)
                <div style="display: flex; gap: 15px; justify-content: center;">
                    @foreach ($html->pdfImage as $item)
                        <a href="{{ route('images', array_merge(request()->all(), ['pdf' => $item->name])) }}" style="color: #445569; font-weight: 700;">
                            {{ $item->name }}
                        </a>
                    @endforeach
                </div>
                <div class="contenedor">
                    <div class="content-img">
                        <div class="title">
                            <h2>
                                Imagenes de Contenedores
                            </h2>
                        </div>
                        <div class="images">
                            @foreach ($html->images as $item)
                                @if ($pdfs)
                                    <?php
                                        // Decode the URL JSON only if $pdfs is set
                                        $images = json_decode($pdfs->url, true);
                                    ?>
                                    @if ($images)
                                        @foreach ($images as $url)
                                            @if ('images/'.$item->url == $url)
                                                <div>
                                                    <a href="/images/{{ $item->url }}" target="__blanck">
                                                        <img class="imagenes" src="/images/{{ $item->url }}" alt="Image - {{ $item->url }}">
                                                    </a>
                                                    <span>
                                                        <i id="copy" class="fa-solid fa-copy" style="color:#495b71;" data-value="images/{{ $item->url }}"></i>
                                                        <a href="{{ route('delete.images', ['id'=>$item->id]) }}">
                                                            <i class="fa-solid fa-trash" style="color: #e64747;"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @else
                                    <div>
                                        <a href="/images/{{ $item->url }}" target="__blanck">
                                            <img class="imagenes" src="/images/{{ $item->url }}" alt="Image - {{ $item->url }}">
                                        </a>
                                        <span>
                                            <i id="copy" class="fa-solid fa-copy" style="color:#495b71;" data-value="images/{{ $item->url }}"></i>
                                            <a href="{{ route('delete.images', ['id'=>$item->id]) }}">
                                                <i class="fa-solid fa-trash" style="color: #e64747;"></i>
                                            </a>
                                        </span>
                                    </div>
                                @endif
                            @endforeach
                        </div> 
                    </div>
                </div>
                <div class="contenedor" style="margin-top: 20px;">
                    <div class="content-img">
                        <div class="title">
                            <h2>
                                Iconos de Contenedores
                            </h2>
                        </div>
                        <div class="images">
                            @foreach ($html->icons as $item)
                            @if ($pdfs)
                                <?php
                                    // Decode the URL JSON only if $pdfs is set
                                    $icons = json_decode($pdfs->url, true);
                                ?>
                                @if ($icons)
                                    @foreach ($icons as $url)
                                        @if ('icon/'.$item->url == $url)
                                            <div>
                                                <a href="/icon/{{ $item->url }}" target="__blanck">
                                                    <img class="icons" src="/icon/{{ $item->url }}" alt="Icon - {{ $item->url }}">
                                                </a>
                                                <span>
                                                    <i id="copy" class="fa-solid fa-copy" style="color:#495b71;" data-value="icon/{{ $item->url }}"></i>
                                                    <a href="{{ route('delete.icons', ['id'=>$item->id]) }}">
                                                        <i class="fa-solid fa-trash" style="color: #e64747;"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @else
                                <div>
                                    <a href="/icon/{{ $item->url }}" target="__blanck">
                                        <img class="icons" src="/icon/{{ $item->url }}" alt="Icon - {{ $item->url }}">
                                    </a>
                                    <span>
                                        <i id="copy" class="fa-solid fa-copy" style="color:#495b71;" data-value="icon/{{ $item->url }}"></i>
                                        <a href="{{ route('delete.icons', ['id'=>$item->id]) }}">
                                            <i class="fa-solid fa-trash" style="color: #e64747;"></i>
                                        </a>
                                    </span>
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </div>
            @endif
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

            <form class="form-image" id="images-click">
                <label>
                    <i class="fa-regular fa-image"></i>
                    <span>Agregar Imagen</span>
                </label>
            </form>

            <form class="form-icon" id="icon-click">
                <label>
                    <i class="fa-solid fa-icons"></i>
                    <span>Agregar Icono</span>
                </label>
            </form>

            <form class="form-icon" id="upload-click">
                <label>
                    <i class="fa-solid fa-upload"></i>
                    <span>Agregar Excel Guia para la Actualizacion</span>
                </label>
            </form>
        </div>

        <div id="alert-message" class="hidden info">
            <div class="info__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path></svg>
            </div>
            <div id="message" class="info__title"></div>
        </div>
    </body>

    <script src="/js/style.js"></script>
    <script src="/js/sendImages.js"></script>
    <script src="/js/sendIcon.js"></script>
    <script src="/js/copy.js"></script>
    <script src="/js/update.js"></script>

</html>
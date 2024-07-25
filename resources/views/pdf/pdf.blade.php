<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
    <title>PDF Prueba</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <style>
        body {
            z-index: -1;
            position: relative;
        }

        *{
            font-family: 'Helvetica', sans-serif; /* Usa Helvetica como fuente */
            margin: 0;
            padding: 0;
        }

        .ft00{
            font-size:19px;
            color:#161a24;
            position:absolute;
            top:1090px;
            left:41px;
            white-space:nowrap;
        }

        .ft01{
            font-size:33px;
            color:#43b4c5;
            position:absolute;
            top:52px;
            left:54px;
            width:386px;
        }

        .ft06{
            font-size:18px;
            line-height:21px;;
            color:#000000;
            position:absolute;
            top:210px;
            left:54px;
            width:351px;
            text-align: justify;
        }

        .ft05{
            font-size:18px;
            color:#fff;
            width: 100%;
            text-align: center;
        }

        .area-iconos{
            position: absolute;
            width: 350px;
            height: 550px;
            bottom: 0;
            margin-bottom: 105px;
            margin-left: 55px;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        span{
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 30px;
            align-items: center;
            justify-content: center;
        }

        .img-icon{
            display: block;
            margin-left: 140px;
        }
    </style>
</head>
<body>
    {{-- ------------------ PAGINA 1 ------------------ --}}
    <div style="position:relative;width:793px;overflow:hidden;height:1120px;">
        <div style="position:absolute;top:45px;right:0;width:745px;height:805px;background-color:#02000000;border-top: 5px solid #fff;border-right: none;border-bottom: 5px solid #fff;border-left: 5px solid #fff;"></div>

        <img style="right:0;top:0;object-fit:cover;width:793px;height:910px;" 
            src="{{ $data['page-1']['image-global']['value'] ? $data['page-1']['image-global']['value'] : "images/pdf-1-img-1-default.png" }}"
            alt="background image"/>

        
        <p style="position:absolute;top:82px;right:35px;white-space:nowrap;
            color:{{ $data['page-1']["title"]['color'] ? $data['page-1']["title"]['color'] : '#ffffff'}};
            font-size:50px;transform:scaleY(1.3);">
            <b>{{ $data['page-1']["title"]['value'] }}</b>
        </p>

        <img style="position:absolute;top:166px;right:35px;width:165px;height:75px" src="{{ $data['page-1']["firma-icon"]['value'] ? $data['page-1']["firma-icon"]['value'] : "icon/firma-default.png" }}" alt="icon-image">

        <div style="position:absolute;top:150px;right:35px;width:190px;background-color:#ffffff;height:2px;"></div>

        <p style="position:absolute;top:250px;right:35px;white-space:nowrap;
            color:{{ $data['page-1']['subtitle-1']['color'] ? $data['page-1']['subtitle-2']['color'] : '#ffffff' }};
            font-size:17px;transform:scaleY(1.2)">
            {{ $data['page-1']['subtitle-1']['value'] }}
        </p>
        <p style="position:absolute;top:280px;right:35px;white-space:nowrap;
            color:{{ $data['page-1']['subtitle-2']['color'] ? $data['page-1']['subtitle-2']['color'] : '#ffffff' }};
            font-size:17px;transform:scaleY(1.2)">
            {{ $data['page-1']['subtitle-2']['value'] }}
        </p>

        <img style="position:absolute;bottom:70px;left:45px;width:335px;height:50px" src="{{ $data['page-1']["logo-icon"]['value'] ? $data['page-1']["logo-icon"]['value'] : "icon/logo-default.png" }}" alt="icon-image">

        <div style="position:absolute;bottom:-1;right:0;width:750px;height:13px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 2 ------------------ --}}
    <div style="position:relative;width:793px;overflow:hidden;height:1122px;">
        <div style="width:793px;height:700px;position:relative;background-color:{{$data['page-2']['content-color']['color']?$data['page-2']['content-color']['color']:"#0a1b2e"}};"> 
            <p style="color:#0a1b2e;">I</p>
            <div style="position:absolute;top:65px;right:60px;width:250px;height:215px;color:#fff;">
                <a style="font-size:24px;text-align:justify;width:100%;">
                    <b style="color: {{ $data['page-2']['title']['color'] ? $data['page-2']['title']['color'] : "#fff"}}">
                        {!! $data['page-2']['title']['value'] !!}
                    </b>
                </a>
                <div style="font-size: 18px;">
                    <p style="margin-top: 30px;">
                        <a style="color: {{ $data['page-2']['text-1']['color'] ? $data['page-2']['text-1']['color'] : "#fff"}}">
                            {!! $data['page-2']['text-1']['value'] !!}
                        </a>
                    </p>
                    <p style="margin-top: 10px;">
                        <a style="color: {{ $data['page-2']['text-2']['color'] ? $data['page-2']['text-2']['color'] : "#fff"}}">
                            {!! $data['page-2']['text-2']['value'] !!}
                        </a>
                    </p>
                    <p style="margin-top: 10px;">
                        <a style="color: {{ $data['page-2']['text-3']['color'] ? $data['page-2']['text-3']['color'] : "#fff"}}">
                            {!! $data['page-2']['text-2']['value'] !!}
                        </a>
                    </p>
                </div>
            </div>

            <div style="position:absolute;height:323px;width:184px;top:49px;left:40px;border:10px solid #fff;">
                <img src="{{ $data['page-2']['img-1']['value'] ? $data['page-2']['img-1']['value'] : "images/pdf-1-img-2-default.png"}}" alt="img" height="323px" width="184px">
            </div>
            
            <div style="position:absolute;height:290px;width:220px;top:80px;left:225px;border:10px solid #fff;">
                <img src="{{ $data['page-2']['img-2']['value'] ? $data['page-2']['img-2']['value'] : "images/pdf-1-img-4-default.png" }}" alt="" height="290px" width="220px">
            </div>

            <div style="position:absolute;height:235px;width:284px;top:275px;left:135px;border:10px solid #fff;">
                <img src="{{ $data['page-2']['img-3']['value'] ? $data['page-2']['img-3']['value'] : "images/pdf-1-img-3-default.png"}}" alt="" height="235px" width="284px">
            </div>

            <div style="position:absolute;height:225px;width:130px;bottom:51px;left:173px;border:10px solid #fff;">
                <img src="{{ $data['page-2']['img-4']['value'] ? $data['page-2']['img-4']['value'] : "images/pdf-1-img-5-default.png"}}" alt="" height="225px" width="130px">
            </div>

            <div style="position:absolute;height:275px;width:440px;bottom:45px;right:40px;border:10px solid #fff;">
                <img src="images/map-default.png" alt="" height="275px" width="440px">
                <b style="color:{{ $data['page-2']['map-num']['color'] ? $data['page-2']['map-num']['color'] : "#43b4c5"}};position:absolute;left:45;top:67;">{{ explode(',', trim($data['page-2']['map-num']['value'], "[]"))[0] }}</b>
                <b style="color:{{ $data['page-2']['map-num']['color'] ? $data['page-2']['map-num']['color'] : "#43b4c5"}};position:absolute;left:93;top:78;">{{ explode(',', trim($data['page-2']['map-num']['value'], "[]"))[1] }}</b>
                <b style="color:{{ $data['page-2']['map-num']['color'] ? $data['page-2']['map-num']['color'] : "#43b4c5"}};position:absolute;right:183px;top:148px;">{{ explode(',', trim($data['page-2']['map-num']['value'], "[]"))[2] }}</b>
                <b style="color:{{ $data['page-2']['map-num']['color'] ? $data['page-2']['map-num']['color'] : "#43b4c5"}};position:absolute;right:43px;top:180px;">{{ explode(',', trim($data['page-2']['map-num']['value'], "[]"))[3] }}</b>

                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;left:2px;top:106px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[0] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;left:40px;top:75px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[1] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;left:72px;top:115px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[2] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;left:110px;top:85px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[3] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;left:160px;top:108px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[4] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;right:210px;bottom:100px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[5] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;right:210px;bottom:60px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[6] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;right:180px;bottom:140px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[7] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;right:120px;bottom:130px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[8] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;right:140px;bottom:100px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[9] }}</a>
                <a style="color:{{ $data['page-2']['map-name']['color'] ? $data['page-2']['map-name']['color'] : "#43b4c5"}};position:absolute;right:70px;bottom:85px;font-size:8px;">{{ explode(',', trim($data['page-2']['map-name']['value'], "[]"))[10] }}</a>
            </div>
        </div>

        <div style="width:793px;height:422px;position:relative;">
            <div style="position:absolute;width:690px;heigth:100%;right:50px;top:45px;">
                <b style="font-size:25px;transform:scaleY(1.3);color:{{ $data['page-2']['title-2']['color'] ? $data['page-2']['title-2']['color'] :"#2c2c2c" }}">{{ $data['page-2']['title-2']['value'] }}</b>
                <br><br>
                <p style="text-align:justify;font-size:15px;color:{{ $data['page-2']['text-4']['color'] ? $data['page-2']['text-4']['color'] :"#2c2c2c" }} ;transform:scaleY(1.1);">
                    {!! $data['page-2']['text-4']['value'] !!}
                </p>
                <br>
                <p style="text-align:justify;font-size:15px;color:{{ $data['page-2']['text-5']['color'] ? $data['page-2']['text-5']['color'] :"#2c2c2c" }};transform:scaleY(1.1);">
                    {!! $data['page-2']['text-5']['value'] !!}
                </p>
            </div>

            <div style="position:absolute;width:655px;heigth:114px;left:52px;bottom:50px;background-color:#f5f6f8;padding:15px 20px">
                <b style="color:{{ $data['page-2']['title-3']['color'] ? $data['page-2']['title-3']['color'] : "#43b4c5"}} ; font-size:18px">{{ $data['page-2']['title-3']['value'] }}</b>
                <p style="text-align:justify;font-size:15px;color:{{ $data['page-2']['text-6']['color'] ? $data['page-2']['text-6']['color'] :"#2c2c2c" }};transform:scaleY(1.1);width:655px;margin-top: 10px;">
                    {!! $data['page-2']['text-6']['value'] !!}
                </p>
            </div>

            <div style="position:absolute;bottom:0;right:0;width:746px;border: 5px solid #0a1b2e;">
            </div>

            <b style="position:absolute;bottom:15px;left:35px;">1</b>
        </div>
    </div>
    
    {{-- ------------------ PAGINA 3 ------------------ --}}
    <div style="position:relative;width:892px;height:1122px;">
        <img style="width:449px;height:1120px;;position:absolute;right: 0;top: 0;" 
            src="{{ $data['page-3']["image-global"]['value'] ? $data['page-3']["image-global"]['value'] : "images/pdf-1-img-14-default.png" }}" 
            alt="background image"/>

        <p class="ft01" style="color:{{ $data['page-3']['title']['color'] ? $data['page-3']['title']['color'] : ""; }}">
            <b>
                {{ $data['page-3']['title']['value'] }}
            </b>
        </p>

        <p class="ft06" style="color:{{ $data['page-3']['text-1']['color'] ? $data['page-3']['text-1']['color'] : ""; }}">
            {{ $data['page-3']['text-1']['value'] }}
        </p>

        <div class="area-iconos" style="background-color:{{ $data['page-3']["content-color"]['color'] ? $data['page-3']['content-color']['color'] : "#0d1b2a" }}">
            <span>
                <img src="{{ $data['page-3']['ticket-icon']['value'] ? $data['page-3']['ticket-icon']['value'] : "icon/ticket-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">

                <p class="ft05" style="color:{{ $data['page-3']['text-2']['color'] ? $data['page-3']['text-2']['color'] : ""; }}">
                    {{ $data['page-3']['text-2']['value'] }}
                </p>
            </span>
            <span>
                <img src="{{ $data['page-3']['interaction-icon']['value'] ? $data['page-3']['interaction-icon']['value'] : "icon/conversation-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">

                <p class="ft05" style="color:{{ $data['page-3']['text-3']['color'] ? $data['page-3']['text-3']['color'] : "" }}">
                    {{ $data['page-3']['text-3']['value'] }}
                </p>
            </span>
            <span>
                <img src="{{ $data['page-3']['payment-icon']['value'] ? $data['page-3']['payment-icon']['value'] : "icon/pay-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">

                <p class="ft05" style="color:{{ $data['page-3']['text-4']['color'] ? $data['page-3']['text-4']['color'] : "" }}">
                    {{ $data['page-3']['text-4']['value'] }}
                </p>
            </span>
            <span>
                <img style="margin-left: 135px;" src="{{ $data['page-3']['gift-icon']['value'] ? $data['page-3']['gift-icon']['value'] : "icon/free-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">
                    
                <p class="ft05" style="color:{{ $data['page-3']['text-5']['color'] ? $data['page-3']['text-5']['color'] : "" }}">
                    {{ $data['page-3']['text-5']['value'] }}
                </p>
            </span>
        </div>

        <p class="ft00"><b>2</b></p>
        
        <div style="position:absolute;bottom:-1;right:0;width:850px;height:10px;background-color:#0a1b2e;"></div>
    </div> 

    {{-- ------------------ PAGINA 4 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <img width="100%" height="100%" src="images/pdf-1-img-6-default.png" alt="background image"/> 
        <div style="position:absolute;background-color:{{$data["page-4"]['content-color']['color']? $data["page-4"]['content-color']['color']: "#0a1b2e"}};width:425px;height:530px;right:40px;bottom:8px;">
            <img src="{{ $data['page-4']['comilla-icon']['value'] ? $data['page-4']['comilla-icon']['value'] : "icon/comilla-default.png"}}" style="position:absolute;top:30px;left:25px;" height="65px" width="87px">
            <div style="position:absolute;left:30px;top:115px;width:360px">
                <p style="text-align: justify;line-height: 1.5;color:{{$data['page-4']['text']['color']?$data['page-4']['text']['color']: "#fff"}};">
                    {!! $data['page-4']['text']['value'] !!}
                </p>
            </div>
            <div style="position:absolute;left:30px;bottom:35px;width:360px">
                <b style="font-size:20px;color:{{ $data['page-4']['name']['color'] ? $data['page-4']['name']['color'] : "#fff"}};">
                    {!! $data['page-4']['name']['value'] !!}
                </b>
                <br>
                <b style="font-size:20px;color:{{ $data['page-4']['work-name']['color'] ? $data['page-4']['work-name']['color'] : "#fff"}};">
                    {!! $data['page-4']['work-name']['value'] !!}
                </b>
            </div>

        </div>
        <b style="position:absolute;bottom:15px;left:35px">3</b>
        <div style="position:absolute;bottom:-1px;right:0px;width:758px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 5 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <div style="height: 375px; width:100%;">
            <h1 style="color:#fff">h</h1>
            <b style="position:absolute;top:50px;left:50px;font-size:28px;transform:scaleY(1.1);color:{{ $data['page-5']['title']['color'] ? $data['page-5']['title']['color'] : "#43b4c5" }};">
                {!! $data['page-5']['title']['value'] !!}
            </b>
            <p style="text-align:justify;width:695px;position:absolute;top:110px;left:50px;color:{{ $data['page-5']['text']['color'] ? $data['page-5']['text']['color'] : "#000" }}">
                {!! $data['page-5']['text']['value'] !!}
            </p>
            <ul style="text-align:justify;width:695px;position:absolute;top:175px;left:65px;line-height: 1.5;">
                <li style="color:{{ $data['page-5']['indice-1']['color'] ? $data['page-5']['indice-1']['color'] : "#000"}}"> 
                    {!! $data['page-5']['indice-1']['value'] !!}
                </li>
                <li style="color:{{ $data['page-5']['indice-2']['color'] ? $data['page-5']['indice-2']['color'] : "#000"}}">
                    {!! $data['page-5']['indice-2']['value'] !!}
                </li>
                <li style="color:{{ $data['page-5']['indice-3']['color'] ? $data['page-5']['indice-3']['color'] : "#000"}}">
                    {!! $data['page-5']['indice-3']['value'] !!}
                </li>
                <li style="color:{{ $data['page-5']['indice-4']['color'] ? $data['page-5']['indice-4']['color'] : "#000"}}">
                    {!! $data['page-5']['indice-4']['value'] !!}
                </li>
                <li style="color:{{ $data['page-5']['indice-5']['color'] ? $data['page-5']['indice-5']['color'] : "#000"}}">
                    {!! $data['page-5']['indice-5']['value'] !!}
                </li>
                <li style="color:{{ $data['page-5']['indice-6']['color'] ? $data['page-5']['indice-6']['color'] : "#000"}}">
                    {!! $data['page-5']['indice-6']['value'] !!}
                </li>
            </ul>
        </div>

        <img src="{{ $data['page-5']['image-global']['value'] ? $data['page-5']['image-global']['value'] : "images/pdf-1-img-7-default.png"}}" style="width:793px;height:746px"/>
        <b style="position:absolute;bottom:15px;left:35px;color:#fff">4</b>
        <div style="position:absolute;bottom:0px;right:0px;width:752px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 6 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <b style="position:absolute;top:57px;left:50px;font-size:28px;color:{{$data['page-6']['title']['color']?$data['page-6']['title']['color']:"#43b4c5"}};">
            {!! $data['page-6']['title']['value'] !!}
        </b>

        <div style="position:absolute;height:890px;width:695px;top:128px;left:50px;">
            <div style="background-color:{{$data['page-6']['content-color']['color']?$data['page-6']['content-color']['color']:"#0a1b2e"}};position:absolute;left:0:top:0;width:210px;height:890px;">
                <img src="images/pdf-1-img-15-default.png" style="position:absolute;height:100%;left:54px;top:0;">
                
                <img src="{{ $data['page-6']["bloque-icon"]['value']?$data['page-6']["bloque-icon"]['value']:"icon/lego-default.png"}}" style="position:absolute;left:22px;top:25px;" height="60px" width="89px">
                <img src="{{ $data['page-6']["ia-icon"]['value']?$data['page-6']["ia-icon"]['value']:"icon/ai-default.png"}}" style="position:absolute;top:170px;right:30px;" height="65px" width="65px">
                <img src="{{ $data['page-6']["estadistica-icon"]['value']?$data['page-6']["estadistica-icon"]['value']:"icon/estadistica-default.png"}}" style="position:absolute;top:350px;left:30px;" height="50px" width="65px">
                <img src="{{ $data['page-6']["lupa-icon"]['value']?$data['page-6']["lupa-icon"]['value']:"icon/lupa-default.png"}}" style="position:absolute;top:500px;right:30px;" height="65px" width="65px">
                <img src="{{ $data['page-6']["resultado-icon"]['value']?$data['page-6']["resultado-icon"]['value']:"icon/resultado-default.png"}}" style="position:absolute;bottom:165px;left:30px;" height="65px" width="65px">
                <img src="{{ $data['page-6']["exito-icon"]['value']?$data['page-6']["exito-icon"]['value']:"icon/exito-default.png"}}" style="position:absolute;bottom:30px;right:30px;" height="65px" width="65px">

                <b style="position: absolute;top: 74px;right: 27px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-6']['color-num']['color']?$data['page-6']['color-num']['color']:"#43b4c5"}};">
                    1
                </b>
                <b style="position: absolute;top: 214px;left: 75px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-6']['color-num']['color']?$data['page-6']['color-num']['color']:"#43b4c5"}};"">
                    2
                </b>
                <b style="position: absolute;top: 355px;right: 27px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-6']['color-num']['color']?$data['page-6']['color-num']['color']:"#43b4c5"}};"">
                    3
                </b>
                <b style="position: absolute;top: 487px;left: 75px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-6']['color-num']['color']?$data['page-6']['color-num']['color']:"#43b4c5"}};"">
                    4
                </b>
                <b style="position: absolute;bottom: 195px;right: 27px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-6']['color-num']['color']?$data['page-6']['color-num']['color']:"#43b4c5"}};"">
                    5
                </b>
                <b style="position: absolute;bottom: 40px;left: 80px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-6']['color-num']['color']?$data['page-6']['color-num']['color']:"#43b4c5"}};"">
                    6
                </b>
            </div>

            <div style="background-color:#f3f3f6;position:absolute;right:0;top:0;width:490px;height:890px;">
                <div style="width: 430px; position: absolute;top:32px; left:32px">
                    <b style="font-size: 20px;transform:scaleY(1.1);color:{{$data['page-6']['subtitle-1']['color']?$data['page-6']['subtitle-1']['color']:"#43b4c5"}};">
                        {!! $data['page-6']['subtitle-1']['value'] !!}
                    </b>
                    <p style="text-align:justify;font-size:15px;margin-top:10px;transform:scaleY(1.1);color:{{$data['page-6']['text-1']['color']?$data['page-6']['text-1']['color']:"#000"}};">
                        {!!$data['page-6']['text-1']['value']!!}
                    </p>
                </div>
                <div style="width: 430px; position: absolute;top:190px; left:32px">
                    <b style="font-size: 20px;transform:scaleY(1.1);color:{{$data['page-6']['subtitle-2']['color']?$data['page-6']['subtitle-2']['color']:"#43b4c5"}};">
                        {!! $data['page-6']['subtitle-2']['value'] !!}
                    </b>
                    <p style="text-align:justify;font-size:15px;margin-top:10px;transform:scaleY(1.1);color:{{$data['page-6']['text-2']['color']?$data['page-6']['text-2']['color']:"#000"}};">
                        {!!$data['page-6']['text-2']['value']!!}
                    </p>
                </div>
                <div style="width: 430px; position: absolute;top:345px; left:32px">
                    <b style="font-size: 20px;transform:scaleY(1.1);color:{{$data['page-6']['subtitle-3']['color']?$data['page-6']['subtitle-3']['color']:"#43b4c5"}};">
                        {!! $data['page-6']['subtitle-3']['value'] !!}
                    </b>
                    <p style="text-align:justify;font-size:15px;margin-top:10px;transform:scaleY(1.1);color:{{$data['page-6']['text-3']['color']?$data['page-6']['text-3']['color']:"#000"}};">
                        {!!$data['page-6']['text-3']['value']!!}
                    </p>
                </div>
                <div style="width: 430px; position: absolute;bottom:330px; left:32px">
                    <b style="font-size: 20px;transform:scaleY(1.1);color:{{$data['page-6']['subtitle-4']['color']?$data['page-6']['subtitle-4']['color']:"#43b4c5"}};">
                        {!! $data['page-6']['subtitle-4']['value'] !!}
                    </b>
                    <p style="text-align:justify;font-size:15px;margin-top:10px;transform:scaleY(1.1);color:{{$data['page-6']['text-4']['color']?$data['page-6']['text-4']['color']:"#000"}};">
                        {!!$data['page-6']['text-4']['value']!!}
                    </p>
                </div>
                <div style="width: 430px; position: absolute;bottom:175px; left:32px">
                    <b style="font-size: 20px;transform:scaleY(1.1);color:{{$data['page-6']['subtitle-5']['color']?$data['page-6']['subtitle-5']['color']:"#43b4c5"}};">
                        {!! $data['page-6']['subtitle-5']['value'] !!}
                    </b>
                    <p style="text-align:justify;font-size:15px;margin-top:10px;transform:scaleY(1.1);color:{{$data['page-6']['text-5']['color']?$data['page-6']['text-5']['color']:"#000"}};">
                        {!!$data['page-6']['text-5']['value']!!}
                    </p>
                </div>
                <div style="width: 430px; position: absolute;bottom:35px; left:32px">
                    <b style="font-size: 20px;transform:scaleY(1.1);color:{{$data['page-6']['subtitle-6']['color']?$data['page-6']['subtitle-6']['color']:"#43b4c5"}};">
                        {!! $data['page-6']['subtitle-6']['value'] !!}
                    </b>
                    <p style="text-align:justify;font-size:15px;margin-top:10px;transform:scaleY(1.1);color:{{$data['page-6']['text-6']['color']?$data['page-6']['text-6']['color']:"#000"}};">
                        {!!$data['page-6']['text-6']['value']!!}
                    </p>
                </div>
            </div>
        </div>

        <p class="ft00"><b>5</b></p>
        
        <div style="position:absolute;bottom:0px;right:0px;width:752px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 7 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <div style="position:absolute;top:0;left:0;height:512px;width:100%;">
            <b style="position: absolute;top:45px; width:100%;text-align:center;font-size:25px;transform:scaleY(1.2);color:{{$data['page-7']['title']['color']?$data['page-7']['title']['color']:"#43b4c5"}};">
                {!!$data['page-7']['title']['value']!!}
            </b>

            <div style="position: absolute; top: 155px; left: 47px; border-radius: 10%; height: 310px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-7']['content-subtitle-color']['color']?$data['page-7']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-7']['subtitle-1']['color']?$data['page-7']['subtitle-1']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-7']['subtitle-1']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:20px;width:185px;font-size:13px;text-align:center;line-height:20px;color:{{$data['page-7']['text-1']['color']?$data['page-7']['text-1']['color']:"#000"}}">
                    {!! $data['page-7']['text-1']['value'] !!}
                </p>
            </div>
            <div style="background-color:{{$data['page-7']['content-subtitle-color']['color']?$data['page-7']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:123px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-7']['advertencia-icon']['value']?$data['page-7']['advertencia-icon']['value']:"icon/advertencia-default.png"}}" style="height:50px;width:55px;position: absolute; top:9px; left:8px">
            </div>

            <div style="position: absolute; top: 155px; left: 285px; border-radius: 10%; height: 310px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-7']['content-subtitle-color']['color']?$data['page-7']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-7']['subtitle-2']['color']?$data['page-7']['subtitle-2']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-7']['subtitle-2']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:20px;width:185px;font-size:13px;text-align:center;line-height:20px;{{$data['page-7']['text-2']['color']?$data['page-7']['text-2']['color']:"#000"}}">
                    {!! $data['page-7']['text-2']['value'] !!}
                </p>
            </div>
            <div style="background-color:{{$data['page-7']['content-subtitle-color']['color']?$data['page-7']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:361px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-7']['idea-icon']['value']?$data['page-7']['idea-icon']['value']:"icon/idea-default.png"}}" style="height:50px;width:55px;position: absolute; top:9px; left:8px">
            </div>

            <div style="position: absolute; top: 155px; left: 525px; border-radius: 10%; height: 310px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-7']['content-subtitle-color']['color']?$data['page-7']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-7']['subtitle-3']['color']?$data['page-7']['subtitle-3']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-7']['subtitle-3']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:20px;width:185px;font-size:13px;text-align:center;line-height:20px;color:{{$data['page-7']['text-3']['color']?$data['page-7']['text-3']['color']:"#000"}}">
                    {!! $data['page-7']['text-3']['value'] !!} 
                </p>
            </div>
            <div style="background-color:{{$data['page-7']['content-subtitle-color']['color']?$data['page-7']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:601px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-7']['result-icon']['value']?$data['page-7']['result-icon']['value']:"icon/result-default.png"}}" style="height:50px;width:50px;position: absolute; top:9px; left:10px">
            </div>

        </div>

        <img src="{{$data['page-7']['image-global']['value']?$data['page-7']['image-global']['value']:"images/pdf-1-img-8-default.png"}}" style="position: absolute;bottom:0;left:0;height:610px;width:100%;">

        <p class="ft00" style="color:#fff;"><b>6</b></p>
        <div style="position:absolute;bottom:-1px;right:0px;width:757px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 8 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <img src="{{ $data['page-8']["image-global"]['value'] ? $data['page-8']["image-global"]['value'] : "images/pdf-1-img-9-default.png"}}" style="position:absolute;top:0;height:520px;width:100%">
        
        <div style="position:absolute;bottom:0;left:0;height:599px;width:100%;">
            <b style="position: absolute;top:45px; width:100%;text-align:center;font-size:25px;transform:scaleY(1.2);color:{{$data['page-8']['title']['color']?$data['page-8']['title']['color']:"#43b4c5"}};">
                {!!$data['page-8']['title']['value']!!}
            </b>

            <div style="position: absolute; top: 155px; left: 47px; border-radius: 10%; height: 380px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-8']['content-subtitle-color']['color']?$data['page-8']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-8']['subtitle-1']['color']?$data['page-8']['subtitle-1']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-8']['subtitle-1']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:20px;width:185px;font-size:13px;text-align:center;line-height:20px;color:{{$data['page-8']['text-1']['color']?$data['page-8']['text-1']['color']:"#000"}}">
                    {!! $data['page-8']['text-1']['value'] !!}
                </p>
            </div>
            <div style="background-color:{{$data['page-8']['content-subtitle-color']['color']?$data['page-8']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:123px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-8']['advertencia-icon']['value']?$data['page-8']['advertencia-icon']['value']:"icon/advertencia-default.png"}}" style="height:50px;width:55px;position: absolute; top:9px; left:8px">
            </div>

            <div style="position: absolute; top: 155px; left: 285px; border-radius: 10%; height: 380px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-8']['content-subtitle-color']['color']?$data['page-8']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-8']['subtitle-2']['color']?$data['page-8']['subtitle-2']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-8']['subtitle-2']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:15px;width:190px;font-size:13px;text-align:center;line-height:20px;{{$data['page-8']['text-2']['color']?$data['page-8']['text-2']['color']:"#000"}}">
                    {!! $data['page-8']['text-2']['value'] !!}
                </p>
            </div>
            <div style="background-color:{{$data['page-8']['content-subtitle-color']['color']?$data['page-8']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:361px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-8']['idea-icon']['value']?$data['page-8']['idea-icon']['value']:"icon/idea-default.png"}}" style="height:50px;width:55px;position: absolute; top:9px; left:8px">
            </div>

            <div style="position: absolute; top: 155px; left: 525px; border-radius: 10%; height: 380px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-8']['content-subtitle-color']['color']?$data['page-8']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-8']['subtitle-3']['color']?$data['page-8']['subtitle-3']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-8']['subtitle-3']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:20px;width:185px;font-size:13px;text-align:center;line-height:20px;color:{{$data['page-8']['text-3']['color']?$data['page-8']['text-3']['color']:"#000"}}">
                    {!! $data['page-8']['text-3']['value'] !!} 
                </p>
            </div>
            <div style="background-color:{{$data['page-8']['content-subtitle-color']['color']?$data['page-8']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:601px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-8']['result-icon']['value']?$data['page-8']['result-icon']['value']:"icon/result-default.png"}}" style="height:50px;width:50px;position: absolute; top:9px; left:10px">
            </div>

        </div>

        <p class="ft00"><b>7</b></p>
        <div style="position:absolute;bottom:0px;right:0px;width:752px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 9 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <img src="{{$data['page-9']['image-global']['value']?$data['page-9']['image-global']['value']:"images/pdf-1-img-10-default.png"}}" style="height: 100%;width:100%">

        <div style="position:absolute;background-color:{{$data["page-9"]['content-color']['color']? $data["page-9"]['content-color']['color']: "#0a1b2e"}};height:478px;width:422px;left:20px;top:0;">
            <img src="{{ $data['page-9']['comilla-icon']['value'] ? $data['page-9']['comilla-icon']['value'] : "icon/comilla-default.png"}}" style="position:absolute;top:30px;left:25px;" height="65px" width="87px">
            <div style="position:absolute;left:30px;top:110px;width:360px;font-size:15px;">
                <p style="text-align: justify;line-height: 1.5;color:{{$data['page-9']['text']['color']?$data['page-9']['text']['color']: "#fff"}};">
                    {!! $data['page-9']['text']['value'] !!}
                </p>
            </div>
            <div style="position:absolute;left:30px;bottom:20px;width:360px">
                <b style="font-size:19px;color:{{ $data['page-9']['name']['color'] ? $data['page-9']['name']['color'] : "#fff"}};">
                    {!! $data['page-9']['name']['value'] !!}
                </b>
                <br>
                <b style="font-size:19px;color:{{ $data['page-9']['work-name']['color'] ? $data['page-9']['work-name']['color'] : "#fff"}};">
                    {!! $data['page-9']['work-name']['value'] !!}
                </b>
            </div>
        </div>

        <p class="ft00" style="color: #fff;left:32px"><b>8</b></p>
        <div style="position:absolute;bottom:-1px;right:0px;width:758px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 10 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <div style="position:absolute;bottom:0;left:0;height:100%;width:100%;">
            <b style="position: absolute;top:45px; width:100%;text-align:center;font-size:25px;transform:scaleY(1.2);color:{{$data['page-10']['title']['color']?$data['page-10']['title']['color']:"#43b4c5"}};">
                {!!$data['page-10']['title']['value']!!}
            </b>

            <div style="position: absolute; top: 155px; left: 47px; border-radius: 10%; height: 350px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-10']['content-subtitle-color']['color']?$data['page-10']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-10']['subtitle-1']['color']?$data['page-10']['subtitle-1']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-10']['subtitle-1']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:15px;width:190px;font-size:13px;text-align:center;line-height:20px;color:{{$data['page-10']['text-1']['color']?$data['page-10']['text-1']['color']:"#000"}}">
                    {!! $data['page-10']['text-1']['value'] !!}
                </p>
            </div>

            <div style="background-color:{{$data['page-10']['content-subtitle-color']['color']?$data['page-10']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:123px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-10']['advertencia-icon']['value']?$data['page-10']['advertencia-icon']['value']:"icon/advertencia-default.png"}}" style="height:50px;width:55px;position: absolute; top:9px; left:8px">
            </div>

            <div style="position: absolute; top: 155px; left: 285px; border-radius: 10%; height: 350px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-10']['content-subtitle-color']['color']?$data['page-10']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-10']['subtitle-2']['color']?$data['page-10']['subtitle-2']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-10']['subtitle-2']['value'] !!}
                    </b>
                </div>
                <p style="position:absolute;top:80px;left:15px;width:190px;font-size:13px;text-align:center;line-height:20px;{{$data['page-10']['text-2']['color']?$data['page-10']['text-2']['color']:"#000"}}">
                    {!! $data['page-10']['text-2']['value'] !!}

                </p>
            </div>

            <div style="background-color:{{$data['page-10']['content-subtitle-color']['color']?$data['page-10']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:361px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-8']['idea-icon']['value']?$data['page-8']['idea-icon']['value']:"icon/idea-default.png"}}" style="height:50px;width:55px;position: absolute; top:9px; left:8px">
            </div>

            <div style="position: absolute; top: 155px; left: 525px; border-radius: 10%; height: 633px; width: 220px; background-color: #f5f6f8; overflow: hidden;">
                <div style="position: absolute; background-color: {{$data['page-10']['content-subtitle-color']['color']?$data['page-10']['content-subtitle-color']['color']:"#0a1b2e"}}; height: 71px; width: 100%;">
                    
                    <b style="position:absolute;top:35px;width:100%;font-size:20px;transform:scaleY(1.2);color:{{$data['page-10']['subtitle-3']['color']?$data['page-10']['subtitle-3']['color']:"#43b4c5"}};text-align:center;">
                        {!! $data['page-10']['subtitle-3']['value'] !!}
                    </b>
                </div>
                <b style="position: absolute;top: 100px;left: 110px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-10']['color-num']['color']?$data['page-10']['color-num']['color']:"#43b4c5"}};">
                    1
                </b>
                <p style="position:absolute;top:120px;left:15px;width:190px;font-size:12px;text-align:center;line-height:20px;color:{{$data['page-10']['text-num-1']['color']?$data['page-10']['text-num-1']['color']:"#000"}}">
                    {!! $data['page-10']['text-num-1']['value'] !!}
                </p>
                <b style="position: absolute;top: 290px;left: 110px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-10']['color-num']['color']?$data['page-10']['color-num']['color']:"#43b4c5"}};">
                    2
                </b>
                <p style="position:absolute;top:310px;left:15px;width:190px;font-size:12px;text-align:center;line-height:20px;color:{{$data['page-10']['text-num-2']['color']?$data['page-10']['text-num-2']['color']:"#000"}}">
                    {!! $data['page-10']['text-num-2']['value'] !!}
                </p>
                <b style="position: absolute;top: 470px;left: 110px;transform: translate(-50%, -50%);height: 40px;width: 40px;border-radius: 50%;text-align: center;line-height: 35px;font-size: 20px;color: #fff;background-color:{{$data['page-10']['color-num']['color']?$data['page-10']['color-num']['color']:"#43b4c5"}};">
                    3
                </b>
                <p style="position:absolute;top:490px;left:15px;width:190px;font-size:12px;text-align:center;line-height:20px;color:{{$data['page-10']['text-num-3']['color']?$data['page-10']['text-num-3']['color']:"#000"}}">
                    {!! $data['page-10']['text-num-3']['value'] !!}
                </p>
            </div>

            <div style="background-color:{{$data['page-10']['content-subtitle-color']['color']?$data['page-10']['content-subtitle-color']['color']:"#0a1b2e"}};border-radius:50%;position:absolute;left:601px;top:120px; height:70px; width:70px"> 
                <img src="{{ $data['page-8']['result-icon']['value']?$data['page-8']['result-icon']['value']:"icon/result-default.png"}}" style="height:50px;width:50px;position: absolute; top:9px; left:10px">
            </div>

        </div>

        <img src="{{$data['page-10']['image-global']['value']?$data['page-10']['image-global']['value']:"images/pdf-1-img-11-default.png"}}" style="position:absolute;bottom:65px;left:45px;width:460px;height:525px;">
        
        <div style="background-color:{{$data['page-10']['content-image-color']['color']?$data['page-10']['content-image-color']['color']:"#0a1b2e"}};width:275px;height:95px;position:absolute;bottom:132px;right:162px;">
            <b style="color: {{$data['page-10']['title-image']['color']?$data['page-10']['title-image']['color']:"#43b4c5"}}; position:absolute;top:25px;left:35px;font-size:38px;transform:scaleY(1.2)">
                {!!$data['page-10']['title-image']['value']!!}
            </b>
        </div>

        <p class="ft00" style="color: #000;left:35px"><b>9</b></p>
        <div style="position:absolute;bottom:-1px;right:0px;width:758px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 11 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <img src="{{ $data['page-11']["image-global"]['value'] ? $data['page-11']["image-global"]['value'] : 'images/pdf-1-img-12-default.png'}}" style="height:100%;width:100%;position:absolute;top:0;left:0;">
    
        <div style="position:absolute;background-color: {{$data["page-11"]['content-color']['color']? $data["page-11"]['content-color']['color']: "#0eb0c3"}} ;width:427px;height:510px;right:30px;bottom:8px;">
            <img src="{{ $data['page-11']['comilla-icon']['value'] ? $data['page-11']['comilla-icon']['value'] : "icon/comilla-default.png"}}" style="position:absolute;top:30px;left:25px;" height="65px" width="87px">
            <div style="position:absolute;left:30px;top:115px;width:360px">
                <p style="text-align: justify;line-height: 1.5;color:{{$data['page-11']['text']['color']?$data['page-11']['text']['color']: "#fff"}};">
                    {!! $data['page-11']['text']['value'] !!}
                </p>
            </div>
            <div style="position:absolute;left:30px;bottom:35px;width:360px">
                <b style="font-size:20px;color:{{ $data['page-11']['name']['color'] ? $data['page-11']['name']['color'] : "#fff"}};">
                    {!! $data['page-11']['name']['value'] !!}
                </b>
                <br>
                <b style="font-size:20px;color:{{ $data['page-11']['work-name']['color'] ? $data['page-11']['work-name']['color'] : "#fff"}};">
                    {!! $data['page-11']['work-name']['value'] !!}
                </b>
            </div>

        </div>

        <p class="ft00" style="color: #000;left:35px"><b>10</b></p>
        <div style="position:absolute;bottom:-1px;right:0px;width:758px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-- ------------------ PAGINA 12 ------------------ --}}
    <div style="position:relative;width:793px;height:1122px;">
        <img style="position:absolute;top:25px;left:240px;width:315px;height:50px" src="{{ $data['page-12']["logo-icon"]['value'] ? $data['page-12']["logo-icon"]['value'] : "icon/logo-default.png" }}" alt="icon-image">

        <img src="{{ $data['page-12']["image-global"]['value'] ? $data['page-12']["image-global"]['value'] : "images/pdf-1-img-13-default.png"}}" style="position: absolute;top:90;width:100%;height:540px;">

        <div style="position:absolute;bottom:245px;width:100%;height:250px;background:#f5f4fa;">
            <div style="position:absolute;top:55px;left:60px;width:660px;">
                <b style="font-size:24px;transform:scaleY(1.2);color:{{$data['page-12']["title"]['color'] ? $data['page-12']["title"]['color'] : "#43b4c5"}};">
                    {!! $data['page-12']["title"]['value'] !!}
                </b>
                <p style="text-align:justify;margin-top:15px;font-size:14px;line-height:20px;transform:scaleY(1.2);color:{{$data['page-12']["text-1"]['color'] ? $data['page-12']["text-1"]['color'] : "#4b4b4b"}}">
                    {!! $data['page-12']["text-1"]['value'] !!} 
                </p>
            </div>
        </div>

        <div style="position:absolute;bottom:45px;width:100%;height:200px;background:#0a1b2e;">
            <div style="position:absolute;top:40px;left:115px;">
                <b style="font-size:40px;transform:scaleY(1.4);margin-left:15px;color:{{$data['page-12']["num-1"]['color'] ? $data['page-12']["num-1"]['color'] : "#fff"}}">
                    {!! $data['page-12']["num-1"]['value'] !!} 
                </b>
                <br>
                <br>
                <b style="color:{{$data['page-12']["text-2"]['color'] ? $data['page-12']["text-2"]['color'] : "#fff"}};font-size:15px;transform:scaleY(1.2);">
                    {!! $data['page-12']["text-2"]['value'] !!} 
                </b>
            </div>
            <div style="position:absolute;top:40px;left:355px;">
                <b style="font-size:40px;transform:scaleY(1.4);margin-left:5px;color:{{$data['page-12']["num-2"]['color'] ? $data['page-12']["num-2"]['color'] : "#fff"}}">
                    {!! $data['page-12']["num-2"]['value'] !!} 
                </b>
                <br>
                <br>
                <b style="color:{{$data['page-12']["text-3"]['color'] ? $data['page-12']["text-3"]['color'] : "#fff"}};font-size:15px;transform:scaleY(1.2);">
                    {!! $data['page-12']["text-3"]['value'] !!} 
                </b>
            </div>
            <div style="position:absolute;top:40px;left:570px;">
                <b style="font-size:40px;transform:scaleY(1.4);margin-left:5px;color:{{$data['page-12']["num-3"]['color'] ? $data['page-12']["num-3"]['color'] : "#fff"}}">
                    {!! $data['page-12']["num-2"]['value'] !!} 
                </b>
                <br>
                <br>
                <b style="color:{{$data['page-12']["text-4"]['color'] ? $data['page-12']["text-4"]['color'] : "#fff"}};font-size:15px;transform:scaleY(1.2);">
                    {!! $data['page-12']["text-4"]['value'] !!} 
                </b>
            </div>
        </div>

        <div style="position:absolute;bottom:0px;width:100%;height:45px;background:#43b4c5;">
            <a href="{!!$data['page-12']["url-1"]['value'] ? $data['page-12']["url-1"]['value']:""!!}" style="position: absolute;left:250px;top:10px;" target="__blank">
                <img src="{{ $data['page-12']["link-icon-1"]['value'] ? $data['page-12']["link-icon-1"]['value'] : "icon/linkedin-default.png"}}" style="height:30px;width:30px;">
            </a>
            <a href="{!!$data['page-12']["url-2"]['value'] ? $data['page-12']["url-2"]['value']:""!!}" style="position: absolute;left:340px;top:10px;" target="__blank">
                <img src="{{ $data['page-12']["link-icon-2"]['value'] ? $data['page-12']["link-icon-2"]['value'] : "icon/twitter-default.png"}}" style="height:30px;width:30px;">
            </a>
            <a href="{!!$data['page-12']["url-3"]['value'] ? $data['page-12']["url-3"]['value']:""!!}" style="position: absolute;left:420px;top:10px;" target="__blank">
                <img src="{{ $data['page-12']["link-icon-3"]['value'] ? $data['page-12']["link-icon-3"]['value'] : "icon/youtube-default.png"}}" style="height:30px;width:30px;">
            </a>
            <a href="{!!$data['page-12']["url-4"]['value'] ? $data['page-12']["url-4"]['value']:""!!}" style="position: absolute;left:500px;top:10px;" target="__blank">
                <img src="{{ $data['page-12']["link-icon-4"]['value'] ? $data['page-12']["link-icon-4"]['value'] : "icon/web-default.png"}}" style="height:30px;width:30px;">
            </a>
        </div>
    </div>
</body>
</html>
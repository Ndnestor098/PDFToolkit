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
    {{-------------------- PAGINA 1 --------------------}}
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

        <img style="position:absolute;top:166px;right:35px;width:165px;height:75px" src="{{ $data['page-1']["firma-image"]['value'] ? $data['page-1']["firma-image"]['value'] : "icon/firma-default.png" }}" alt="icon-image">

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

        <img style="position:absolute;bottom:70px;left:45px;width:335px;height:50px" src="{{ $data['page-1']["logo-image"]['value'] ? $data['page-1']["logo-image"]['value'] : "icon/logo-default.png" }}" alt="icon-image">

        <div style="position:absolute;bottom:-1;right:0;width:750px;height:13px;background-color:#0a1b2e;"></div>
    </div>

    {{-------------------- PAGINA 2 --------------------}}
    <div style="position:relative;width:793px;overflow:hidden;height:1122px;">
        <div style="width:793px;height:700px;position:relative;background-color:#0a1b2e;"> 
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
        <img style="width: 449px;position: absolute;right: 0;top: 0;" 
            src="{{ $data['page-3']["image-global"]['value'] ? $data['page-3']["image-global"]['value'] : "images/prueba0003.png" }}" 
            alt="background image"/>

        <p class="ft01" style="color:{{ $data['page-3']['title']['color'] ? $data['page-3']['title']['color'] : ""; }}">
            <b>
                {{ $data['page-3']['title']['value'] }}
            </b>
        </p>

        <p class="ft06" style="color:{{ $data['page-3']['text']['color'] ? $data['page-3']['text']['color'] : ""; }}">
            {{ $data['page-3']['text']['value'] }}
        </p>

        <div class="area-iconos" style="background-color:{{ $data['page-3']["color-container-icon"]['value'] ? $data['page-3']['color-container-icon']['value'] : "#0d1b2a" }}">
            <span>
                <img src="{{ $data['page-3']['ticket-icon']['value'] ? $data['page-3']['ticket-icon']['value'] : "icon/ticket-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">

                <p class="ft05" style="color:{{ $data['page-3']['ticket']['color'] ? $data['page-3']['ticket']['color'] : ""; }}">
                    {{ $data['page-3']['ticket']['value'] }}
                </p>
            </span>
            <span>
                <img src="{{ $data['page-3']['interaction-icon']['value'] ? $data['page-3']['interaction-icon']['value'] : "icon/conversation-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">

                <p class="ft05" style="color:{{ $data['page-3']['interaction']['color'] ? $data['page-3']['interaction']['color'] : "" }}">
                    {{ $data['page-3']['interaction']['value'] }}
                </p>
            </span>
            <span>
                <img src="{{ $data['page-3']['payment-icon']['value'] ? $data['page-3']['payment-icon']['value'] : "icon/pay-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">

                <p class="ft05" style="color:{{ $data['page-3']['payment']['color'] ? $data['page-3']['payment']['color'] : "" }}">
                    {{ $data['page-3']['payment']['value'] }}
                </p>
            </span>
            <span>
                <img style="margin-left: 135px;" src="{{ $data['page-3']['gift-icon']['value'] ? $data['page-3']['gift-icon']['value'] : "icon/free-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">
                    
                <p class="ft05" style="color:{{ $data['page-3']['gift']['color'] ? $data['page-3']['gift']['color'] : "" }}">
                    {{ $data['page-3']['gift']['value'] }}
                </p>
            </span>
        </div>

        <p class="ft00"><b>2</b></p>
        
        <div style="position:absolute;bottom:-1;right:0;width:850px;height:10px;background-color:#0a1b2e;"></div>
    </div> 

    
</body>
</html>
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
            font-family: 'Helvetica'; /* Usa Helvetica como fuente */
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
    <div style="position:relative;width:793px;height:100%;overflow:hidden;height:1122px;">
        <div style="position:absolute;top:45px;right:0;width:745px;height:805px;background-color:#02000000;border-top: 5px solid #fff;border-right: none;border-bottom: 5px solid #fff;border-left: 5px solid #fff;"></div>

        <img style="right:0;top:0;object-fit:cover;width:793px;height:910px;" 
            src="images/{{ $data['page-1']['image-global'] ? $data['page-1']['image-global'] : "prueba0001.png" }}"
            alt="background image"/>

        
        <p style="position:absolute;top:82px;right:35px;white-space:nowrap;
            color:{{ $data['page-1']["title"][1] ? $data['page-1']["title"][1] : '#ffffff'}};
            font-size:50px;transform:scaleY(1.3);">
            <b>{{ $data['page-1']["title"][0] }}</b>
        </p>

        <img style="position:absolute;top:166px;right:35px;width:165px;" src="{{ $data['page-1']["firma-image"] ? $data['page-1']["firma-image"] : "icon/firma-default.png" }}" alt="icon-image">

        <div style="position:absolute;top:150px;right:35px;width:190px;background-color:#ffffff;height:2px;"></div>

        <p style="position:absolute;top:250px;right:35px;white-space:nowrap;
            color:{{ $data['page-1']['subtitle-1'][1] ? $data['page-1']['subtitle-2'][1] : '#ffffff' }};
            font-size:17px;transform:scaleY(1.2)">
            {{ $data['page-1']['subtitle-1'][0] }}
        </p>
        <p style="position:absolute;top:280px;right:35px;white-space:nowrap;
            color:{{ $data['page-1']['subtitle-2'][1] ? $data['page-1']['subtitle-2'][1] : '#ffffff' }};
            font-size:17px;transform:scaleY(1.2)">
            {{ $data['page-1']['subtitle-2'][0] }}
        </p>

        <img style="position:absolute;bottom:70px;left:45px;width:350px;" src="{{ $data['page-1']["logo-image"] ? $data['page-1']["logo-image"] : "icon/logo-default.png" }}" alt="icon-image">

        <div style="position:absolute;bottom:-1;right:0;width:750px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    {{-------------------- PAGINA 3 --------------------}}
    <div style="position:relative;width:892px;height:100%;height:1122px;">
        <img style="width: 449px;position: absolute;right: 0;top: 0;" src="{{ $data['page-3']["image-global"] ? $data['page-3']["image-global"] : "images/prueba0003.png" }}" alt="background image"/>
        <p class="ft01" style="color:{{ $data['page-3']['title'][1] ? $data['page-3']['title'][1] : ""; }}">
            <b>
                {{ $data['page-3']['title'][0] }}
            </b>
        </p>

        <p class="ft06" style="color:{{ $data['page-3']['text'][1] ? $data['page-3']['text'][1] : ""; }}">
            {{ $data['page-3']['text'][0] }}
        </p>

        <div class="area-iconos" style="background-color:{{ $data['page-3']["color-container-icon"] ? $data['page-3']['color-container-icon'] : "#0d1b2a" }}">
            <span>
                <img src="{{ $data['page-3']['ticket'][2]["image"] ? $data['page-3']['ticket'][2]["image"] : "icon/ticket-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">
                <p class="ft05" style="color:{{ $data['page-3']['ticket'][1] ? $data['page-3']['ticket'][1] : ""; }}">
                    {{ $data['page-3']['ticket'][0] }}
                </p>
            </span>
            <span>
                <img src="{{ $data['page-3']['interaction'][2]["image"] ? $data['page-3']['interaction'][2]["image"] : "icon/conversation-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">
                <p class="ft05" style="color:{{ $data['page-3']['interaction'][1] ? $data['page-3']['interaction'][1] : "" }}">
                    {{ $data['page-3']['interaction'][0] }}
                </p>
            </span>
            <span>
                <img src="{{ $data['page-3']['payment'][2]["image"] ? $data['page-3']['payment'][2]["image"] : "icon/pay-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">
                <p class="ft05" style="color:{{ $data['page-3']['payment'][1] ? $data['page-3']['payment'][1] : "" }}">
                    {{ $data['page-3']['payment'][0] }}
                </p>
            </span>
            <span>
                <img src="{{ $data['page-3']['gift'][2]["image"] ? $data['page-3']['gift'][2]["image"] : "icon/free-default.png" }}" 
                    alt="icon" height="70" width="79" class="img-icon">
                <p class="ft05" style="color:{{ $data['page-3']['gift'][1] ? $data['page-3']['gift'][1] : "" }}">
                    {{ $data['page-3']['gift'][0] }}
                </p>
            </span>
        </div>

        <p class="ft00"><b>2</b></p>
        
        <div style="position:absolute;bottom:-1;right:0;width:850px;height:10px;background-color:#0a1b2e;"></div>
    </div>

    
</body>
</html>
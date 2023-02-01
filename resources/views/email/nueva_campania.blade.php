<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            font-family: "Poppins", sans-serif;
            font-weight: 80;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }

        .cuerpo1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            height: 85%;
            box-shadow:
                0px 1px 26.1px rgba(0, 0, 0, 0.087),
                0px 2.6px 24.1px rgba(0, 0, 0, 0.124),
                0px 5.3px 19.5px rgba(0, 0, 0, 0.156),
                0px 11px 16.5px rgba(0, 0, 0, 0.193),
                0px 30px 35px rgba(0, 0, 0, 0.28);
            background-image: url(https://imgs.search.brave.com/cDY0f-r14fjvCTjUSYhpl9Bp04hHkAKHg7laivUh9Js/rs:fit:511:338:1/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vcGhvdG9z/L2JsdWUtYW5kLXdo/aXRlLXplYnJhLXBh/dHRlcm4tcGljdHVy/ZS1pZDQ4NTU3MzEw/Nj9rPTYmbT00ODU1/NzMxMDYmcz0xNzA2/NjdhJnc9MCZoPXA3/Qm50enNPSTdxUGNx/M092QjVKMDg5a0RJ/THI1TS1vMXZLV1h0/eUswVTg9);
            object-fit: fill;

        }
        .cuerpo2 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 97%;
            height: 96%;
            flex-wrap: wrap;
            text-align: justify;
            background-color: white;
            border: 6px solid rgb(21 148 147);
        }

        .cabecera {
            display: flex;
            width: 95%;
            margin-top: 15px;
            justify-content: center;
            flex-wrap: wrap;
            border-bottom: 4px solid black;
        }

        .cabecera>img {
            justify-items: center;
            margin: 15px;
            width: 50%;
        }

        .cabecera>h1 {
            text-align: center;
        }

        .informacion {
            display: flex;
            width: 95%;
            justify-content: center;
            flex-wrap: wrap;
        }

        .informacion>p,
        h3 {
            width: 100%;
            text-align: center;
        }

        .footer {
            display: flex;
            width: 95%;
            justify-content: center;
            flex-wrap: wrap;
        }

        @media only screen and (max-width: 450px) {

            .cuerpo1{
                margin-top: -10%;
                width: 80%;
                height: 75%;
            }
            .cuerpo2{
                width: 9%;
                height: 96%;
            }
            .cabecera {
                font-size: 11px;
            }

            .informacion>h2 {
                font-size: 13px;
            }

            .informacion>h3 {
                font-size: 13px;
            }
        }
    </style>


    <title>Campaña Nueva</title>
</head>

<body>

    <div class="cuerpo1">
        <div class="cuerpo2">
            <div class="cabecera">
                <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo">
                <h1>Se ha creado una nueva campaña</h1>
            </div>
    
            <div class="informacion">
    
                <h2><strong>{{ $nombre_campania }}</strong></h2>
                <br>
                <h3><strong>{{ $descripcion }}</strong></h3>
                <br>
            </div>
    
            <div class="footer">
                <h5>Adafriend S.A.S</h5>
            </div>
        </div>
    </div>

</body>

</html>
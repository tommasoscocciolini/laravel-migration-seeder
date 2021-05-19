<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .packet span {
              display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @foreach($packets as $packet)
            <div class="packet">
              <span><b>PacketID</b>: {{$packet->id}}</span>
              <span><b>Packet Name:</b> {{$packet->packet_name}}</span>
              <span><b>Location: </b>{{$packet->location}}</span>
              <span><b>Desc: </b>{{$packet->description}}</span>
              <span><b>Tour-included: </b>{{$packet->tour_included}}</span>
              <span><b>Date: </b>{{$packet->date}}</span>
              <span><b>Duration: </b>{{$packet->duration}}</span>
              <span><b>Price: </b>{{$packet->price}}</span>
            </div>
            @endforeach

        </div>
    </body>
</html>

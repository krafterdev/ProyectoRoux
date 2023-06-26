<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>

<body>

    <!-- Header -->
    <div class="encabezado1">
        <aside>
            <img src=" {{asset('/images/ralogo_monogram.png')}}">
            <h4>Roux Academy</h4>
            <h5>Art - Media - Desing </h5>
        </aside>
        <section>
            <h4 ">Roux Academy 2016 Art Conference</h4>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, ullam vel. Natus iure voluptatibus
                numquam ea harum fuga. Praesentium tempore sed laboriosam quisquam? Assumenda, beatae architecto
                aliquam
                voluptatem necessitatibus laborum.
            </p>
        </section>
    </div>
    <div class="menu">
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('artists')}}">Artists</a>
        <a href="{{url('shedule')}}">Schedule</a>
        <a href="{{url('venue')}}">Venue/Travel</a>
        <a href="{{url('register')}}">Register</a>
    </div>



    @yield('contenido')

    <!-- Footer-->

    <div class="piePag">
        <div class="imgpie">
            <img src="{{asset('/images/ralogo_monogram.png')}}">
        </div>
        <div class="tepag">
            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                velit cupiditate beatae quasi aliquid id nulla ducimus dolor<br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
                laborum impedit accusamus natus autem sapiente ipsam,</h6>
        </div>

        <div class="links21">
            <h6>About the Roux Academy |</h6>
        </div>
        <div class="links22">
            <h6> Privacity Policy |</h6>
        </div>
        <div class="links23">
            <h6>Visit our website</h6>
        </div>

    </div>
</body>
</html>
@extends('layouts.Plantilla')
@section('titulo','Roux Academy')
@section('contenido')

    <div class="principal">
        <img src="{{asset('/images/art01.jpg')}}" width="1000">
        <div class="primertext">
            <aside>
            <h2 id="sec-formulario">Register</h2>
            <p>
                To attend the Roux Academy Contemporary Art Conference, plase complete the information below.
            </p>
            <form action="#" method="">
                <div>
                    <label for="Nombre">Name</label><br>
                    <input type="text" name="Nombre" id="Nombre" placeholder="My Name..." required maxlength="5">

                </div>
                <div>
                    <label for="apellido">Company Name</label><br>
                    <input type="apellido" name="apellido" id="apellido" ">
                </div>
                 <div>
                    <label for=" correo">Email Address</label><br>
                    <input type="email" name="correo" placeholder="Text" id="correo" minlength="5" required>
                </div>
                <div>
                    <label for="contrasena">Mailing Address</label><br>
                    <input type="contrasena" name="contrasena" placeholder="Text" id="contrasena" minlength="6"
                        required>
                </div>
                <div>
                    <label for="ciudad">City</label><br>
                    <input type="ciudad" name="ciudad" id="ciudad" placeholder="Text">
                </div>
                <div>
                    <label for="codigo">Zip</label><br>
                    <input type="codigo" name="codigo" id="codigo">
                </div>
                <div>
                    <label for="estado">Estado:</label><br>
                    <select name="estado" id="estado">
                        <option value="1">Seleccione...</option>
                        <option value="2">Tamaulipas</option>
                        <option value="3">Nuevo Leon</option>
                    </select>
                    <div>
                        <label for="telefono">Telefono</label><br>
                        <input type="telefono" name="telefono" id="telefono">
                    </div>
                </div>
                <div>
                    <input type="submit" value="Reqister">
                </div>
               </aside>
                <section>
                    <h2>Featured Artists</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis optio, odio reiciendis dicta nemo
                        accusantium
                    </p>
                    
                        <img src=" {{asset('/images/artists/Barot_Bellingham_tn.jpg')}}" width="100px" alt="">
                       <img src="{{asset('/images/artists/Constance_Smith_tn.jpg')}}" width="100px" alt="">
                       <img src=" {{asset('/images/artists/Hassum_Harrod_tn.jpg')}}" width="100px" alt=""><br>
                       <img src=" {{asset('/images/artists/Hillary_Goldwynn_tn.jpg')}}" width="100px" alt="">
                       <img src=" {{asset('/images/artists/Jennifer_Jerome_tn.jpg')}}" width="100px" alt="">
                       <img src="{{asset('/images/artists/Jonathan_Ferrar_tn.jpg')}}" width="100px" alt=""><br>
                       <img src="{{asset('/images/artists/LaVonne_LaRue_tn.jpg')}}" width="100px" alt="">
                       <img src="{{asset('/images/artists/Riley_Rewington_tn.jpg')}}" width="100px" alt="">
                       <img src="{{asset('/images/artists/Xhou_Ta_tn.jpg')}}" width="100px" alt="">
                       <br>
                   
                   <br>
                   <a href="{{url('artists')}}">more info</a>
                    </section>

        </div>
       
    </div>
    @endsection
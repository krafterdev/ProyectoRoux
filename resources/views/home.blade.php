@extends('layouts.Plantilla')
@section('titulo','Roux Academy')
@section('contenido')

    <div class="principal">
        <img src="{{asset('/images/art01.jpg')}}" width="1000">
        <div class="primertext">
            <aside>

                <h2>About the event</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis quisquam. Inventore
                    obcaecati recusandae dolorum rem magnam quibusdam, dignissimos optio dolore necessitatibus enim
                    officiis, autem iusto nobis quod distinctio adipisci.
                    .

                </p>

                <h2>Featured Artists</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur tenetur saepe ea odit
                    esse dolorum? Eum error, dolores optio pariatur, totam similique perferendis, voluptatem labore
                    praesentium libero blanditiis incidunt.
                    
                </p>
                <div> <img src=" {{asset('/images/artists/Barot_Bellingham_tn.jpg')}}" width="100px" alt="">
                    <img src="{{asset('/images/artists/Constance_Smith_tn.jpg')}}" width="100px" alt="">
                    <img src=" {{asset('/images/artists/Hassum_Harrod_tn.jpg')}}" width="100px" alt=""><br>
                    <img src=" {{asset('/images/artists/Hillary_Goldwynn_tn.jpg')}}" width="100px" alt="">
                    <img src=" {{asset('/images/artists/Jennifer_Jerome_tn.jpg')}}" width="100px" alt="">
                    <img src="{{asset('/images/artists/Jonathan_Ferrar_tn.jpg')}}" width="100px" alt=""><br>
                    <img src="{{asset('/images/artists/LaVonne_LaRue_tn.jpg')}}" width="100px" alt="">
                    <img src="{{asset('/images/artists/Riley_Rewington_tn.jpg')}}" width="100px" alt="">
                    <img src="{{asset('/images/artists/Xhou_Ta_tn.jpg')}}" width="100px" alt="">
                    <br></div>
                
                <a href="{{url('artists')}}">more info</a>
                <div class="hotel">

                    <h2>The venue</h2>
                    <h3>Hotel Contempo</h3>
                    <img src="{{asset('/images/hotel_contempo.jpg')}}">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio in sed delectus quasi
                        accusantium?
                        Consectetur libero eveniet debitis atque, officiis odit aut quae, est iure non quam numquam,
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, explicabo deleniti autem
                        modi accusantium soluta minus accusamus? Fuga aliquam repudiandae expedita! Tenetur minima rerum
                        eaque eum. Qui ipsam ex vero.
                    </p>
                </div>
            </aside>
            <section>
                <h2><span style="color:rgb(255, 0, 0)">Coming to the event? </span></h2>
                <h4><span style="color:rgb(104, 104, 104)">chek out our mobile site</span></h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odio obcaecati animi
                    adipisci
                    officia porro itaque fugit repudiandae velit ut soluta tempore odit ipsa, sed labore est veritatis!
                    Qui,
                    quia!
                </p>
                <img src=" {{asset('/images/iphone.png')}}" width="300px" alt="">
                <h6>c.rouxacademy.com</h6>
                <h2>Scheduke</h2>
                <h3>Monday</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam dolor id repellendus deleniti,
                    magni
                    
                </p>
                <h3>Tuesday</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus rerum ad ipsum, unde exercitationem
                    eveniet illo excepturi iusto perspiciatis libero iure eligendi harum reprehenderit, inventore
                    </p>
                <a href="{{url('shedule')}}">Full Schedule</a>
            </section>
        </div>    
    </div>
@endsection
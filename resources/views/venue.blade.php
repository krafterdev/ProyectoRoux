@extends('layouts.Plantilla')
@section('titulo','Roux Academy')
@section('contenido')

    <div class="principal">
        <img src="{{asset('/images/art01.jpg')}}" width="1000">
        <div class="primertext">
            <aside>
                <div class="hotel">
                    <h2>The Venue</h2>
                    <img src="{{asset('/images/hotel_contempo.jpg')}}" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, exercitationem repudiandae enim
                        repellat ipsam harum voluptate architecto dolore eaque, possimus amet voluptatum est quidem ex
                        cum
                        labore et atque doloremque.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nisi quibusdam, aspernatur asperiores iure facilis maiores. Inventore molestiae perferendis hic nostrum maiores quod architecto optio, obcaecati nisi rem tenetur deserunt.

                    </p>
                </div>
                <div class="hoteles">
                    
                    <h3>Phillips of Belltown</h3>
                    <img src="{{asset('/images/hotel_phillips.jpg')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis quisquam. Inventore
                        obcaecati recusandae dolorum rem magnam quibusdam, dignissimos optio dolore necessitatibus enim
                        officiis, autem iusto nobis quod distinctio adipisci.

                    </p>
                    <a href="https://www.google.com/maps/place/Belltown+Inn/@47.6145197,-122.3456961,17z/data=!4m13!1m2!2m1!1sPhillips+of+belltown+hotel!3m9!1s0x5490154c3ce79eb3:0xe967c8ec573038d3!5m3!1s2022-07-05!4m1!1i2!8m2!3d47.6146717!4d-122.3450618!15sChpQaGlsbGlwcyBvZiBiZWxsdG93biBob3RlbJIBBWhvdGVs?hl=es-419"
                        target="_blank">get directions</a>
                    <hr>
                    
                    <h3>The Rage Hotel</h3>
                    <img src=" {{asset('/images/hotel_rage.jpg')}}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore omnis ea error beatae, sapiente
                        reprehenderit neque iusto eos eaque praesentium, aperiam magni facere obcaecati enim autem modi
                        necessitatibus, nobis rem.</p>
                    <a href="https://www.google.com/maps/place/EVEN+Hotel+Seattle+Downtown+-+Lake+Union,+an+IHG+Hotel/@47.622024,-122.3388667,17z/data=!4m16!1m5!2m4!1sThe+Rage+Hotel+seattle+south+lke!5m2!5m1!1s2022-07-05!3m9!1s0x549015375551a1d5:0xef44fa20c799c358!5m3!1s2022-07-05!4m1!1i2!8m2!3d47.6240484!4d-122.3345655!15sCiBUaGUgUmFnZSBIb3RlbCBzZWF0dGxlIHNvdXRoIGxrZVoiIiB0aGUgcmFnZSBob3RlbCBzZWF0dGxlIHNvdXRoIGxrZZIBBWhvdGVsmgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJ0Y0dGRFRtUlJFQUU?hl=es-419"
                        target="_blank">get direction</a>

                    <hr>
                    <h3>Gwendoline Fancy</h3>
                    <img src="{{asset('/images/hotel_gwendoline.jpg')}}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, officiis eos quae deserunt
                        debitis omnis nulla odio sint excepturi. Culpa delectus non ea nulla ex incidunt deserunt
                        exercitationem magni blanditiis.</p>
                    <a href="https://www.google.com/maps/place/5+Points+Food+%26+Drink/@29.4354607,-98.5003507,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipP4YTKoRCa9UrVTgg6QCugsK1HV_PnzUm-2pQYN!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipP4YTKoRCa9UrVTgg6QCugsK1HV_PnzUm-2pQYN%3Dw86-h114-k-no!7i1512!8i2016!4m5!3m4!1s0x865c5f53a43d12a3:0x25d328705dd2d56d!8m2!3d29.4352697!4d-98.500654?hl=es-419"
                        target="_blank">get direction</a>
                </div>
            </aside>
            <section>
                <h2>Featured Artists</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis optio, odio reiciendis dicta nemo
                    accusantium
                </p>
                <div>
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
               </div>
               <br>
               <a href="{{url('artists')}}">more info</a>
                <h2><span style="color:rgb(255, 0, 0)">Coming to the event? </span></h2>
                <h4><span style="color:rgb(104, 104, 104)">chek out our mobile site</span></h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odio obcaecati animi
                    adipisci officia porro itaque fugit repudiandae velit ut soluta tempore odit ipsa, sed labore est
                    veritatis! Qui, quia!

                </p>

                <img src=" {{asset('/images/iphone.png')}}" width="330px" alt="">
                <h6>c.rouxacademy.com</h6>
            </section>
        </div>
        
    </div>
    @endsection
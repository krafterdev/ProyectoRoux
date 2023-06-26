@extends('layouts.Plantilla')
@section('titulo','Roux Academy')
@section('contenido')

    <div class="principal">
        <img src="{{asset('/images/art01.jpg')}}" width="1000">
        <div class="primertext">
            <aside>
                <div class="actores2">
                <h2>Scedule</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio blanditiis sunt autem impedit
                    nemo sapiente, unde amet reiciendis molestiae officia ex non. Commodi corrupti dolor eveniet
                    necessitatibus accusamus eum optio?

                </p>
                <hr>
                <dl>
                    
                    <dt>
                        <h4>Monday, March 7 2016</h4>
                        <h2>Art in Full Color</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis quisquam.
                            Inventore
                            obcaecati recusandae dolorum rem magnam quibusdam, dignissimos optio dolore necessitatibus
                            enim
                        </p>
                    </dt>
                    <dd> 
                        <img src="{{asset('/images/artists/LaVonne_LaRue_tn.jpg')}}" width="100px" alt="">
                        <h2>Art in Unexpected Places</h2>
                        <h5><span style="color:rgb(104, 104, 104)">09:30-10:30am: Elizabeth Hall</span></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis architecto libero commodi
                            dolorem
                            necessitatibus quae saepe aut iusto adipisci ipsum nisi animi suscipit incidunt ad nemo
                            rerum,
                            
                        </p>
                        <img src="{{asset('/images/artists/Constance_Smith_tn.jpg')}}" width="100px" alt="">
                        <h2>Art in Full Bloom</h2>
                        <h5><span style="color:rgb(104, 104, 104)">11:00-1pm: Victoria Hall</span></h5>
                        <p>
                            
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis architecto libero commodi
                            dolorem
                            necessitatibus quae saepe aut iusto adipisci ipsum nisi animi suscipit incidunt ad nemo
                            rerum
                        </p>
                        <img src="{{asset('/images/artists/Riley_Rewington_tn.jpg')}}" width="100px" alt="">
                        <h2>Still Life</h2>
                        <h5><span style="color:rgb(104, 104, 104)">2:30-4pm: Dennison Hall</span></h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis architecto libero commodi
                            dolorem
                            necessitatibus quae saepe aut iusto adipisci ipsum nisi animi suscipit incidunt ad nemo
                            rerum
                        </p>
                    </dd>
                    <dt>
                        <h4>Monday March 6</h4>
                        <hr>
                        <h2>Water in Art</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis quisquam.
                            Inventore
                            obcaecati recusandae dolorum rem magnam quibusdam, dignissimos optio dolore necessitatibus
                            enim
                            officiis, autem iusto nobis quod distinctio adipisci.
                        </p>
                    </dt>
                    <dd>
                        <img src="{{asset('/images/artists/Jennifer_Jerome_tn.jpg')}}" width="100px" alt="">
                        <h2>Water in Art Kickoff Session</h2>
                        <h5><span style="color:rgb(104, 104, 104)">09:30-10:30am: Elizabeth Hall</span></h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis architecto libero commodi
                            dolorem
                            necessitatibus quae saepe aut iusto adipisci ipsum nisi animi suscipit incidunt ad nemo
                            rerum
                        </p>
                        <img src="{{asset('/images/artists/Jonathan_Ferrar_tn.jpg')}}" width="100px" alt="">
                        <h2>Ice Sculptures</h2>
                        <h5><span style="color:rgb(104, 104, 104)">11:00-1pm: Victoria Hall</span></h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis architecto libero commodi
                            dolorem
                            necessitatibus quae saepe aut iusto adipisci ipsum nisi animi suscipit incidunt ad nemo
                            rerum
                        </p>
                        <img src="{{asset('/images/artists/Hillary_Goldwynn_tn.jpg')}}" width="100px" alt="">
                        <h2>Deep Sea Wonders</h2>
                        <h5><span style="color:rgb(104, 104, 104)">2:30-4pm: Dennison Hall</span></h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis architecto libero commodi
                            dolorem
                            necessitatibus quae saepe aut iusto adipisci ipsum nisi animi suscipit incidunt ad nemo
                            rerum
                        </p>
                    </dd>
                </dl>
            </div>
            </aside>
            <section>
                <h2>Featured Artists</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis optio, odio reiciendis dicta nemo
                    accusantium
                    obcaecati blanditiis repudiandae ea cupiditate velit debitis odit, nostrum ad suscipit. Hic at
                    labore
                    
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
                    adipisci
                    officia porro itaque fugit repudiandae velit ut soluta tempore odit ipsa, sed labore est veritatis!
                    Qui,
                    quia!

                </p>

                <img src=" {{asset('/images/iphone.png')}}" width="330px" alt="">
                <h6>c.rouxacademy.com</h6>

            </section>
        </div>
        
    </div>
    @endsection

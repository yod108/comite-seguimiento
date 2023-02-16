@extends('adminlte::page')

@section('content')
<div class="movleft">
    <p>
        <a tabindex="0" href="http://" target="_blank" rel="noopener noreferrer"></a>
    </p>

    <p tabindex="0">
        <script>
                 var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                var f=new Date();
                document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
        </script>					
    </p>
</div>

<div class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <a href="https://screencast-o-matic.com/watch/cr63bCVlVzq">
                    <img src={{ asset("/favicons/img/img/banner_actualizacion_datos_sofia_06092022.png") }}
                        class="d-block w-100" alt="">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://sena.territorio.la/cms/index.php/ingles">
                    <img src={{ asset("/favicons/img/img/banner_oferta_EDW_06092022.png") }} class="d-block w-100"
                        alt="...">
                </a>
            </div>
            
            <div class="carousel-item">
                <a href="https://bit.ly/3IxKQLF">
                    <img src={{ asset("/favicons/img/img/Banner_TERRITORIUM_1_Frecuencia_Marzo_25.png") }}
                        class="d-block w-100" alt="...">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://bit.ly/3cvbYNQ">
                    <img src={{ asset("/favicons/img/img/Simuladores_piezas_Banner_Territorium.png") }}
                        class="d-block w-100" alt="...">
                </a>
            </div>

            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


@stop

@section('footer')

<footer>
    <section class="copyright border">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 pt-3">
                    <p class="text-muted"><strong> © 2022 </strong> ADSI | <strong> Jhoan Aristizábal </strong> | Manizales -  <strong> Caldas.</strong></p>
                </div>
            </div>
        </div>
    </section>
</footer>
{{-- <p> Copyright &copy; 2014-<script>document.write(new Date().getFullYear())</script> Your Name All Rights Reserved</p> --}}

@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop


@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
@stop
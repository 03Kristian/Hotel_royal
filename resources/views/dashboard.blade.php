<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <!-- seccion imagen -->
    <section id="hero">
        <div class="container">
            <div class="content-center topmargin-lg ">
                <h1 class="mt-5">Tecno Academia Popayán</h1>
                <p>Te invitamos a que revises nuestras actividades del mes de marzo </p>
                <p> Que esperas para inscribirte desde tu computador o movil</p>
            </div>
        </div>
    </section>
    <!-- seccion portafolio-->
    <section id="portfolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2>Conoce en que estamos trabajando para ti <b>Tecno Academía Popayán</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row text-white-50">
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Marzo mes de deporte y vida</h2>
                            </a>
                            <a href="#">
                                <p>Tecno Academía App</p>
                            </a>
                        </div>
                        <img src="images/deporte.jpg" class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Sociedad y cultura Popayán 2021</h2>
                            </a>
                            <a href="#">
                                <p>Nuevos programas para disfrutar</p>
                            </a>
                        </div>
                        <img src="images/cultura.jpg" class="img-fluid" alt="Portfolio 02">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pie de pagina footer-->
    <footer class="bgDark">
        <div class="container">
            <small>Todos los derechos reservados. ©2021 </small>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</x-app-layout>

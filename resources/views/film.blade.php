@extends('layouts.main')
    @section('intro')
        <section id="intro">
            <div class="intro-container">
                <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                    <ol class="carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="{{Voyager::image($movies->image)}}" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Tickets on Sale Now</h2>
                                    <p>Primatologist Davis Okoye shares an unshakable bond with George, an extraordinarily intelligent, silverback gorilla that's been in his care since birth. Get your tickets at XMC and have fun watching this movie.</p>
                                    <a href="#" class="btn-get-started scrollto">Get Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </section><!-- #intro -->
    @stop
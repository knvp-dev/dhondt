@extends('layouts.app')

@section('content')

<imageslider 
    :slides='slides2' 
    :animate='true' 
    :delay='8000'>
</imageslider>

<!-- <section class="hero is-medium is-primary is-bold parallax-2">
{{--  <div class="hero-body">
    <div class="container">
      <h1 class="title">
 
      </h1>
      <div class="hero-content">
          <h2 class="subtitle is-2em has-white-bg has-text-centered">
            Bouwwerken
        </h2>
    </div>
</div>
</div>  --}}
</section> -->

<section class="section">
	<div class="container has-text-centered">
		<h1 class="title">Maatwerk</h1>
        <h2 class="subtitle">Onze passie</h2>

        <section class="section">
        <p class="has-text-centered">Ook voor gespecialiseerd maatwerk kunt u bij ons terecht hier ligt de focus op de fabricatie en plaatsing van onderander keukenweekbladen douches wastafels baden xxl-tegels gevelbekleding enz…
<br><br>
Van natuursteen tot keramiek en composiet elk met hun eigen karakter en uitstraling zijn de mogelijkheden eindeloos elk materiaal heeft zijn eigen specifieke eigenschappen en vergt aangepast onderhoud.</p>
    </section>
    <div class="divider"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></div>        
        <section class="section">
            <div class="columns">
                <div class="column text-column">
                    <h2>Natuursteen</h2>
                    <p>
                        staat garant voor een duurzame tijdloze unieke en elegante uitstraling
                    </p>
                </div>
                <div class="column text-column">
                    <h2>Keramiek</h2>
                    <p>
                        bij keramiek zijn ook de mogelijkheden eindeloos met verschillende prints gaande van strakke effen tint tot een wilde natuursteenprint waar geen onderscheid te maken is of het Ier om het echte natuursteen of de keramiek gaat.
                    </p>
                </div>
                <div class="column text-column">
                    <h2>Composiet</h2>
                    <p>
                        wordt veel gebruikt voor werkbladen omdat het net als kermariek uiterst kras en vlekbestendig is
        de mogelijkheden lopen ook uiteen an een strakke effen kleur tot een natuurlijke effen look
                    </p>
                </div>
            </div>
        </section>
	</div>

</section>

<section class="section has-grey-background">
	        <div class="container has-text-centered">

                <h1 class="title">Realisaties</h1>

                <div class="grid gallery">
                    @for($i=1;$i<8;$i++)
                    <a href="/images/fotos/maatwerk/{{ $i }}.jpg" class="grid-item"><img src="images/fotos/maatwerk/{{ $i }}.jpg" alt></a>
                    @endfor
                </div>
            </div>
        </section>

@endsection
@extends('layouts.app')

@section('content')

<imageslider 
    :slides='slides3' 
    :animate='true' 
    :delay='8000'>
</imageslider>

<!-- <section class="hero is-medium is-primary is-bold parallax-3">
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
		<h1 class="title">Tegelwerken</h1>
        <h2 class="subtitle">Keramiek en natuursteen</h2>
        
        <section class="section has-text-centered">
            Ook voor vloeren en wandtegels binnen en buiten kunt u bij ons terecht doordat we altijd de perfectie nastreven kan u er zeker van zijn kwaliteit te krijgen voor uw geld.
Door onze jarenlange ervaring kan u bij ons terecht voor de plaatsing van de standaardtegel tot de meest exclusieve projecten.
        </section>
        <div class="divider"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></div>      
		<section class="section">
            <div class="columns">
                <div class="column text-column">
                    <h2>Snelle offerte</h2>
                    <p>
                    We komen bij u langs geven advies en maken gepaste offerte voor u op.        
                </p>
                </div>
                <div class="column text-column">
                    <h2>Een greep uit ons aanbod</h2>
                    <p>
                        <ul>
                            <li>nieuwbouw en verbouwingen</li>
                            <li>keramiek en natuursteen</li>
                            <li>kleine/grote formaten</li>
                            <li>keramisch parket</li>
                            <li>budgetvriendelijke projecten</li>
                            <li>totaalrenovatie van badkamers</li>
                            <li>mosaic</li>
                            <li>inloopdouches</li>
                        </ul>
                    </p>
                </div>
                <div class="column text-column">
                    <h2>Topservice</h2>
                    <p>
                        Door de goede samenwerking met onze vaste toonzaal kunnen we u een zeer uitgebreid gamma aanbieden van A tot Z en een snelle levering garanderen. Zo kunnen we u een concurentiele prijs aanbieden.
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
                    @for($i=1;$i<25;$i++)
                    <a href="/images/fotos/tegelwerken/{{ $i }}.jpg" class="grid-item"><img src="images/fotos/tegelwerken/{{ $i }}.jpg" alt></a>
                    @endfor
                </div>
            </div>
        </section>

@endsection
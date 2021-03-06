@extends('layouts.app')

@section('content')

<imageslider 
    :slides='slides1' 
    :animate='true' 
    :delay='8000'>
</imageslider>


<!-- <section class="hero is-medium is-primary is-bold parallax-1">
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
		
		<h1 class="title">Nieuwbouw</h1>
        <div class="divider"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></div>
        <section class="section">
        
        <div class="columns">
            <div class="column text-column">
                <h2>Offerte</h2>
                <p>
                    Voor ieder project wordt een gedetailleerde offerte opgesteld zo wel voor grote als kleinere projecten.
Hier voor verwachten we een duidelijke meetstaat opgesteld door de aangestelde architect. 
Zo kan alles duidelijk in rekening gebracht worden en alles vlot verlopen.
                </p>
            </div>
            <div class="column text-column">
                <h2>Coördinatie</h2>
                <p>
Werfvergaderingen zijn natuurlijk een must, wekelijks wordt er vergaderd met de bouwheer, architect en aannemer om alle aandachtspunten te overlopen.
                </p>
            </div>
            </div>
            <div class="columns">
            <div class="column text-column">
                <h2>Conclusie</h2>
                <p>
                    Door een goede samenwerking en duidelijke communicatie tussen bouwheer architect en aanemer wordt uw project zeker een succes!
                </p>
            </div>
            <div class="column text-column">
                <h2>Totaalprojecten</h2>
                <p>
                    Door onze jarenlange ervaring in de sector hebben we ook enkele goede contacten met betrouwbare en kwalitatieve aannemers die kunnen verder helpen uw project volledig af te werken.
                </p>
            </div>
            </div>
            </section>
<section>
            <h1 class="title">Verbouwingen</h1>
        <div class="divider"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></div>
        <section class="section">
        
        <div class="columns">
            <div class="column text-column">
                <h2>Verbouwingen</h2>
                <p>
                    Verbouwingen zijn meestal iets complexer dan nieuwbouw zo maken wij altijd een correcte offerte op echter is dit niet altijd mogelijk dan maken we een raming van de uit te voeren werken op.
                </p>
            </div>
            <div class="column text-column">
                <h2>Coördinatie</h2>
                <p>
                    Een goede coördinatie is bij verbouwingen essentieel om de vlotte verloop van de werken te garanderen.
                    Bij verbouwingen moet er ook meestal het een ander onderstut worden voor het wegbreken van muren en het plaatsen van potrellen.
                </p>
            </div>
            </div>
            <div class="columns">
            <div class="column text-column">
                <h2>Conclusie</h2>
                <p>
                    Een verbouwing houdt altijd enkele specifieke aandachtspunten in en hiervoor rekent u het best op een ervaren vakman om mogelijke gevaren te elimineren.
                </p>
            </div>
            <div class="column text-column">
                <h2>Totaalprojecten</h2>
                <p>
                    Door onze jarenlange ervaring in de sector hebben we ook enkele goede contacten met betrouwbare en kwalitatieve aannemers die kunnen verder helpen uw project volledig af te werken.
                </p>
            </div>
            </div>
            </section>
            </section>
        </div>
    </div>

</section>

<section class="section has-grey-background">
	        <div class="container has-text-centered">

                <h1 class="title">Realisaties</h1>

                <div class="grid gallery">
                    @for($i=1;$i<15;$i++)
                    <a href="/images/fotos/metselwerken/{{ $i }}.jpg" class="grid-item"><img src="images/fotos/metselwerken/{{ $i }}.jpg" alt></a>
                    @endfor
                </div>
            </div>
        </section>

@endsection
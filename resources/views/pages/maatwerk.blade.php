@extends('layouts.app')

@section('content')

<section class="hero is-medium is-primary is-bold parallax-1">
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
</section>

<section class="section">
	<div class="container has-text-centered">
		<h1 class="title">Maatwerk</h1>
		<h2 class="subtitle"></h2>
		
        <div class="columns">
            <div class="column">
                <p>
                    test1
                </p>
            </div>
            <div class="column">
                <p>
                    test2
                </p>
            </div>
            <div class="column">
                <p>
                    test3
                </p>
            </div>
        </div>

	</div>

</section>

<section class="section has-grey-background">
	        <div class="container has-text-centered">

                <h1 class="title">Realisaties</h1>

                <div class="grid gallery">
                    @for($i=1;$i<7;$i++)
                    <a href="/images/test/{{ $i }}.jpg" class="grid-item"><img src="images/test/{{ $i }}.jpg" alt></a>
                    @endfor
                </div>
            </div>
        </section>

@endsection
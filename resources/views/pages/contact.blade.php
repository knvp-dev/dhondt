@extends('layouts.app')

@section('content')
<imageslider 
    :slides='slides2' 
    :animate='true' 
    :delay='8000'>
</imageslider>
<div id="contact">

	<section class="section">
		<div class="container">

			<div class="has-text-centered">
			<h1 class="title">Contact</h1>
			<h2 class="subtitle">Contacteer ons via onderstaand formulier.</h2>
			</div>
			<div class="divider"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></div>
			<div class="columns">
				<div class="column">
					<img src="images/logo.png" alt="d'hondt" class="form-logo" width="400px">
				</div>

				<div class="column">

					<div class="notification is-primary" v-if="success">
						Bedankt, het formulier werd succesvol verzonden.
					</div>

					<form action="#" @submit.prevent="sendForm">
						<div class="field">
							<label class="label">Naam</label>
							<div class="control">
								<input class="input" type="text" placeholder="Naam" name="name"  v-model="formdata.name" required>
							</div>
							<p class="help is-danger">{{ $errors->first('name') }}</p>
						</div>

						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input class="input" type="email" placeholder="Email" name="email"  v-model="formdata.email" required>
							</div>
							<p class="help is-danger">{{ $errors->first('email') }}</p>
						</div>

						<div class="field">
							<label class="label">Onderwerp</label>
							<div class="control">
								<input class="input" type="text" placeholder="Onderwerp" name="subject"  v-model="formdata.subject" required>
							</div>
							<p class="help is-danger">{{ $errors->first('subject') }}</p>
						</div>

						<div class="field">
							<label class="label">Bericht</label>
							<div class="control">
								<div class="control">
									<textarea class="textarea" placeholder="Bericht" name="message"  v-model="formdata.message" required></textarea>
								</div>
								<p class="help is-danger">{{ $errors->first('message') }}</p>
							</div>
						</div>

						<div class="field">
							<div class="control">
								<button class="button is-primary">Verzenden</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<p>

			</p>
		</div>
	</section>
</div>

@endsection
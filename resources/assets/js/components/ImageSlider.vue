<template>
	<div class="image-slider">
		<div class="slides">
			<div class="slide" v-for="slide in slides">
				<img :class="(animate) ? 'animate-image' : ''" :src="slide.src" alt="slide">
				<!-- <div class="container">
					<div class="slide-caption">
						<h1>{{ slide.title }}</h1>
						<p>{{ slide.description }}</p>
						<a v-if="slide.url" :href="slide.url" class="button-open">Meer informatie</a>
					</div>
				</div> -->
			</div>
			<div class="slides-controls">
				<span v-for="slide in slides">
					<a class="slide-control" @click="activateSlide(slide.id)"><i class="fa" :class="(activeSlide == slide.id) ? 'fa-circle' : 'fa-circle-o'"></i></a>
				</span>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		mounted(){
			this.startAnimation();
		},
		props: ["slides","delay","animate"],
		data(){
			return{
				activeSlide: 0,
				timer: null,
			}
		},
		methods:{
			animateSlides(){
				if(this.activeSlide >= (this.slides.length)){
					this.activeSlide = 0;
				}
				$('.slide').eq(this.activeSlide).css('opacity',1).css('z-index',1);
				$('.slide').eq(this.activeSlide - 1).css('opacity',0).css('z-index',0);
				this.activeSlide++;
			},
			startAnimation(){
				$('.slide').css('opacity',0).css('z-index',0);
				$('.slide').eq(0).css('opacity',1).css('z-index',1);
				this.activeSlide++;
				this.timer = setInterval(this.animateSlides, this.delay);
			},
			activateSlide(slide_id){
				this.activeSlide = slide_id - 1;
				$('.slide').css('opacity',0).css('z-index',0);
				$('.slide').eq(this.activeSlide).css('opacity',1).css('z-index',1);
				this.activeSlide++;
				clearInterval(this.timer);
				this.timer = setInterval(this.animateSlides, this.delay);
			}
		}
	}
</script>

<style>
	.image-slider{
		width:100%;
		position: relative;
		height:300px;
	}

	.slides{
		position: relative;
	}

	.slide{
		height:300px;
		width:100%;
		overflow:hidden;
		position: absolute;
		opacity: 0;
		transition: opacity 1s;
		z-index:1;
	}

	.slide img{
		min-width:100%;
		min-height:300px;
		position: absolute;
		left:50%;
		transform: translateX(-50%);
	}

	.animate-image{
		top:50%;
		animation: upAndDown 35s linear infinite;
	}

	.slide-caption{
		bottom: -260px;
		background-color:rgba(0,0,0,.5);
		color:white;
		position: absolute;
		padding:5px 20px;
		max-width:400px;
		-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.39);
		-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.39);
		box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.39);
	}

	.slide-caption h1{
		text-transform: uppercase;
		font-size:1.5em;
	}

	.button-open{
		padding:5px 20px;
		border:2px solid white;
		color:white;
		margin:5px;
		float:left;
		cursor:pointer;
		border-radius:45px;
	}

	.button-open:hover{
		background-color:white;
		color:black;
		text-decoration: none;
	}

	.slides-controls{
		z-index:1;
		position: absolute;
		top: -1px;
		left:50%;
		transform: translateX(-50%);
		border-bottom-right-radius:14px;
		border-bottom-left-radius: 14px;
		background-color:rgba(0,0,0,.2);
		padding:2px 10px;
	}

	.slide-control{
		color:white;
		padding:2px;
		cursor:pointer;
	}

	.slide-control:hover{
		color:white;
	}

	@media(max-width:400px){
		.slide-caption{
			left:0;
		}
	}

	@keyframes upAndDown {
		0%{
			top: 0px;
		}
		50%{
			top:-75%;
		}
		100%{
			top:0px;
		}
	}
</style>
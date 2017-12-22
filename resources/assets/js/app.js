
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('imagesLoaded');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('imageslider', require('./components/ImageSlider.vue'));

const app = new Vue({
    el: '#app',
    data: {
        slides1: [
            { id: 1, src: '/images/slides/metselwerken/1.jpg', title: "Nikolaj D'hondt", description: 'Alle nieuwbouw, verbouwingen, vloeren, tegels en maatwerk.', url: null },
            { id: 2, src: '/images/slides/metselwerken/2.jpg', title: 'image 2', description: 'this is the second image', url: null },
            { id: 3, src: '/images/slides/metselwerken/3.jpg', title: 'image 3', description: 'this is the third image', url: null }
        ],
        slides2: [
            { id: 1, src: '/images/slides/maatwerk/1.jpg', title: 'image 1', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, a excepturi fugiat nihil in deserunt, natus possimus est atque rem incidunt soluta. Itaque quis dolor perspiciatis natus vel, voluptate possimus.', url: null },
            { id: 2, src: '/images/slides/maatwerk/2.jpg', title: 'image 2', description: 'this is the second image', url: null },
            { id: 3, src: '/images/slides/maatwerk/3.jpg', title: 'image 3', description: 'this is the third image', url: null }
        ],
        slides3: [
            { id: 1, src: '/images/slides/tegelwerken/1.jpg', title: 'image 1', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, a excepturi fugiat nihil in deserunt, natus possimus est atque rem incidunt soluta. Itaque quis dolor perspiciatis natus vel, voluptate possimus.', url: null },
            { id: 2, src: '/images/slides/tegelwerken/2.jpg', title: 'image 2', description: 'this is the second image', url: null },
            { id: 3, src: '/images/slides/tegelwerken/3.jpg', title: 'image 3', description: 'this is the third image', url: null }
        ],
        formdata: {
            name: "",
            email: "",
            subject: "",
            message: ""
        },
        success: false
    },
    methods: {
        sendForm() {
            axios.post('/contact', this.formdata).then((response) => {
                console.log(response);
                this.formdata = {};
                this.success = true;
            });
        }
    }

});

$('.grid').imagesLoaded( function(){

    $('.grid').masonry({
        // options...
        itemSelector: '.grid-item'
    });

    baguetteBox.run('.grid');

});
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyAWIyih--r1vCV49D9pVjLanZiYmvLhQ4w',
        libraries: 'places',
    },
});


const app = new Vue({
    el: '#app',
    /*
    data(){
        return{
            farmacias: []
        }
    },
    created(){
        axios.get('api/farmacias')
            .then((response : AxiosResponse<any> ) => this.farmacias = response.data)
            .catch((error) => console.error(error));
    },
    method: {
        getPosition(r){
            return{
                lat:parseFloat(r.latitude),
                lng:parseFloat(r.longitude)
            }

        }
    }
    */


    data () {
        return {
            center : {
                lat : 10,
                lng : 10
            }
        }
    },
    methods: {
        /*
        getCurrentPosition() {
            navigator.geolocation.getCurrentPosition().then(position => {
                console.log('Current', position)
                this.position = position
                this.center = Object.assign({}, this.center, {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                })
            })
        },
        mounted () {
            this.getCurrentPosition(
                this.geoId = Geolocation.watchPosition({enableHighAccuracy: true}, (position, err) => {
                    this.position = position
                }))
        },
        */
        getPosition(){
            navigator.geolocation.getCurrentPosition(
                position => {
                    console.log(position.coords.latitude);
                    console.log(position.coords.longitude);
                    this.center = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    }
                },
                error => {
                    console.log(error.message);
                    this.center = {
                        lat: 0,
                        lng: 0
                    }
                },
            )


        },
    }

});



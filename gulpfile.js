var elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');


elixir(function(mix) {
    mix.webpack('showtime_vue.js');
	/* mix.webpack('movie.js'); */
});
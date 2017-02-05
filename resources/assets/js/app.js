
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./components/users');
require('./components/posts');


import { setEventHandlers as userEventHandlers} from './components/users';
import { setEventHandlers as postsEventHandlers} from './components/posts';

$(document).ready(function() {
	userEventHandlers(); 
	postsEventHandlers();
	
    $('#flash-message').delay(2000).fadeOut(1000); 
   
});

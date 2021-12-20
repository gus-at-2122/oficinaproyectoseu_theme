// eslint-disable-next-line no-unused-vars
import config from '@config';
import './vendor/*.js';
import '@styles/frontend';
import '@images/favicon.ico';
import '@images/logo_eu.png';
import '@images/logo_eu_w.png';
import '@images/header-bg.jpg';
import '@images/pattern-1.png';
import '@images/pattern-bg.png';
import '@images/icons/email.png';
import '@images/icons/info.png';
import '@images/icons/location.png';
import '@images/icons/phone.png';
import '@images/icons/telegram.png';
import '@images/icons/linkedin.png';


import './spritesvg';

// Your code goes here ...
import 'jquery-parallax.js';


AOS.init({
  once: true
});

$(".menu-item-has-children").on("click", function(e){
  e.stopPropagation();
});

$('.menu-item-has-children').hover(function() {
  $(".dropdown-menu").delay(200).show();
}, function() {
  $(".dropdown-menu").delay(1000).hide(500);
});

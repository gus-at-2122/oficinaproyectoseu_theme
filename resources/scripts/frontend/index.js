// eslint-disable-next-line no-unused-vars
import config from '@config';
import './vendor/*.js';
import '@styles/frontend';
import '@images/favicon.ico';
import './spritesvg';

// Your code goes here ...
import 'jquery-parallax.js';

$( document ).ready(function() {

  $('*').on('click', function (e){
      console.log(e);
  });
  console.log( "ready!" );
});

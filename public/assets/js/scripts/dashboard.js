import {countLevel,sendData} from './functions.js';
$(document).ready(function(){
    sendData($('#logout'),'/logout');
    countLevel('/level');
});
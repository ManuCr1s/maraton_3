import { chainLocation, chainSelected,loadDate,onlyNumbers,chainCountryLocation,levelMax,countTotal} from './functions';
import route from './route';
import APP_INPUT from './form';
$(document).ready(function(){
    $("#preloader").hide();
    loadDate(APP_INPUT.country,route.country);
    loadDate(APP_INPUT.region,route.region);
    levelMax();
    countTotal();
    chainSelected(APP_INPUT.level,APP_INPUT.gender);
    chainLocation(APP_INPUT.region,APP_INPUT.province,route.province);
    chainLocation(APP_INPUT.province,APP_INPUT.district,route.district);
    chainCountryLocation(APP_INPUT.country,$('#location'),$('#seachdni'),$('#names'),$('#step-2'),APP_INPUT.type);
    APP_INPUT.number.on('keypress',onlyNumbers);
    APP_INPUT.phone.on('keypress',onlyNumbers);
});


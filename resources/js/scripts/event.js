import { chainLocation, chainSelected,loadDate,onlyNumbers,chainCountryLocation} from './functions';
import route from './route';
import APP_INPUT from './form';
import Swal from 'sweetalert2';
chainSelected(APP_INPUT.level,APP_INPUT.gender);
chainLocation(APP_INPUT.region,APP_INPUT.province,route.province);
chainLocation(APP_INPUT.province,APP_INPUT.district,route.district);
/* searchDni($('#seachdni'),route.api,APP_INPUT.country,APP_INPUT.type,APP_INPUT.number,$('#names'),APP_INPUT.name,APP_INPUT.lastname,$('#step-2')); */
loadDate(APP_INPUT.country,route.country);
loadDate(APP_INPUT.region,route.region);
chainCountryLocation(APP_INPUT.country,$('#location'),$('#seachdni'),$('#names'),$('#step-2'),APP_INPUT.type);
APP_INPUT.number.on('keypress',onlyNumbers);
APP_INPUT.phone.on('keypress',onlyNumbers);

var e_htz_image_banner = document.getElementsByClassName("htz_image_banner")[0]; 
var _e_nav = document.getElementsByTagName('nav')[0]; 
var _e_compare = document.getElementsByClassName('compare')[0]; 
var e_adminbar = document.getElementById('wpadminbar'); 
var limit = 0; 
var h_admin = 0; 
var h_nav = 0; 
var rect_nav = _e_nav.getBoundingClientRect(); 
var rect_admin; 
if(e_adminbar){     
	rect_admin = e_adminbar.getBoundingClientRect();    
	 h_admin = rect_admin.height; 
} 
limit = h_admin + rect_nav.height; 
var rect = e_htz_image_banner.getBoundingClientRect(); 
var _rect_compare = _e_compare.getBoundingClientRect(); 
var _init = _rect_compare.top; 
function scrollbanner(){         
	if(!e_htz_image_banner) {             return false;         }          
	_rect_compare = _e_compare.getBoundingClientRect();                     
	if(_rect_compare.top <= limit){                         
		if (!e_htz_image_banner.classList.contains("add_fix")) {                     
			e_htz_image_banner.className += ' add_fix';             }             
			e_htz_image_banner.style.top = limit+20+"px";         
		}else{             
			if (e_htz_image_banner.classList.contains("add_fix")) {                     
				e_htz_image_banner.classList.remove("add_fix");             
			}             
			e_htz_image_banner.style.top = "auto";         
		} 
	} 
window.addEventListener("scroll", scrollbanner,false);
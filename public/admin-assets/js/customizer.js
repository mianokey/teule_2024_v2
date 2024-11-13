(function(jQuery){"use strict";const storageDark=localStorage.getItem('dark')
if($('body').hasClass('dark')){changeMode('true');}else{changeMode('false');}
if(storageDark!=='null'){changeMode(storageDark)}
jQuery(document).on("change",'.change-mode input[type="checkbox"]',function(e){const dark=$(this).attr('data-active');if(dark==='true'){$(this).attr('data-active','false')}else{$(this).attr('data-active','true')}
changeMode(dark)})
function changeMode(dark){const body=jQuery('body')
if(dark==='true'){$('#dark-mode').prop('checked',true).attr('data-active','false')
$('.darkmode-logo').removeClass('d-none')
$('.light-logo').addClass('d-none')
body.addClass('dark')
dark=true}else{$('#dark-mode').prop('checked',false).attr('data-active','true');$('.light-logo').removeClass('d-none')
$('.darkmode-logo').addClass('d-none')
body.removeClass('dark')
dark=false}
updateLocalStorage(dark)
const event=new CustomEvent("ChangeColorMode",{detail:{dark:dark}});document.dispatchEvent(event);}
function updateLocalStorage(dark){localStorage.setItem('dark',dark)}})(jQuery)
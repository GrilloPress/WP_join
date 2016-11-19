 var getUrlParameter = function getUrlParameter(sParam) {
   var sPageURL = decodeURIComponent(window.location.search.substring(1)),
     sURLVariables = sPageURL.split('&'),
     sParameterName,
     i;

   for (i = 0; i < sURLVariables.length; i++) {
     sParameterName = sURLVariables[i].split('=');

     if (sParameterName[0] === sParam) {
       return sParameterName[1] === undefined ? true : sParameterName[1];
     }
   }
 };

 jQuery(document).ready(function() {

   onStart = true;

   if (onStart) {

     // On page load this counts the available job posts and injects the count in the job count span
     initalCount = jQuery('.vacancy:visible').length;
     jQuery("span.job-count").text(initalCount);
     onStart = false;

   }

   // This is horrendous. Make a function. Then call it.
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Administrative & Clerical')").addClass("administrative-clerical");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Allied Health Professionals')").addClass("allied-health");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Additional Clinical Services')").addClass("additional-clinical");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Additional Professional Scientific & Technical')").addClass("additional-professional");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Estates & Ancillary')").addClass("estates-ancillary");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Healthcare Scientists')").addClass("healthcare-scientists");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Medical & Dental')").addClass("medical-dental");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Nursing & Midwifery')").addClass("nursing-midwifery");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Students')").addClass("students");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Permanent')").addClass("permanent");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Fixed term')").addClass("fixed-term");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Voluntary')").addClass("voluntary");
   jQuery('div#results').find(".vacancy.card-vacancy:contains('Apprenticeship')").addClass("apprenticeship");
   jQuery("div#results a").attr('target', '_blank');

 });

 if (getUrlParameter("referrer")) {

   var referralSearchTerm = getUrlParameter("referrer");
   // Loop through the comment list
   jQuery("div.vacancy:visible").each(function() {
     // If the list item does not contain the text phrase fade it out
     if (jQuery(this).text().search(new RegExp(referralSearchTerm, "i")) < 0) {

       jQuery(this).hide();
       // Show the list item if the phrase matches and increase the count by 1
     } else {
       jQuery(this).show();
     }

   });

   // Scroll to results once filtered
   jQuery('html, body').animate({

     scrollTop: jQuery("#results").offset().top - 50
   });

 };


 // jQuery('#master').change(function(){
 jQuery(document).on('change keyup keypress', '#master', function(e) {

   if (e.which == 13) return false;
   if (e.which == 13) e.preventDefault();

   jQuery(".vacancy").show();

   var staffGroupValue = jQuery("#nhs-staff-groups input[type='radio']:checked").val();
   if (staffGroupValue) {

     var staffGroupSearch = "." + staffGroupValue;
     jQuery('div.vacancy:visible').not(staffGroupSearch).hide();

   }

   var jobTypeValue = jQuery("#nhs-job-type input[type='radio']:checked").val();
   if (jobTypeValue) {

     var jobTypeSearch = "." + jobTypeValue;
     jQuery('div.vacancy:visible').not(jobTypeSearch).hide();

   }

   var jobSearchValue = jQuery("#job-search input[type='text']").val();
   if (jobSearchValue) {

     // Loop through the comment list
     jQuery("div.vacancy:visible").each(function() {

       // If the list item does not contain the text phrase fade it out
       if (jQuery(this).text().search(new RegExp(jobSearchValue, "i")) < 0) {
         jQuery(this).hide();

         // Show the list item if the phrase matches and increase the count by 1
       } else {
         jQuery(this).show();
       }
     });

   }

   // After the results are sorted, it counts them and updated the job count element
   jobCount = jQuery('.vacancy:visible').length;
   jQuery("span.job-count").text(jobCount);

   // After the results are sorted, it finishes by scrolling the browser to the top of the results id
   if (jQuery(window).width() < 992) {

     jQuery('html, body').animate({
       scrollTop: jQuery("#results").offset().top - 50
     }, 1000);

   }


 });
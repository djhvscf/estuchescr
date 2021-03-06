;(function($) {
    // DOM Ready
   $(function() {

       // Binding a click event
       $('.vermodelo').on('click', function(e) {
           // Prevents the default action to be triggered.
			var toRedirect = undefined;
			if(e.target.href != undefined)
			{
				toRedirect = e.target.href;
			}else
			{
				toRedirect = e.target.parentElement.href;
			}
			
			e.preventDefault();
			// Triggering bPopup when click event is fired
			$('#element_to_pop_up').bPopup({
        	   								autoClose:2000, 
        	   								onClose: function(){window.location.href = toRedirect;},
        	   								easing: "swing",
        	   								escClose: false,
        	   								modalClose: false
       										});
       });
   });
})(jQuery);
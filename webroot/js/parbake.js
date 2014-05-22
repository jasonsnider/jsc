/**
 * Provides basic Parbake functionality using the module pattern 
 * @type {ObjectLiteral}
 */
var Parbake = (function() {
    "use strict"; /*jslint browser:true */
    return{
        /**
         * Toggles the side navigation on and off.
         * @param {string} id
         * @returns {void}
         */
        sideNav: function(){
            if(!$('#SideNav').is(':visible')){
                $('#SideNav').css('display', 'block');
            }else{
                $('#SideNav').css('display', 'none');
            }
        }
    }
})();

/**
 * Event listners for basic CRM functionality 
 * @returns {void}
 */
(function ($){
    "use strict"; /*jslint browser:true */
    $(function () {
/*
        $(document).on('click.data-api', '[data-toggle="tbs-in"]', function (event) {
            event.preventDefault();
            return Parbake.sideNav();
        });
        */
        $(document).on('click.data-api', '[data-toggle=offcanvas]', function (event) {
            event.preventDefault();
            $('.row-offcanvas').toggleClass('active');
        });

    });
    
}(jQuery));
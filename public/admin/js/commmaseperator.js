(function($, undefined) {

    "use strict";

    // When ready.
    $(function() {

        let $form = $( "#form" );
        let $input = $form.find( "input" );

        $input.on( "keyup", function( event ) {


            // When user select text in the document, also abort.
            let selection = window.getSelection().toString();
            if ( selection !== '' ) {
                return;
            }

            // When the arrow keys are pressed, abort.
            if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                return;
            }


            let $this = $( this );

            // Get the value.
            let input = $this.val();

            let input = input.replace(/[\D\s\._\-]+/g, "");
            input = input ? parseInt( input, 10 ) : 0;

            $this.val( function() {
                return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
            } );
        } );

        /**
         * ==================================
         * When Form Submitted
         * ==================================
         */
        $form.on( "submit", function( event ) {

            let $this = $( this );
            let arr = $this.serializeArray();

            for (let i = 0; i < arr.length; i++) {
                arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
            }

            console.log( arr );

            event.preventDefault();
        })

    });
})(jQuery);
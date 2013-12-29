/**
 * Provides UI controls and functionality for content forms
 * @type ContentForm._L4.Anonym$0
 */
var ContentForm = (function(){

    return {
        getType: function(){

            var index = $('#ContentContentType').val();
            return index;
        },
        setDisplay: function(){
            if(ContentForm.getType() === 'meta_data'){
                $('#MetaDataFormFields').attr('style', 'display: block');
            }else{
                $('#MetaDataFormFields').attr('style', 'display: none');
            }
        }
    }

})();
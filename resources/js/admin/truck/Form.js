import AppForm from '../app-components/Form/AppForm';

Vue.component('truck-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                color:  '' ,
                manufacturer:  '' ,
                no_of_wheels:  '' ,
                plate_no:  '' ,
                type:  '' ,
                
            }
        }
    }

});
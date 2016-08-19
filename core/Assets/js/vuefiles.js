import Vue from 'vue';

import Question from './components/Question.vue';

Vue.use(require('vue-resource'));

Vue.http.headers.common['X-CSRF-TOKEN'] = $("input[name=_token]").attr("value");

new Vue({
    el : '#app',
    data : {
        hello : 'Hello'
    },
    components : { Question }
});



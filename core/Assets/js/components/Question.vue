<template>

</template>

<script>
    export default{
        name : "Question",

        props : ['id'],

        data : function() {
            return {
                assignment :{
                    new_question:{
                        question:''
                    },
                    title:'',
                    sem : '1',
                    subject_id :'',
                    questions : [  ],

                }
            }
        },
        ready : function(){
                var  vm = this;
               this.$http.get('/workspace/faculty/assignments/1')
                       .then(function ( data) {
                           console.log(data.body);
                           vm.assignment.title = data.body['title'];
                        }),
                            function () {
                                console.log('fail work');
                           alert('fail');
                       }

        },
        methods : {
            add: function(){
                var vm = this;
                vm.assignment.questions.push( {question : vm.assignment.new_question.question} );
                vm.assignment.new_question.question='';
            },
            submit: function(){
                var vm = this;
                this.$http.post('/workspace/faculty/assignments', { assignment : vm.assignment})
                        .then(function(data) {
                                    alert('success');
                                },
                                function(data)
                                {
                                    alert('failed');
                                });
            },
            getRemoved: function(question)
            {
                var vm = this;
                vm.assignment.questions.$remove(question);
                console.log(question);
            }
        }
    }
</script>
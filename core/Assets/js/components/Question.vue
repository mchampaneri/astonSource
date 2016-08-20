<template>

</template>

<script>
    export default{
        name : "Question",
        data : function() {
                return {
                    assignment :{
                        new_question:{
                            question:''
                        },
                        title:'',
                        sem : '1',
                        subject_id :'',
                        questions : [ {question:"new Questoin"},{question:"new Questoin"} ]
                    }
                }
        },
        Ready : function(){
            console.log("Questions ready");
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
                                console.log(data)
                            },
                            function(data)
                            {
                                console.log(data);
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
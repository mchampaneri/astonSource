<template>
    <div class="container">
        <input type="text"  v-model="new_question.question" class="form-control text">
        <input type="button" v-on:click="add()" value="Add Question">
    </div>

</template>

<script>
    export default{
        name : "Question",
        data : function() {
                return {
                    new_question:{
                        question:''
                    },
                    questions : []
                }
        },
        Ready : function(){
            console.log("Questions ready");
        },
        methods : {
                add: function(){
                    vm = this;
                    vm.questions.push( vm.new_question.question
                         );
                    vm.new_question.question='';
                }
        }
    }
</script>
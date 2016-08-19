<template>

</template>

<script>
    export default{
        name: "Assignment",
        ready : function () {
            console.log('Assignment vue is ready');
        },
        data : function() {
            return {
                title:'',
                subject_id : '',
                sem : ''
            }
        },
        component:{Question}
    }
</script>
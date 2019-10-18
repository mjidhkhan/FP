<template>
    <div>
        <message v-text="test.message"></message>
		<br>
        <message v-text="test.hello"></message>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

            axios.post('api/vue', {})
            .then(response=>{
                this.test= response.data;
            })
        },
        data:()=>{
            return {
                test:null,
            }
        },
        props:[
            'test', 
            
        ]
    }
</script>

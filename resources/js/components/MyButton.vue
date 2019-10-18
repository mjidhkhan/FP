<template>
    <div>
        <button :type="submit" class="btn btn-outline-primary" v-text="text">My Button</button>
        <p v-text="test"></p>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        
        props:[
            'text', 
            'type'
            
        ]
    }
</script>

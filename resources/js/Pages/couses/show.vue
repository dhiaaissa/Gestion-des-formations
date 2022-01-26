<template>
    <app-layout>
        <template #header>
            {{ course.title }}
        </template>
        <div class="max-w-7xl py-6 mx-auto sm:px-6 lg:px-8">
            <div class="text-3xl mb-3">{{ course.episodes[0].title }}</div>
            
            <div class="text-sm text-gray-500 my-3">{{ course.episodes[0].description }}</div>
            
         
        </div>
    </app-layout>
</template>

<script>

import AppLayout from'./../../Layouts/AppLayout.vue';
export default {
    components:{
        AppLayout
    },

     props:['course'],

    data()
    {
        return {
            courseShow: this.courses
        }

    },

   
    mounted(){
        //console.log(this.courseShow);
    }
    
}
</script>
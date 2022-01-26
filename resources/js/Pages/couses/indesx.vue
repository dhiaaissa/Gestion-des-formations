<template>
    <app-layout>
        <template #header>
            Lise des formation
        </template>
         <div class="py-3" v-for="course in this.courseList" v-bind:key="course.id">
             <div class="mx-8 bg-white  rounded shadow p-4 ">
                  <div class="text-sm text-gray-500"> Mise en ligne par {{course.user.name}} </div>
            <div class="flex justify-between items-center">
                <div class="text-2xl"> {{course.title}} </div>
                <div class="text-sm text-grey-500">{{course.episodes_count}} sciences</div>
            </div>
            <div class="text-sm text-gray-500"> {{course.description}} </div>

             <a :href="'course/' + course.id" class="bg-indigo-500 text-zinc-300 px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-slate-600">Participer a la formation</a>
            </div>
        </div>
    </app-layout>
</template>

<script>

import AppLayout from'./../../Layouts/AppLayout.vue';
export default {
    components:{
        AppLayout
    },


     props:['courses'],

    data()
    {
        return {
            courseList: this.courses
        }

    },

   
    mounted(){
        console.log(this.courseList);
    }
    
}
</script>
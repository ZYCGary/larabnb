<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Places
            </h2>
        </template>

        <div class="py-12">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <place-card v-for="item of places" :key="item.id" :place="item"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import PlaceCard from "@/Pages/Place/PlaceCard";

export default {
    name: "Index",

    components: {
        PlaceCard,
        AppLayout,
    },

    props: ['places'],

    mounted() {
        console.log(this.places)
    }
}
</script>

<style scoped>

</style>

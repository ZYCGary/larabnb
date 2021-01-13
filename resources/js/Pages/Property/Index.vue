<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Properties
            </h2>
        </template>

        <div class="py-12">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <property-card v-for="item of properties" :key="item.id" :place="item"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import PropertyCard from "@/Pages/Property/PropertyCard";

export default {
    name: "Index",

    components: {
        PropertyCard,
        AppLayout,
    },

    props: ['properties'],

    mounted() {
    }
}
</script>

<style scoped>

</style>

<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Properties
            </h2>
        </template>

        <template #main>
            <div class="flex flex-wrap -m-4">
                <property-card v-for="item of properties" :key="item.id" :place="item"/>
            </div>
        </template>

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

<template>
    <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                 src="https://dummyimage.com/420x260">
        </a>
        <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ place.rental_type }}</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">${{ place.rent }} / week</h2>
            <p class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ availableData }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "PropertyCard",

    props: ['place'],

    computed: {
        availableData: function () {
            let now = new Date();
            let available = new Date(this.place.available_on);

            return now <= available ? this.place.available_on : 'Available Now'
        }
    }
}
</script>

<style scoped>

</style>

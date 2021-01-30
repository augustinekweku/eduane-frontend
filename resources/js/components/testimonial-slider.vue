<template>
<div>
<carousel :autoplay="true" :touchDrag="true" :responsive="{0:{items:1,nav:false},600:{items:3,nav:false}}">
<div class="carousel-item mx-4">
    <figure class="bg-gray-100 rounded-xl p-8">
        <img class="w-32 h-32 rounded-full mx-auto" src="img/oworae.jpeg" alt="" width="512" height="512">
        <div class="pt-6 text-center space-y-4">
            <blockquote>
            <p class="text-lg font-semibold">
                “Tailwind CSS is the only framework that I've seen scale
                on large teams. It’s easy to customize, adapts to any design,
                and the build size is tiny.”
            </p>
            </blockquote>
            <figcaption class="font-medium">
            <div class="text-cyan-600">
                Sarah Dayan
            </div>
            <div class="text-red-500">
                Get lean Plan
            </div>
            </figcaption>
        </div>
    </figure>
</div>
<div class="carousel-item mx-4">
    <figure class="bg-gray-100 rounded-xl p-8">
        <img class="w-32 h-32 rounded-full mx-auto" src="img/male-avatar.jpeg" alt="" width="384" height="512">
        <div class="pt-6 text-center space-y-4">
            <blockquote>
            <p class="text-lg font-semibold">
                “Tailwind CSS is the only framework that I've seen scale
                on large teams. It’s easy to customize, adapts to any design,
                and the build size is tiny.”
            </p>
            </blockquote>
            <figcaption class="font-medium">
            <div class="text-cyan-600">
                Sarah Dayan
            </div>
            <div class="text-gray-500">
                Staff Engineer, Algolia
            </div>
            </figcaption>
        </div>
    </figure>
</div>
<div class="carousel-item mx-4">
    <figure class="bg-gray-100 rounded-xl p-8">
        <img class="w-32 h-32 rounded-full mx-auto" src="img/male-avatar.jpeg" alt="" width="384" height="512">
        <div class="pt-6 text-center space-y-4">
            <blockquote>
            <p class="text-lg font-semibold">
                “Tailwind CSS is the only framework that I've seen scale
                on large teams. It’s easy to customize, adapts to any design,
                and the build size is tiny.”
            </p>
            </blockquote>
            <figcaption class="font-medium">
            <div class="text-cyan-600">
                Sarah Dayan
            </div>
            <div class="text-gray-500">
                Staff Engineer, Algolia
            </div>
            </figcaption>
        </div>
    </figure>
</div>
<div class="carousel-item mx-4">
    <figure class="bg-gray-100 rounded-xl p-8">
        <img class="w-32 h-32 rounded-full mx-auto" src="img/male-avatar.jpeg" alt="" width="384" height="512">
        <div class="pt-6 text-center space-y-4">
            <blockquote>
            <p class="text-lg font-semibold">
                “Tailwind CSS is the only framework that I've seen scale
                on large teams. It’s easy to customize, adapts to any design,
                and the build size is tiny.”
            </p>
            </blockquote>
            <figcaption class="font-medium">
            <div class="text-cyan-600">
                Sarah Dayan
            </div>
            <div class="text-gray-500">
                Staff Engineer, Algolia
            </div>
            </figcaption>
        </div>
    </figure>
</div>

</carousel>
</div>
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
    data() {
        return {
        }
    },
        components: { carousel },

    methods: {

    },
created() {
    console.log('here we go...')
}
}
</script>

<style>
.owl-carousel .owl-item img {
    display: block;
    width: auto;
}
</style>
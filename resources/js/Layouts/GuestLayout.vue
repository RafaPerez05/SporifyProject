<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import TextInscreva from '@/Components/TextInscreva.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex flex-col min-h-screen bg-neutral-900">

    <div>
        <Link href="/">
        <div class="logo mt-8 ml-8">
            <ApplicationLogo />
        </div>
        </Link>
    </div>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-neutral-900">
        <TextInscreva />
        <div class="w-full sm:max-w-md mt-6 px-6 py-4">
            <slot />
        </div>
    </div>
</div>
</template>

<style>
.logo {
}
</style>

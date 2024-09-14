<template>
    <!-- Main Content -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>

        <Footer/>
    </div>
</template>

<script>
    import Footer from './components/includes/Footer.vue';
    export default {
        components: { Footer },
    }
</script>

<style>
/* Optionally add custom styles here */
</style>

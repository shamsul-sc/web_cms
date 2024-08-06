<template>
    <div>
        <!-- <Navbar/> -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <router-view></router-view>
                </div>
            </div>

            <Footer/>
        </div>


        <!-- <div class="container my-4">
            <router-view></router-view>
        </div> -->

    </div>
</template>

<script>
import Navbar from './components/includes/Navbar.vue';
import Footer from './components/includes/Footer.vue';

export default {
    components: { Navbar, Footer },

    mounted() {
        console.log('ok')
        initializeCharCount();
    }
}
</script>

<style>
/* Optionally add custom styles here */
</style>

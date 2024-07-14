<template>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-gradient-primary text-white">
                <h1 class="card-title text-center">Edit a slider</h1>
            </div>
            <div class="card-body">
                <div v-if="successMessage" class="alert alert-success">
                    {{ successMessage }}
                </div>
                <form @submit.prevent="updateHomeSlider">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="slider_text_top" class="form-label">Slider Text (Top):</label>
                            <input type="text" class="form-control" id="slider_text_top" v-model="homeSlider.slider_text_top"
                                placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="slider_text_middle" class="form-label">Slider Text (Middle):</label>
                            <input type="text" class="form-control" id="slider_text_middle" v-model="homeSlider.slider_text_middle"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="row g-3">                        
                        <div class="col-md-12">
                            <label for="slider_text_last" class="form-label">Slider Text (Last):</label>
                            <input type="text" class="form-control" id="slider_text_last" v-model="homeSlider.slider_text_last"
                                placeholder="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="image" class="form-label">Slider Image:</label>
                            <input type="text" class="form-control" id="image" v-model="homeSlider.image"
                                placeholder="" required>
                        </div> 
                        <div class="col-md-6">
                            <label for="alt_tag" class="form-label">Image Alt Tag:</label>
                            <input type="text" class="form-control" id="alt_tag" v-model="homeSlider.alt_tag"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="button_text" class="form-label">Slider Button Text:</label>
                            <input type="text" class="form-control" id="button_text" v-model="homeSlider.button_text"
                                placeholder="" required>
                        </div> 
                        <div class="col-md-6">
                            <label for="button_url" class="form-label">Slider Button Url:</label>
                            <input type="text" class="form-control" id="button_url" v-model="homeSlider.button_url"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="position" class="form-label">Slider Position:</label>
                            <input type="number" class="form-control" id="position" v-model="homeSlider.position"
                                placeholder="" required>
                        </div> 
                        <div class="col-md-6">
                            <label for="status" class="form-label">Slider Status:</label>
                            <input type="text" class="form-control" id="status" v-model="homeSlider.status"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-4">Update Slider</button>
                    </div>
                </form>
                <div class="mt-4 d-flex justify-content-start">
                    <router-link :to="{ name: 'Index' }" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Return to Slider List
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.bg-gradient-primary {
    background: linear-gradient(45deg, #007bff, #6610f2);
}
</style>

<script>
import { onMounted, reactive, ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';

export default {
    setup() {
        const homeSlider = reactive({ slider_text_top: '', slider_text_middle: '', slider_text_last: '', image: '', alt_tag: '', button_text: '', button_url: '', position: '', status: '' });
        const route = useRoute();
        const router = useRouter();
        const successMessage = ref('');

        const getHomeSlider = async () => {
            try {
                const uri = `http://localhost:8000/home-sliders/${route.params.id}/edit`;
                const response = await axios.get(uri);
                Object.assign(homeSlider, response.data);
            }
            catch (error) {
                console.error("Failed to fetch slider:", error);
            }
        };

        const updateHomeSlider = async () => {
            const uri = `http://localhost:8000/home-sliders/${route.params.id}`;
            console.log(uri)
            await axios.patch(uri, homeSlider);
            successMessage.value = 'Slider Updated Successfully!';
            setTimeout(() => {
                successMessage.value = '';
                router.push({ name: 'Index' });
            }, 1000);
        };

        onMounted(getHomeSlider);

        return {
            homeSlider,
            updateHomeSlider,
            successMessage
        };
    }
}
</script>
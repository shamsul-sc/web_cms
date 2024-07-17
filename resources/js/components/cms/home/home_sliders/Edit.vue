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
                <div v-if="errorMessage" class="alert alert-danger">
                    {{ errorMessage }}
                </div>
                <form @submit.prevent="updateHomeSlider" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="slider_text_top" class="form-label">Slider Text (Top):</label>
                            <input type="text" class="form-control" id="slider_text_top" v-model="homeSlider.slider_text_top"
                                placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="slider_text_last" class="form-label">Slider Text (Last):</label>
                            <input type="text" class="form-control" id="slider_text_last" v-model="homeSlider.slider_text_last"
                                placeholder="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="image" class="form-label">Slider Image:</label>
                            <input type="file" class="form-control" id="image" @change="handleFileUpload" required>
                            <div v-if="homeSlider.image_url">
                                <img :src="homeSlider.image_url" alt="Slider Image" class="img-thumbnail mt-2" style="max-height: 150px;">
                            </div>
                            <div v-if="validationErrors.image" class="text-danger">
                                {{ validationErrors.image[0] }}
                            </div>
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

<script setup>
import { onMounted, reactive, ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';

const homeSlider = reactive({
    slider_text_top: '',
    slider_text_last: '',
    image: null,
    image_url: '', // Added for displaying current image
    alt_tag: '',
    button_text: '',
    button_url: '',
    position: '',
    status: ''
});
const route = useRoute();
const router = useRouter();
const successMessage = ref('');
const errorMessage = ref('');
const validationErrors = reactive({});

const handleFileUpload = (event) => {
    homeSlider.image = event.target.files[0];
    homeSlider.image_url = URL.createObjectURL(homeSlider.image);
};

const getHomeSlider = async () => {
    try {
        const uri = `http://localhost:8000/home-sliders/${route.params.id}/edit`;
        const response = await axios.get(uri);
        Object.assign(homeSlider, response.data);
        homeSlider.image_url = response.data.image_url; // Set the image URL for display
    } catch (error) {
        console.error("Failed to fetch slider:", error);
    }
};

const updateHomeSlider = async () => {
    const uri = `http://localhost:8000/home-sliders/${route.params.id}`;
    const formData = new FormData();

    for (const key in homeSlider) {
        if (homeSlider[key] !== null) { // Ensure null values are not appended
            formData.append(key, homeSlider[key]);
        }
    }

    try {
        await axios.post(uri, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        successMessage.value = 'Slider Updated Successfully!';
        errorMessage.value = '';
        setTimeout(() => {
            successMessage.value = '';
            router.push({ name: 'Index' });
        }, 1000);
    } catch (error) {
        console.error('Error updating slider:', error);
        if (error.response && error.response.data) {
            errorMessage.value = error.response.data.message || 'Error updating slider.';
            Object.assign(validationErrors, error.response.data.errors || {});
        } else {
            errorMessage.value = 'An unexpected error occurred.';
        }
    }
};

onMounted(getHomeSlider);
 
</script>
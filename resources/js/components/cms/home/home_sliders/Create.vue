<template>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-gradient-primary text-white">
                <h1 class="card-title">Add a slider</h1>
            </div>
            <div class="card-body">
                <div v-if="successMessage" class="alert alert-success">
                    {{ successMessage }}
                </div>
                <div v-if="errorMessage" class="alert alert-danger">
                    {{ errorMessage }}
                </div>
                <form @submit.prevent="addSlider" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="slider_text_top" class="form-label">Slider Text (Top):</label>
                            <input type="text" class="form-control" id="slider_text_top" v-model="homeSlider.slider_text_top"
                                placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="slider_text_last" class="form-label">Slider Text (Bottom):</label>
                            <input type="text" class="form-control" id="slider_text_last" v-model="homeSlider.slider_text_last"
                                placeholder="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="image" class="form-label">Slider Image:</label>
                            <input type="file" class="form-control" id="image" @change="handleFileUpload" required>
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
                            <select class="form-control" id="status" v-model="homeSlider.status" required>
                                <option value="" disabled>Select Status</option>
                                <option value="show">Show</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary px-4"><i class="bi bi-plus-lg"></i> Add
                            Slider</button>
                    </div>
                </form>
                <div class="mt-4 d-flex justify-content-start">
                    <router-link :to="{ name: 'home-sliders.index' }" class="btn btn-outline-secondary">
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
import { reactive, ref } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';

const homeSlider = reactive({
    slider_text_top: '',
    slider_text_last: '',
    image: null,  // Changed to null
    alt_tag: '',
    button_text: '',
    button_url: '',
    position: '',
    status: ''
});
const router = useRouter();
const successMessage = ref('');
const errorMessage = ref('');
const validationErrors = reactive({});

const handleFileUpload = (event) => {
    homeSlider.image = event.target.files[0];
};

const addSlider = async () => {
    const uri = 'http://localhost:8000/home-sliders';
    const formData = new FormData();

    for (const key in homeSlider) {
        formData.append(key, homeSlider[key]);
    }

    try {
        await axios.post(uri, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        successMessage.value = 'Slider added successfully!';
        errorMessage.value = '';
        setTimeout(() => {
            successMessage.value = '';
            router.push({ name: 'home-sliders.index' });
        }, 1000);
    } catch (error) {
        console.error('Error adding slider:', error);
        // Handle the error appropriately
        if (error.response && error.response.data) {
            errorMessage.value = error.response.data.message || 'Error adding slider.';
            Object.assign(validationErrors, error.response.data.errors || {});
        } else {
            errorMessage.value = 'An unexpected error occurred.';
        }
    }
};
</script>
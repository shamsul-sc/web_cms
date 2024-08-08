<template>
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex bg-gradient-primary">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Edit slider</h4>
                    <div class="flex-shrink-0">
                        <router-link :to="{ name: 'home-sliders.index' }" class="btn btn-info btn-sm">
                            <i class="ri-arrow-go-back-line"></i> Go to list
                        </router-link>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div v-if="successMessage" class="alert alert-success">
                        {{ successMessage }}
                    </div>
                    <div v-if="errorMessage" class="alert alert-danger">
                        {{ errorMessage }}
                    </div>
                    <form @submit.prevent="updateHomeSlider" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="slider_text_top" v-model="homeSlider.slider_text_top" class="form-control" v-charcount maxlength="100" placeholder=" " required>
                                <label for="slider_text_top" class="form-label">Slider Text (Top) <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="slider_text_last" v-model="homeSlider.slider_text_last" class="form-control" v-charcount maxlength="255" placeholder=" " required>
                                <label for="slider_text_last" class="form-label">Slider Text (Last) <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="slider_text_top_bn" v-model="homeSlider.slider_text_top_bn" class="form-control" v-charcount maxlength="100" placeholder=" " required>
                                <label for="slider_text_top_bn">Slider Text (Top-Bangla)</label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="slider_text_last_bn" v-model="homeSlider.slider_text_last_bn" class="form-control" v-charcount maxlength="255" placeholder=" " required>
                                <label for="slider_text_last_bn">Slider Text (Bottom-Bangla)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <label for="image">Image File <span class="required">*</span></label>
                                <input type="file" class="form-control" id="image" @change="handleFileUpload">
                                <div v-if="homeSlider.image_url">
                                    <img :src="homeSlider.image_url" alt="Slider Image" class="img-thumbnail mt-2" style="max-height: 150px;">
                                </div>
                                <div v-if="validationErrors.image" class="text-danger">
                                    {{ validationErrors.image[0] }}
                                </div>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" class="form-control" id="alt_tag" v-model="homeSlider.alt_tag" placeholder="" required>
                                <label for="alt_tag">Image Alt Tag</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 outlined-input-container">
                                <input type="text" class="form-control" id="button_text" v-model="homeSlider.button_text" placeholder="" required>
                                <label for="button_text">Slider Button Text</label>
                            </div>
                            <div class="col-md-3 outlined-input-container">
                                <input type="text" class="form-control" id="button_text_bn" v-model="homeSlider.button_text_bn"
                                    placeholder="">
                                <label for="button_text_bn">Button Text (Bangla)</label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" class="form-control" id="button_url" v-model="homeSlider.button_url" placeholder="" required>
                                <label for="button_url">Slider Button Url</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="number" class="form-control" id="position" v-model="homeSlider.position" placeholder="" required>
                                <label for="position">Slider Position</label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" class="form-control" v-model="homeSlider.status" placeholder="" required>
                                <label for="status">Slider Status</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4">Update Slider</button>
                        </div>
                    </form>
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
    slider_text_top_bn: '',
    slider_text_last: '',
    slider_text_last_bn: '',
    image: 'null',
    image_url: '', // Added for displaying current image
    alt_tag: '',
    button_text: '',
    button_text_bn: '',
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
            router.push({ name: 'home-sliders.index' });
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

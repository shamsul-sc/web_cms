<template>
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex bg-gradient-primary">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Add a slider</h4>
                    <div class="flex-shrink-0">
                        <router-link :to="{ name: 'home-sliders.index' }" class="btn btn-info btn-sm">
                            <i class="ri-arrow-go-back-line"></i> Go to list
                        </router-link>
                    </div>
                </div><!-- end card header -->

                <div class="card-body mt-2">
                    <div v-if="successMessage" class="alert alert-success">
                        {{ successMessage }}
                    </div>
                    <div v-if="errorMessage" class="alert alert-danger">
                        {{ errorMessage }}
                    </div>
                    <form @submit.prevent="addSlider" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="slider_text_top" v-model="homeSlider.slider_text_top" class="form-control" v-charcount maxlength="100" placeholder=" " required>
                                <label for="slider_text_top">Slider Text (Top) <span class="required">*</span></label>

                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="slider_text_last" v-model="homeSlider.slider_text_last" class="form-control" v-charcount maxlength="255" placeholder=" " required>
                                <label for="slider_text_last">Slider Text (Bottom) <span class="required">*</span></label>
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
                                <input type="file" class="form-control" id="image" @change="handleFileUpload" required>
                                <div v-if="validationErrors.image" class="text-danger">
                                    {{ validationErrors.image[0] }}
                                </div>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" class="form-control" id="alt_tag" v-model="homeSlider.alt_tag"
                                    placeholder="">
                                <label for="alt_tag" class="form-label">Image Alt Tag</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 outlined-input-container">
                                <input type="text" class="form-control" id="button_text" v-model="homeSlider.button_text"
                                    placeholder="">
                                <label for="button_text">Button Text</label>
                            </div>
                            <div class="col-md-3 outlined-input-container">
                                <input type="text" class="form-control" id="button_text_bn" v-model="homeSlider.button_text_bn"
                                    placeholder="">
                                <label for="button_text_bn">Button Text (Bangla)</label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" class="form-control" id="button_url" v-model="homeSlider.button_url"
                                    placeholder="">
                                <label for="button_url">Slider Button Url</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="number" class="form-control" id="position" v-model="homeSlider.position"
                                    placeholder="" required>
                                <label for="position">Slider Position (Only number) <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <select class="form-select" v-model="homeSlider.status" required>
                                    <option value="" disabled>Select Status</option>
                                    <option value="show">Show</option>
                                    <option value="hide">Hide</option>
                                </select>
                                <label>Slider Status <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4"><i class="bi bi-plus-lg"></i> Add
                                Slider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->
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
    slider_text_top_bn: '',
    slider_text_last: '',
    slider_text_last_bn: '',
    image: null,  // Changed to null
    alt_tag: '',
    button_text: '',
    button_text_bn: '',
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

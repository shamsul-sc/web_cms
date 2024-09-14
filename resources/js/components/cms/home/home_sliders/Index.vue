<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div v-if="successMessage" class="alert alert-success">
                        {{ successMessage }}
                    </div>
                    <div class="card">
                        <div class="card-header" style="background-color: rgb(93, 198, 93);">
                            <h5 class="card-title mb-0">Home Sliders</h5>
                        </div>
                        <router-link :to="{ name: 'home-sliders.create' }" class="btn btn-success">
                            <i class="bi bi-plus-lg"></i> Create New Slider
                        </router-link>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Slider Text Top</th>
                                            <th scope="col">Slider Image</th>
                                            <th scope="col">Button Text</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 20%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="homeSlider in homeSliders" :key="homeSlider.id">
                                            <td>{{ homeSlider.slider_text_top }}</td>
                                            <td>
                                                <div v-if="homeSlider.image_url">
                                                    <img :src="homeSlider.image_url" alt="Slider Image" class="img-thumbnail" style="max-height: 50px;">
                                                </div>
                                            </td>
                                            <td>{{ homeSlider.button_text }}</td>
                                            <td>{{ homeSlider.status }}</td>
                                            <td>
                                                <router-link :to="{ name: 'home-sliders.edit', params: { id: homeSlider.id } }"
                                                    class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-pencil-square me-1"></i>
                                                    Edit</router-link>
                                                <button class="btn btn-sm btn-outline-danger" @click="openDeleteConfirmation(homeSlider.id)"> <i
                                                        class="bi bi-trash me-1"></i> Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel"
            aria-hidden="true" ref="deleteModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                        <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this slider?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="closeModal">Cancel</button>
                        <button type="button" class="btn btn-danger" @click="confirmDelete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <!-- <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel"
        aria-hidden="true" ref="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this slider?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="closeModal">Cancel</button>
                    <button type="button" class="btn btn-danger" @click="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div> -->
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';

const homeSliders = ref([]);
const homeSliderIdToDelete = ref(null);
const deleteModal = ref(null);
const successMessage = ref('');

const fetchHomeSliders = async () => {
    try {
        const uri = 'http://localhost:8000/home-sliders';
        const response = await axios.get(uri);
        // homeSliders.value = response.data;
        homeSliders.value = response.data.map(slider => {
            // Construct the full image URL
            slider.image_url = slider.image ? `http://localhost:8000/storage/slider_images/${slider.image}` : '';
            return slider;
        });
    } catch (error) {
        console.error('Error fetching homeSliders:', error);
    }
};

const openDeleteConfirmation = (id) => {
    homeSliderIdToDelete.value = id;
    const modalInstance = new bootstrap.Modal(deleteModal.value);
    modalInstance.show();
};

const closeModal = () => {
    const modalInstance = bootstrap.Modal.getInstance(deleteModal.value);
    if (modalInstance) {
        modalInstance.hide();
    }
};

const confirmDelete = async () => {
    if (homeSliderIdToDelete.value !== null) {
        await deleteHomeSlider(homeSliderIdToDelete.value);
        closeModal();
    }
};

const deleteHomeSlider = async (id) => {
    try {
        const uri = `http://localhost:8000/home-sliders/${id}`;
        await axios.delete(uri);
        homeSliders.value = homeSliders.value.filter((homeSlider) => homeSlider.id !== id);
        successMessage.value = 'Slider deleted successfully!';
        setTimeout(() => {
            successMessage.value = '';
            router.push({ name: 'home-sliders.index' });
        }, 1000);
    } catch (error) {
        console.error('Error deleting slider:', error);
    }
};

onMounted(fetchHomeSliders);

</script>
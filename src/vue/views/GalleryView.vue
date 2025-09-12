<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { axiosInstance } from '../utils/axios-instances';
import { TTGalleryResponse } from '../types/TGalleryResponse';

const gallery = ref<TTGalleryResponse['gallery']>([]);

async function getData() {
  const response = await axiosInstance.get('/api/v1/gallery');
  const data = response.data as TTGalleryResponse;
  gallery.value = data.gallery;
}

onMounted(() => {
  getData();
});
</script>

<template>
  <div class="gallery-view container">
    <div class="gallery-view__wrapper" v-if="gallery.length">
      <div
        class="gallery-view__item"
        v-for="(item, index) in gallery"
        :key="index"
      >
        <img :src="item" alt="" />
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.gallery-view {
  padding-block: 6.4rem;
  &__wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
  }

  &__item {
    position: relative;
    aspect-ratio: 1.13/1;
    border-radius: var(--img-bdr);
    overflow: hidden;

    img {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }
}
</style>

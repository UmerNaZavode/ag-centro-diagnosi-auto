<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { axiosInstance } from '../utils/axios-instances';
import { TItem, TOurServicesResponse } from '../types/TOurServicesResponse';
import OurServicesItem from '../components/services/OurServicesItem.vue';
import OurServicesPopup from '../components/services/OurServicesPopup.vue';

const services = ref<TItem[]>([]);

async function getData() {
  const response = await axiosInstance.get('/api/v1/services');
  // console.log(response);

  const data = response.data as TOurServicesResponse;
  console.log(data);
  services.value = data.our_services.items;
}

onMounted(() => {
  getData();
});
</script>

<template>
  <div class="our-services">
    <div class="container">
      <div class="our-services__wrap" v-if="services && services.length">
        <div
          class="our-services__item"
          v-for="(item, index) in services"
          :key="index"
        >
          <OurServicesItem :item="item" :index="index" />
        </div>
      </div>
    </div>
    <OurServicesPopup />
  </div>
</template>

<style lang="scss">
.our-services {
  padding-block: 6.4rem;

  &__wrap {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(34rem, 1fr));
    gap: 1rem;
  }
}
</style>

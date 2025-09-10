<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { axiosInstance } from '../utils/axios-instances';
import { TItem, TOurServicesResponse } from '../types/TOurServicesResponse';
import OurServicesItem from '../components/services/OurServicesItem.vue';
import OurServicesPopup from '../components/services/OurServicesPopup.vue';

const services = ref<TItem[]>([]);
const is_popup_open = ref(false);
const popup_title = ref('');
const popup_text = ref('');

async function getData() {
  const response = await axiosInstance.get('/api/v1/services');
  // console.log(response);

  const data = response.data as TOurServicesResponse;
  console.log(data);
  services.value = data.our_services.items;
}

function emitIndex(index: number) {
  is_popup_open.value = true;
  const data = services.value.filter((item, idx) => {
    return index === idx;
  });
  popup_title.value = data[0].title;
  popup_text.value = data[0].description;
}

function emitClose() {
  is_popup_open.value = false;
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
          <OurServicesItem
            :item="item"
            :index="index"
            @emit_index="emitIndex"
          />
        </div>
      </div>
    </div>
    <Transition name="fade">
      <OurServicesPopup
        v-if="is_popup_open"
        :title="popup_title"
        :text="popup_text"
        @emit_close="emitClose"
      />
    </Transition>
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

/* popup fade transition */
.fade-enter-active,
.fade-leave-active {
  transition:
    opacity 0.3s ease,
    transform 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
  transform: scale(1.3);
}
</style>

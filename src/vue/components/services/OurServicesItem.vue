<script setup lang="ts">
import { PropType, ref } from 'vue';
import { TItem } from '../../types/TOurServicesResponse';
import IPlus from '../../icons/IPlus.vue';

const props = defineProps({
  item: {
    type: Object as PropType<TItem>
  },
  index: {
    type: Number
  }
});

const isOpen = ref(false);
</script>

<template>
  <div
    class="our-services-item"
    :class="{ 'our-services-item--first': index === 0 }"
  >
    <img :src="item?.image" class="our-services-item__img" alt="" />
    <div class="our-services-item__inner">
      <h3 class="our-services-item__subtitle">{{ item?.title }}</h3>
      <button @click="isOpen = true" class="our-services-item__btn">
        <IPlus />
      </button>
    </div>
  </div>
</template>

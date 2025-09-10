<script setup lang="ts">
import { PropType, ref } from 'vue';
import { TItem } from '../../types/TOurServicesResponse';
import IPlus from '../../icons/IPlus.vue';

const emits = defineEmits(['emit_index']);

const props = defineProps({
  item: {
    type: Object as PropType<TItem>
  },
  index: {
    type: Number
  }
});

function onClick() {
  if (props.index === 0) {
    console.log('1');
  } else {
    emits('emit_index', props.index);
  }
}
</script>

<template>
  <div
    class="our-services-item"
    :class="{ 'our-services-item--first': index === 0 }"
  >
    <img :src="item?.image" class="our-services-item__img" alt="" />
    <div class="our-services-item__inner">
      <h3 class="our-services-item__subtitle">{{ item?.title }}</h3>
      <button @click="onClick" class="our-services-item__btn">
        <IPlus />
      </button>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import IMinus from '../../icons/IMinus.vue';

const emits = defineEmits(['emit_close']);

const props = defineProps({
  title: {
    type: String
  },
  text: {
    type: String
  }
});

function emitClose() {
  emits('emit_close');
}
</script>

<template>
  <div class="our-services-popup">
    <div class="our-services-popup__overlay" @click.self="emitClose"></div>
    <div class="our-services-popup__wrapper">
      <div class="our-services-popup__inner">
        <header class="our-services-popup__header">
          <h3 class="our-services-popup__title">{{ title }}</h3>
          <button
            @click="emitClose"
            class="our-services-item__btn our-services-item__btn--red"
          >
            <IMinus />
          </button>
        </header>
        <div class="our-services-popup__body">
          <div class="our-services-popup__description" v-html="text"></div>
        </div>
      </div>
    </div>
  </div>
</template>

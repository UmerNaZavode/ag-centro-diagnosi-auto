<script setup lang="ts">
import { ref } from 'vue';
import IMinus from '../../icons/IMinus.vue';

const isOpen = ref(false);
const closePopup = () => {
  isOpen.value = false;
};
</script>

<template>
  <div class="our-services-popup">
    <div class="our-services-popup__overlay" @click.self="closePopup"></div>
    <div class="our-services-popup__inner">
      <header class="our-services-popup__header">
        <h3 class="our-services-popup__title">Lorem ipsum dolor sit amet.</h3>
        <button @click="closePopup" class="our-services-item__btn our-services-item__btn--red">
          <IMinus />
        </button>
      </header>
      <div class="our-services-popup__body">
        <div class="our-services-popup__description">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente a
            dignissimos voluptatibus optio quasi nesciunt architecto ad, dolor
            itaque sequi?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente a
            dignissimos voluptatibus optio quasi nesciunt architecto ad, dolor
            itaque sequi?
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

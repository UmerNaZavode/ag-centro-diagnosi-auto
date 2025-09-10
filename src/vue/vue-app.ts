import { createApp } from 'vue';
import OurServicesView from './views/OurServicesView.vue';
// import MainSearch from "./components/MainSearch.vue";
// import SimpleComponent from "./components/SimpleComponent.vue";
// import MainApp from "./views/MainApp.vue";
// import SingleAdd from "./single/SingleAdd.vue";
// createVueApp('#homeFilter', 'home-filter', HomeFilter);
// createVueApp("#myId", SimpleComponent);
// createVueApp("#mainApp", MainApp);
createVueApp("#ourServices", OurServicesView);

function createVueApp(id: string, component) {
  if (document.querySelector(id)) {
    const app = createApp(component);
    app.mount(id);
  }
}

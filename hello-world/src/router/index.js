import { createWebHistory, createRouter } from "vue-router";
import GeneralRoutes from "./general.js";
import PropertyRoutes from "./property.js";

var allRoutes = [];
allRoutes = allRoutes.concat(GeneralRoutes, PropertyRoutes);

const routes = allRoutes;


const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

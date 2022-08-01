import Property from "@/components/main/property/Property.vue";
import PropertyList from "@/components/main/property/PropertyList.vue";
import MoveCroatio from '@/components/main/property/MoveCrotia.vue';
import About from '@/components/main/about/About.vue';


const router = [
  {
    path: "/property/:id",
    name: "Property",
    component: Property,
  },
  {
    path: "/neighbouring/:id",
    name: "PropertyList",
    component: PropertyList,
  },

  {
    path: "/properties/move-in-croatia",
    name: "MoveCroatio",
    component: MoveCroatio,
  },

  {
    path: "/about",
    name: "about",
    component: About,
  },
];


export default router;

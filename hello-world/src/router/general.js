import Home from "@/components/main/Home.vue";
import Contact from '@/components/main/section/Contact.vue';
import AdvanceSearch from '@/components/main/search/AdvanceSearch.vue';

const router = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },

  {
    path: "/contact",
    name: "Contact",
    component: Contact,
  },

  {
    path: "/search",
    name: "Search",
    component: AdvanceSearch,
  },
];


export default router;

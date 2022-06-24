import Home from "@/components/main/Home.vue";
import Contact from '@/components/main/section/Contact.vue';

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
];


export default router;

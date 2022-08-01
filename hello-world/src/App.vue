<template>
<div>
 
  <header-section></header-section>
  <router-view></router-view>
  <footer-section></footer-section>

</div>
</template>

<script>
import HeaderSection from '@/components/main/layout/header.vue';
import FooterSection from '@/components/main/layout/footer.vue'
export default {
  name: 'App',
  components:{HeaderSection, FooterSection},
 
}
</script>


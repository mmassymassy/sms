<template>
    <NavbarVue/>
    <router-view></router-view>

</template>
<script>
import NavbarVue from './skel/Navbar.vue';
import Footer from './skel/Footer.vue';
export default{
    components : {
        NavbarVue,
        Footer
    },

}
</script>

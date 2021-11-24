<template>
<b-container fluid="md">
    <FormReview/>
</b-container>
</template>

<script>
import FormReview from './components/FormReview.vue';
export default {
  name: 'App',
  components: {
    FormReview
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

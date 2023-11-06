<script>
import {  RouterView } from 'vue-router'

export default {
}
</script>
<template>
  <v-app id="app">
    <v-app-bar
      class="px-3"
      color="white"
      flat
      density="compact"
    >
      <v-spacer />
    
      <v-btn
        class="mx-4 white--text"
        x-large
        rounded
        color="deep-purple darken-1"
        to="/"
      >
        Retailes
      </v-btn>
      <v-spacer />
    </v-app-bar>

    <v-main class="bg-grey-lighten-3">
      <v-container>
        <RouterView />
      </v-container>
    </v-main>
  </v-app>
</template>
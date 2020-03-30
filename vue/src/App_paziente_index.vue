<template>
      <q-layout>
            <q-page-container>
                  <HelloWorld msg="Welcome to Ricevute-index" />
            </q-page-container>
      </q-layout>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue';

export default {
      //paths in package.json:
      //"cssPath": "C:/wamp64/www/hugo/web/css/site/ricevuta/index",
      //"jsPath": "C:/wamp64/www/hugo/web/js/site/ricevuta/index",
      name: 'App',
      components: {
            HelloWorld,
      },
};
</script>

<style></style>

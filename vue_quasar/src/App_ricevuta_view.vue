<template>
      <q-layout>
            <q-page-container>
                  <HelloWorld />
            </q-page-container>
      </q-layout>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue';

export default {
      name: 'App',

      components: {
            HelloWorld,
      },
};
</script>

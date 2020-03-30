<template>
      <q-layout>
            <q-page-container>
                  <HelloWorld
                        msg="Questa è la pagina ricevuta/view generata con Vuejs"
                  />
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

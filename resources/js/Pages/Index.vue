<script setup>
import { ref } from "vue";

const count = ref(0);

// functions
function incrementAndLog() {
    count.value++;
    console.log(count.value);
}
</script>

<template>
    <h1>Please press the button and check the console log</h1>
    <button @click="incrementAndLog">{{ count }}</button>
</template>

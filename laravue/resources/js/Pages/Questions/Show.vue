<script setup>
defineProps({
    question: {
        type: Object,
        required: true
    }
})
</script>


<template>
    <div>
        <p> ID : {{ question.id }} </p>
        <p> Title : {{ question.title }} </p>
    </div>
</template>
<script setup>
import { computed } from "vue";

const { user, postAt, isAnswer } = defineProps({
  user: {
    type: Object,
    required: true,
  },
  postAt: {
    type: Object,
    required: true,
  },
  isAnswer: {
    type: Boolean,
    default: false,
  },
});

const postAtString = computed(() => {
  const prefix = isAnswer ? "Answer at" : "Asked at";
  return prefix + " " + postAt.formatted;
});

const classes = computed(() => {
  return {
    owner: !isAnswer,
    author: true,
  };
});

</script>

<template>
  <div>
    <div :class="classes">
      <div class="author-info">
        <div class="text-muted mb-1">
          {{ postAtString }}
        </div>
        <a href="#" class="avatar-md">
          <div class="d-flex align-items-center justify-content-start">
            <img :src="user.avatar_url" class="me-2" />
            <span>{{ user.name }}</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>
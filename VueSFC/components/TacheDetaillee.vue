<template>
  <li>
    {{ uneTache.text }}
    <button @click="$emit('suppression', uneTache.id)">
      X
    </button>
  </li>
</template>

<script>
export default {
  props: {
    uneTache: {
      type: Object,
      required: true
    }
  }
}
</script>
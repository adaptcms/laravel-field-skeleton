<template>
  <div class="flex-col">
    <!-- Any options you want to have when a package field is created with this field. ex: a select field would have an input to enter in comma separated options available -->
  </div>
</template>

<script>
import { isEmpty } from 'lodash'

export default {
  props: [
    'value',
    'field',
    'package',
    'errors',
    'fields'
  ],

  watch: {
    value (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.selected = newVal
      }
    },

    selected: {
      handler: function (newVal, oldVal) {
        this.$emit('input', newVal)
      },
      deep: true
    }
  },

  data () {
    return {
      selected: null
    }
  },

  mounted () {
    if (!isEmpty(this.value)) {
      this.selected = this.value
    }
  }
}
</script>

Nova.booting((Vue, router, store) => {
  Vue.component('index-text-linked', require('./components/IndexField.vue'))
  Vue.component('detail-text-linked', require('./components/DetailField.vue'))
  Vue.component('form-text-linked', require('./components/FormField.vue'))
})

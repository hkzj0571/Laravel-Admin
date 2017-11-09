window._ = require('lodash')

window.axios = require('axios')

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content

window.axios.defaults.headers.common['Authorization'] = document.head.querySelector('meta[name="api-token"]').content
<template>
    <div :class="`text-${field.textAlign}`">
        <template v-if="hasValue">
            <div v-if="field.asHtml" v-html="field.value"></div>
            <template v-else>
                <a v-if="hasUrl" :href="field.url" v-else class="whitespace-no-wrap no-underline dim text-primary font-bold">{{ field.value }}</a>
                <span v-else class="whitespace-no-wrap">{{ field.value }}</span>
            </template>
        </template>
        <p v-else>&mdash;</p>
    </div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],

    computed: {
        /**
         * Determine if the field has a value other than null.
         */
        hasValue() {
            return this.field.value !== null
        },

        hasUrl() {
            return this.field.url !== null
        }
    },
}
</script>

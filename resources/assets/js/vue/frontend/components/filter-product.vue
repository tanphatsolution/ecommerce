<template>
    <div v-for="property in properties" class="layered-content">
        <div class="layered_subtitle"> {{ property.name }} </div>
        <ul class="check-box-list" v-show="!option">
            <li v-for="option in property.options">
                <input type="checkbox" id="p_{{ option.id }}" value="{{ option.id }}" v-model="filtersSelected">
                <label for="p_{{ option.id }}">{{ option.name }}</label>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        props: {
            properties: {
                type: Object,
                default: function () {
                    return [];
                }
            }
        },
        data: function () {
            return {
                filtersSelected: [],
            }
        },
        watch: {
            filtersSelected: function (val) {
                console.log(val);
            }
        }
    }
</script>
<script setup>
const props = defineProps({
    donut: {
        type: Object,
        default: {}
    },
});
</script>
<script>
export default {
    methods: {
        placeOrder(e){
        //e.preventDefault() // Prevent page from reloading.
        //console.log(this.first_name, this.email);
        }
    },
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
}
</script>

<template>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-xl font-bold text-gray-900">Complete Your Order</h2>

            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                
                    <div class="relative">
                        <div class="relative w-full h-72 rounded-lg overflow-hidden">
                            <img :src="donut.image_url" alt="donut" class="w-full h-full object-center object-cover" />
                        </div>
                        <div class="relative mt-4">
                            <h3 class="text-sm font-medium text-gray-900">{{ donut.name }}</h3>
                        </div>
                        <div class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                            <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50" />
                        </div>
                    </div>
                    <div class="mt-6">
                        <h3>Customer Information:</h3>
                        <div id="orderForm">
                            <form v-on:submit="placeOrder" action="/checkout" method="POST">
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="hidden" name="donut_id" :value="donut.id">
                            <p style="display:none; visibility: hidden;">Message is: {{ message }}</p>
                            Name:<br />
                            <input v-model="first_name" name="first_name" placeholder="First Name" /><br />
                            <input v-model="last_name" name="last_name" placeholder="Last Name" /><br />
                            <br /><br />
                            Address:<br />
                            <input v-model="street_address" name="street_address" placeholder="Street Address" /><br />
                            <input v-model="city" name="city" placeholder="City" /><br />
                            <input v-model="state" name="state" placeholder="State" /><br />
                            <input v-model="zip_code" name="zip_code" placeholder="Zip Code" /><br />
                            <br /><br />
                            <input v-model="email" name="email" placeholder="Email Address" /><br />
                            <input v-model="phone" name="phone" placeholder="Phone Number" /><br />
                            <br /><br />
                            <button type="submit">Place Order</button>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</template>

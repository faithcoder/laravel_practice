<template lang="">
    <div>
        <div class="container flex justify-between">
            <nuxt-link to="/" class="flex font-size-32 font-semibold">
                <img src="~/assets/img/logo.png" alt="Bengal Shop"/> Bengal Shop
            </nuxt-link>
        </div>
        <div class="w-96">
            <div class="border-grey-100 p-1 flex">
                <div class="min-w-max">
                    <img src="~/assets/img/search.png" alt="search-icon"/>
                </div>
            <input type="text" placeholder="Search Here..."/>
            <button class="bg-grey")></button>
            </div>
        </div>



    </div>
</template>
<script>
export default {
    name: "Header"
}
</script>
<style lang="">
    
</style>
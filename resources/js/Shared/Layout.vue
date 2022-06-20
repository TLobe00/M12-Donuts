<script setup>
import Nav from './Nav.vue';</script>
<template>
    <Nav></Nav>
    <div class="pt-12 h-full">
        <div class="max-w-7xl mx-auto min-h-screen">
            <slot></slot>
        </div>
    </div>
</template>

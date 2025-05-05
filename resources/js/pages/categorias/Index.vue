<template>
    <div>
    <Link :href="route('categorias.create')">Crear Categoría</Link>
    <table>
    <tr v-for="cat in categorias.data" :key="cat.id">
    <td>{{ cat.nombre }}</td>
    <td>{{ cat.descripcion }}</td>
    <td>{{ cat.productos_count }}</td>
    </tr>
    </table>
    </div>
    </template>
    <script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({ categorias: Object })
    </script>
    
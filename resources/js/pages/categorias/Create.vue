<template>
    <form @submit.prevent="form.post(route('categorias.store'))">
    <input v-model="form.nombre" placeholder="Nombre" />
    <input v-model="form.descripcion" placeholder="Descripción" />
    <button>Guardar</button>
    </form>
    </template>
    <script setup>
    import { useForm } from '@inertiajs/vue3'
    const form = useForm({ nombre: '', descripcion: '' })
    </script>
    
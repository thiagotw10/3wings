<template>
  <div class="relative">
    <Head title="Dashboard" />
    <h1 class="mb-8 text-3xl font-bold">Dashboard</h1>
    <div class="flex flex-row justify-between w-2/4 absolute top-0 right-0">
      <modal-organizacao class="w-2/5" :dados-contato="organizacoes" />
      <modal-contatos class="w-2/5" :dados-contato="contatos" />
    </div>
    <grafico :post-title="dashboard" style="max-width: 500px; min-width: 300px" />
  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import Grafico from '@/Shared/Grafico'
import ModalContatos from '@/Shared/ModalContatos'
import ModalOrganizacao from '@/Shared/ModalOrganizacao'


export default {
  components: {
    Head,
    Grafico,
    ModalContatos,
    ModalOrganizacao,
  },
  layout: Layout,
  props: {
    dashboard: Object,
    contatos: Object,
    organizacoes: Object,
  },
}
</script>

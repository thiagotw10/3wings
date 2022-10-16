<!-- eslint-disable vue/no-template-shadow -->
<template>
  <div>
    <label id="listbox-label" class="block text-gray-700 text-sm font-medium">Contatos (qtd: {{ dadosContato[0].quantidade }})</label>
    <div class="relative mt-0 mb-50">
      <ul class="absolute z-10 mt-1 py-1 w-full max-h-56 text-base bg-white rounded-md focus:outline-none shadow-lg overflow-auto ring-1 ring-black ring-opacity-5 sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
        <li v-for="dados in dadosContato" id="listbox-option-0" :key="dados" class="relative pl-3 pr-9 py-2 text-gray-900 cursor-default select-none" role="option">
          <div class="flex items-center">
            <img :src="dados.foto" alt="" class="flex-shrink-0 w-6 h-6 rounded-full" />
            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
            <span class="block ml-3 font-normal truncate">{{ dados.nome }}</span>
          </div>
          <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
          </span>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    dadosContato: Object,
  },
  mounted() {
    console.log(this.dadosContato)
  },
}
</script>

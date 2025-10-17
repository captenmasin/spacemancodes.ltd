<template>
  <main class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
      <div
          class="absolute inset-0 opacity-50 h-screen w-full overflow-clip flex flex-col items-center justify-center gap-4"
      >
          <StarsBackground
              :factor="0.05"
              :speed="50"
              star-color="#fff"
          />
      </div>
    <div class="text-center relative">
      <img
        :src="iconSrc"
        alt="SpacemanCodes LTD"
        class="mx-auto mb-4 w-28 lg:w-56"
      />
      <h1 class="mt-4 font-poppins text-3xl font-semibold sm:text-5xl">
        SpacemanCodes LTD
      </h1>
      <ul
        v-if="websiteEntries.length"
        class="mt-8 flex flex-wrap items-center justify-center gap-2"
      >
        <li v-for="[domain, favicon] of websiteEntries" :key="domain">
          <a
            class="flex items-center gap-1.5 rounded-lg bg-white/10 px-4 py-1.5 text-white transition-colors hover:bg-black/5 hover:text-primary"
            :href="`https://${domain}`"
            target="_blank"
            rel="noreferrer"
          >
            <div
              class="flex aspect-square w-6 items-center justify-center rounded-full bg-white p-1.5"
            >
              <img
                class="w-full"
                width="12"
                height="12"
                :alt="`Favicon for ${domain}`"
                :src="favicon"
              />
            </div>
            <span class="-mt-[2px]">{{ domain }}</span>
          </a>
        </li>
      </ul>
    </div>
  </main>
</template>

<script setup>
import { computed, onMounted } from 'vue';
import {StarsBackground} from "./js/components/ui/bg-stars";

const props = defineProps({
  websites: {
    type: Object,
    default: () => ({}),
  },
  version: {
    type: String,
    default: '',
  },
});

const websiteEntries = computed(() => Object.entries(props.websites ?? {}));
const iconSrc = computed(() =>
  props.version ? `/icon.svg?v=${props.version}` : '/icon.svg',
);
</script>

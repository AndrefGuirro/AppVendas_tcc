import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

// https://vitejs.dev/config/
export default defineConfig({
  server: {
    host: 'localhost',
    port: 3000, // ou qualquer outra porta de sua escolha
  },
  plugins: [vue()],
});

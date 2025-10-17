import { createApp } from 'vue';

import App from './App.vue';
import './css/app.css';

const el = document.getElementById('app');

if (el) {
  let websites = {};

  if (el.dataset.websites) {
    try {
      websites = JSON.parse(el.dataset.websites);
    } catch (error) {
      console.error('Failed to parse websites dataset for Vue app.', error);
    }
  }

  const version = el.dataset.version ?? '';

  createApp(App, { websites, version }).mount(el);
}
